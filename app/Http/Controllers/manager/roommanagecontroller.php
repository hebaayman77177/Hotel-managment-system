<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class roommanagecontroller extends Controller
{
    public function index(){
        return view('manage.roommanager.index',[
         'rooms' => Room::all(),
        ]);
    }

}
