<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\DataTables\RoomDataTable;

class RoomController extends Controller
{
    public function index(RoomDataTable $dataTable)
    {
        return $dataTable->render('rooms.index');
    }
}
