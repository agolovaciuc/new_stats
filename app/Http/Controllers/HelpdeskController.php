<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpdeskController extends Controller
{
    public function index()
    {
        $pageTitle = 'Helpdesk';

        return view('helpdesk.index', compact('pageTitle'));
    }
}
