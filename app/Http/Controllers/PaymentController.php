<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Stripe;
use App\Models\Room;

class PaymentController extends Controller
{
    public function store(Request $request)
    {


        // $validatedData = $request->validate([
        //     'room_number' => ['required', 'exists:rooms,number'],
        //     'accompany_number' => 'required',
        //     'paid_price' => 'required',
        // ]);

        $clientId = auth()->user()->id;
        // check that accompany number is less than room capacity
        $room = Room::where('number', $request->room_number)->get();

        if ($room[0]->capacity < $request->accompany_number) {
            return "accompany number is less than room capacity";
        }


        $stripe = Stripe::make('sk_test_51IWuBcLka668aF7limG1AyoNbWjuTzo8BYMfA6ua0wdlxefawzm3n8EwkH9MQSVDQznsm07IuIayROI5wMGYQQZa00GFoXxj2P', '2020-03-02'); // used Stripe secret key, not Publishable key

        $transactionResponse = $stripe->charges()->create([
            'amount'   => $request->amount,
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'receipt_email' => "admin@email.com",
        ]);

        if ($transactionResponse['status'] === "succeeded") {

            $reservation = new Reservation();
            $reservation->client_id = $clientId;
            $reservation->paid_price = $request->amount;
            $reservation->accompany_number = $request->accompany_number;
            $reservation->room_number = $request->room_number;
            // dd($reservation->room_number);
            // $reservation->room_number = $request->room_number;
            $reservation->save();

            //logic for saving in db
        
            Reservation::create($request->all());
            // return redirect()->route('rooms.index');
        }
        // return redirect(clientreservations.index)->route('rooms.index');
        return redirect()->route('clientreservations.index', ['client' => $clientId]);
    }

    public function create(Request $request)
    {
        return view('clients.buy', [
            'amount' => $request->amount,
            'room_number' => $request->room_number,
            'accompany_number' => $request->accompany_number
        ]);
    }
}
