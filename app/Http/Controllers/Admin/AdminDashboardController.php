<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $servicesCount = Service::count();

        $latestService = Service::latest()->first();

        $latestServices = Service::latest()->take(5)->get();

        $totalValue = Service::sum('price');

        return view('admin.dashboard', compact(
            'servicesCount',
            'latestService',
            'latestServices',
            'totalValue'
        ));

}
}
