<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaxController extends Controller
{
    public function index()
    {
        $titlePage = 'Fax';
        return view('fax.index', compact('titlePage'));
    }
}
