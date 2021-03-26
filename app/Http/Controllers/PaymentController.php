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


        $validatedData = $request->validate([
            'room_number' => ['required', 'exists:rooms,number'],
            'accompany_number' => 'required',
            'paid_price' => 'required',
        ]);

        //check that accompany number is less than room capacity
        $room = Room::where('number', $request->room_number)->get();
        if ($room->capacity < $request->accompany_number) {
            return "accompany number is less than room capacity";
        }

        // dd($request->amount);
        $stripe = Stripe::make('sk_test_51IWuBcLka668aF7limG1AyoNbWjuTzo8BYMfA6ua0wdlxefawzm3n8EwkH9MQSVDQznsm07IuIayROI5wMGYQQZa00GFoXxj2P', '2020-03-02'); // used Stripe secret key, not Publishable key

        $transactionResponse = $stripe->charges()->create([
            'amount'   => $request->amount,
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'receipt_email' => "admin@email.com",
        ]);
        dd($transactionResponse->status);
        if ($transactionResponse->status === "succeeded") {
            //logic for saving in db
            Reservation::create($validatedData);
            // return redirect()->route('rooms.index');
        }
        // return redirect()->route('rooms.index');
        return "succeeded";
    }

    public function create(Request $request)
    {
        // dd($request->amount);
        return view('reservations.buy', [
            'amount' => $request->amount,
            'room_number' => $request->roomId,
            'accompany_number' => $request->accompany_number
        ]);
    }
}
