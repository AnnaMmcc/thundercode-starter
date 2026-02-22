<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services\ServiceService;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    protected $service;

    public function __construct(ServiceService $service)
    {
        $this->service = $service;
    }


    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(StoreServiceRequest $request)
    {
        $this->service->create($request->validated());
        return redirect()->route('admin.services.index')
            ->with('success', 'Service added!');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }


    public function update(UpdateServiceRequest $request, Service $service)
    {
        $this->service->update($service, $request->validated());
        return redirect()->route('admin.services.index')
            ->with('success', 'Service updated!');
    }


    public function destroy(Service $service)
    {
        $this->service->delete($service);
        return redirect()->route('admin.services.index')
            ->with('success', 'Service deleted!');
    }

    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }
}

