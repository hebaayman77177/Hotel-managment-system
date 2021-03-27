<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class floormanagecontroller extends Controller
{
    //
    public function index(){
        return view('manage.floormanager.index',[
         'floors' => Floor::all(),
        ]);
    }
}
