<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services\ServiceService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $service;

    public function __construct(ServiceService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'nullable|numeric',
            'image' => 'nullable|image|max:2048',
        ]);

        $this->service->create($data);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service added!');
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'nullable|numeric',
            'image' => 'nullable|image|max:2048',
        ]);

        $this->service->update($service, $data);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service updated!');
    }

    public function destroy(Service $service)
    {
        $this->service->delete($service);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service deleted!');
    }
}
