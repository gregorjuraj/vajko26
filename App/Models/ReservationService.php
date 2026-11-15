<?php

namespace App\Models;

use Framework\Core\Model;

class ReservationService extends Model
{
    protected static ?string $tableName = 'reservation_services';

    protected ?int $id = null;
    protected int $reservation_id = 0;
    protected int $service_id = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReservationId(): int
    {
        return $this->reservation_id;
    }

    public function getServiceId(): int
    {
        return $this->service_id;
    }

    public function setReservationId(int $reservationId): void
    {
        $this->reservation_id = $reservationId;
    }

    public function setServiceId(int $serviceId): void
    {
        $this->service_id = $serviceId;
    }

    public function getService(): ?Service
    {
        return $this->getOneRelated(Service::class, 'service_id');
    }
}