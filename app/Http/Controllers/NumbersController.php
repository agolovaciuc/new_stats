<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumbersController extends Controller
{
    public function index()
    {
        $titlePage = 'Numbers';

        return view('numbers.index', compact('titlePage'));
    }

}
