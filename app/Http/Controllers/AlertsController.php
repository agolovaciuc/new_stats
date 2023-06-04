<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertsController extends Controller
{
    public function index()
    {
        $pageTitle = 'Alerts';

        return view('alerts.index', compact('pageTitle'));
    }
}
