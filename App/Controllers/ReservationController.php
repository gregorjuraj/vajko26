<?php

namespace App\Controllers;

use App\Models\Reservation;
use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

use App\Models\Service;
use App\Models\ReservationService;
use Framework\DB\Connection;


class ReservationController extends BaseController
{
    public function authorize(Request $request, string $action): bool
    {
        return true;
    }

    public function index(Request $request): Response
    {
        $reservations = Reservation::getAll(
            orderBy: 'start_at DESC'
        );

        return $this->html([
            'reservations' => $reservations
        ]);
    }

    public function create(Request $request): Response
    {
        $services = Service::getAll(
            whereClause: 'active = ?',
            whereParams: [1]
        );

        $error = null;

        if ($request->isPost()) {
            $selectedIds = $request->post('service_ids') ?? [];
            $startValue = $request->post('start_at');

            if (empty($selectedIds) || empty($startValue)) {
                $error = 'Vyberte dátum a aspoň jednu službu.';
            } else {
                $start = new \DateTimeImmutable($startValue);
                $duration = 0;
                $selectedServices = [];

                foreach ($services as $service) {
                    if (in_array($service->getId(), $selectedIds)) {
                        $selectedServices[] = $service;
                        $duration += $service->getDuration();
                    }
                }

                if (empty($selectedServices)) {
                    $error = 'Vyberte aspoň jednu aktívnu službu.';
                } else {
                    $end = $start->modify("+{$duration} minutes");

                    $reservation = new Reservation();
                    $reservation->setStartAt($start->format('Y-m-d H:i:s'));
                    $reservation->setEndAt($end->format('Y-m-d H:i:s'));
                    $reservation->setNote(trim($request->post('note') ?? ''));
                    $reservation->setStatus('valid');

                    $connection = Connection::getInstance();
                    $connection->beginTransaction();

                    try {
                        $reservation->save();

                        foreach ($selectedServices as $service) {
                            $serviceLink = new ReservationService();
                            $serviceLink->setReservationId($reservation->getId());
                            $serviceLink->setServiceId($service->getId());
                            $serviceLink->save();
                        }

                        $connection->commit();
                    } catch (\Throwable $exception) {
                        $connection->rollBack();
                        throw $exception;
                    }

                    return $this->redirect($this->url('reservation.index'));
                }
            }
        }

        return $this->html([
            'services' => $services,
            'error' => $error
        ]);
    }

    public function edit(Request $request): Response
    {
        $id = (int) $request->get('id');
        $reservation = Reservation::getOne($id);

        if ($reservation === null) {
            return $this->redirect($this->url('reservation.index'));
        }

        $services = Service::getAll();
        $serviceLinks = $reservation->getServiceLinks();
        $selectedIds = [];

        foreach ($serviceLinks as $serviceLink) {
            $selectedIds[] = $serviceLink->getServiceId();
        }

        $error = null;

        if ($request->isPost()) {
            $newIds = $request->post('service_ids') ?? [];
            $startValue = $request->post('start_at');

            if (empty($newIds) || empty($startValue)) {
                $error = 'Vyberte dátum a aspoň jednu službu.';
            } else {
                $start = new \DateTimeImmutable($startValue);
                $duration = 0;
                $selectedServices = [];

                foreach ($services as $service) {
                    $canUse = $service->isActive()
                        || in_array($service->getId(), $selectedIds);

                    if ($canUse && in_array($service->getId(), $newIds)) {
                        $selectedServices[] = $service;
                        $duration += $service->getDuration();
                    }
                }

                if (empty($selectedServices)) {
                    $error = 'Vyberte aspoň jednu dostupnú službu.';
                } else {
                    $end = $start->modify("+{$duration} minutes");

                    $reservation->setStartAt($start->format('Y-m-d H:i:s'));
                    $reservation->setEndAt($end->format('Y-m-d H:i:s'));
                    $reservation->setNote(trim($request->post('note') ?? ''));

                    $connection = Connection::getInstance();
                    $connection->beginTransaction();

                    try {
                        $reservation->save();

                        foreach ($serviceLinks as $serviceLink) {
                            $serviceLink->delete();
                        }

                        foreach ($selectedServices as $service) {
                            $serviceLink = new ReservationService();
                            $serviceLink->setReservationId($reservation->getId());
                            $serviceLink->setServiceId($service->getId());
                            $serviceLink->save();
                        }

                        $connection->commit();
                    } catch (\Throwable $exception) {
                        $connection->rollBack();
                        throw $exception;
                    }

                    return $this->redirect($this->url('reservation.index'));
                }
            }
        }

        return $this->html([
            'reservation' => $reservation,
            'services' => $services,
            'selectedIds' => $selectedIds,
            'error' => $error
        ]);
    }

    public function delete(Request $request): Response
    {
        if ($request->isPost()) {
            $id = (int) $request->post('id');
            $reservation = Reservation::getOne($id);

            if ($reservation !== null) {
                $reservation->delete();
            }
        }

        return $this->redirect($this->url('reservation.index'));
    }
}