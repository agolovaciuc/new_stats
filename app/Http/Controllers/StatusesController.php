<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusesController extends Controller
{
    public function index()
    {
        $pageTitle = 'Statuses';

        return view('statuses.index', compact('pageTitle'));
    }
}
