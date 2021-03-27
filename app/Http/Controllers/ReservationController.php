<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use DataTables;
use Yajra\DataTables\Html\Builder;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $room_number)
    {
        return view('clients.createReservation', [
            'room_number' => $room_number
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $roomId)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buy(Request $request, $roomId)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    public function clientreservations(Reservation $reservation)
    {
        $clientId = auth()->user()->id;
        return  redirect()->route('clientreservations.index', ['client' => $clientId]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function getReservations(Builder $builder, $clientId)
    {
        $reservations = Reservation::where('client_id', $clientId);


        if (request()->ajax()) {
            return DataTables::of($reservations)
                ->toJson();
        }

        $html = $builder->columns([
            ['data' => 'room_number', 'name' => 'room_number', 'title' => 'Room Number'],
            ['data' => 'accompany_number', 'name' => 'accompany_number', 'title' => 'Accompany Number'],
            ['data' => 'paid_price', 'name' => 'paid_price', 'title' => 'Paid Price'],
            ['data' => 'created_at', 'name' => 'created_at', 'title' => 'Reservation Date'],
        ]);

        return view('clients.reservations', compact('html'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
