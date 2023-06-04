<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $titlePage = 'Dashboard';
        return view('dashboard.index', compact('titlePage'));
    }
}
