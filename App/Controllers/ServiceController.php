<?php

namespace App\Controllers;

use App\Models\Service;
use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class ServiceController extends BaseController
{
    public function authorize(Request $request, string $action): bool
    {
        return true;
    }

    public function index(Request $request): Response
    {
        $services = Service::getAll();

        return $this->html([
            'services' => $services
        ]);
    }

    public function create(Request $request): Response
    {
        if ($request->isPost()) {
            $service = new Service();

            $service->setName(trim($request->post('name') ?? ''));
            $service->setDescription(trim($request->post('description') ?? ''));
            $service->setPrice($request->post('price') ?? '0.00');
            $service->setDuration((int) $request->post('duration'));
            $service->setActive($request->post('active') === '1');

            $service->save();

            return $this->redirect($this->url('service.index'));
        }

        return $this->html();
    }

    public function edit(Request $request): Response
    {
        $id = (int) $request->get('id');
        $service = Service::getOne($id);

        if ($service === null) {
            return $this->redirect($this->url('service.index'));
        }

        if ($request->isPost()) {
            $service->setName(trim($request->post('name') ?? ''));
            $service->setDescription(trim($request->post('description') ?? ''));
            $service->setPrice($request->post('price') ?? '0.00');
            $service->setDuration((int) $request->post('duration'));
            $service->setActive($request->post('active') === '1');

            $service->save();

            return $this->redirect($this->url('service.index'));
        }

        return $this->html([
            'service' => $service
        ]);
    }

    public function delete(Request $request): Response
    {
        if ($request->isPost()) {
            $id = (int) $request->post('id');
            $service = Service::getOne($id);

            if ($service !== null) {
                $service->delete();
            }
        }

        return $this->redirect($this->url('service.index'));
    }
}