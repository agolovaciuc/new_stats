<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $titlePage = 'Clients';
        return view('clients.index', compact('titlePage'));
    }
}
