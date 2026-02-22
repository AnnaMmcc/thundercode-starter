<?php
namespace App\Services;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceService
{
    public function create(array $data): Service
    {
        if (isset($data['image'])) {
            $data['image'] = $data['image']->store('services', 'public');
        }

        return Service::create($data);
    }

    public function update(Service $service, array $data): Service
    {
        if (isset($data['image'])) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $data['image'] = $data['image']->store('services', 'public');
        }

        $service->update($data);

        return $service;
    }

    public function delete(Service $service): void
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();
    }
}
