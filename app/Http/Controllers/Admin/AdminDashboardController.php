<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalServices' => Service::count(),
            'totalMessages' => ContactMessage::count(),
            'latestServices' => Service::latest()->take(5)->get(),
            'totalValue' => Service::sum('price'),
        ]);
    }
}

