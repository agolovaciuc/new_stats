<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineController extends Controller
{
    public function index()
    {
        $pageTitle = 'Online';

        return view('online.index', compact('pageTitle'));
    }
}
