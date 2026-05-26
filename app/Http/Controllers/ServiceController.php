<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
{
    $query = Service::query();

    if ($request->filled('search')) {
        $query->where('title', 'like', '%' . $request->search . '%')
              ->orWhere('description', 'like', '%' . $request->search . '%');
    }

    if ($request->filled('category')) {
        $query->where('category_id', $request->category);
    }

    $services = $query->latest()->paginate(6);

    $categories = Category::all();

    return view('frontend.services', compact('services', 'categories'));
}

    public function show(Service $service)
    {
        return view('frontend.show-service', compact('service'));
    }


}
