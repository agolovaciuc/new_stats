<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScenariosController extends Controller
{
    public function index()
    {
        $pageTitle = 'Scenarios';

        return view('scenarios.index', compact('pageTitle'));
    }
}
