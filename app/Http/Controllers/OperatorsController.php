<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorsController extends Controller
{
    public function index()
    {
        $titlePage = 'Operators';
        return view('operators.index', compact('titlePage'));
    }
}
