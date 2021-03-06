<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;
use App\DataTables\RoomDataTable;
use DataTables;
use Yajra\DataTables\Html\Builder;

class RoomController extends Controller
{
    // public function index(RoomDataTable $dataTable)
    // {
    //     return $dataTable->render('rooms.index');
    // }


    public function index(Builder $builder)
    {

        $students = \DB::table('rooms')
            ->select(
                'rooms.number',
                'capacity',
                'price'
            )
            ->leftJoin('reservations', 'reservations.room_number', '=', 'rooms.number')
            ->whereNull('reservations.room_number');
        // ->get();


        if (request()->ajax()) {
            return DataTables::of($students)->addColumn('action', function ($row) {
                $btn =  "<a href='reservations/rooms/{$row->number}/create' class='edit btn btn-info btn-sm'>View</a>";
                return $btn;
            })
                ->rawColumns(['action'])
                ->toJson();
        }
        $html = $builder->columns([
            ['data' => 'number', 'name' => 'number', 'title' => 'Number'],
            ['data' => 'capacity', 'name' => 'capacity', 'title' => 'capacity'],
            ['data' => 'price', 'name' => 'price', 'title' => 'price'],
            ['data' =>  'action', 'name' => 'action', 'orderable' =>  false, 'searchable' =>  false],
        ]);

        return view('clients.rooms', compact('html'));

        // return $dataTable->render('rooms.index');
    }
}
