<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordingsController extends Controller
{
    public function index()
    {
        $titlePage = 'Dashboard';

        return view('recordings.index', compact('titlePage'));
    }
}
