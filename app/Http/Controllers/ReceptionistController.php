<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ReceptionistController extends Controller
{
    public function greeting()
    {
        return view('receptionist.greeting');
    }

    public function index()
    {
        $clients =Client::all();
        return view('receptionist.index',compact('clients'));
    }

    public function show()
    {
        return view('receptionist.show');
    }

    public function update()
    {
        return view('receptionist.update');
    }
}
