<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Inertia\Inertia;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::get();

        return Inertia::render('Client_Index', [
            'clients' => $clients,
        ]);
    }
}

