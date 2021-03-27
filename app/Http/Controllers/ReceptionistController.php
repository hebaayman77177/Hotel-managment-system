<?php

namespace App\Http\Controllers;
use App\DataTables\ClientTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use DataTables;
use Yajra\DataTables\Html\Builder;

class ReceptionistController extends Controller
{
    public function greeting()
    {
        return view('receptionist.greeting');
    }

    //Manage Clients Who Not Approved
    public function index(Builder $builder)
    {
        $students = \DB::table('clients')
            ->select(
                'name',
                'id',
                'email'
            )->where('is_approved', '=', 1);

        if (request()->ajax()) {
            return DataTables::of($students)->addColumn('action', function ($row) {
            return '<a href="'.route('client.approve',$row->id).'" class="btn btn-xs btn-primary"> Edit</a>';
            })
            ->toJson();
        }

        $html = $builder->columns([
            ['data' => 'name', 'name' => 'name', 'title' => 'Name'],
            ['data' => 'email', 'name' => 'email', 'title' => 'Email'],
            ['data' => 'id', 'name' => 'id', 'title' => 'Id'],
            ['data' =>  'action', 'name' => 'action','title'=>'Approve', 'orderable' =>  false, 'searchable' =>  false],

        ]);

        return view('receptionist.index', compact('html'));
    }


    //​ Show  Reservations  Data For Each Client
    public function show(Request $request,Builder $builder)
    {
        $students = \DB::table('reservations')
            ->select(
                'room_number',
                'accompany_number',
                'paid_price',
                'country',
                'gender',
                'clients.name'
            )->join('clients','reservations.client_id','=','client.id')
            ->where(['clients.receptionist_id','=' ,'$request.receptionist']);

        if (request()->ajax()) {
            return DataTables::of($students)->toJson();
        }

        $html = $builder->columns([
            ['data' => 'clients.name', 'name' => 'clients.name', 'title' => 'Client'],
            ['data' => 'accompany_number', 'name' => 'accompany_number', 'title' => 'Accompany Number'],
            ['data' => 'room_number', 'name' => 'room_number', 'title' => 'Room Number'],
            ['data' =>  'paid_price', 'name' => 'paid_price','title'=>'Paid Price'],
            ['data' =>  'country', 'name' => 'country','title'=>'Country'],
            ['data' =>  'gender', 'name' => 'gender','title'=>'Gender'],
        ]);

        return view('receptionist.show', compact('html'));
    }


    //Reservation Client
    public function reservedClients(Builder $builder)
    {
        $students = \DB::table('clients')
            ->select(
                'name',
                'email',
                'mobile',
                'country',
                'gender'
            )->where(['clients.recePtionist_id','=' ,'$request.receptionist']);

        if (request()->ajax()) {
            return DataTables::of($students)->toJson();
        }
        $html = $builder->columns([
            ['data' => 'name', 'name' => 'clients.name', 'title' => 'Name'],
            ['data' => 'email', 'name' => 'email', 'title' => 'Email'],
            ['data' => 'mobile', 'name' => 'mobile', 'title' => 'Mobile'],
            ['data' =>  'country', 'name' => 'country','title'=>'Country'],
            ['data' =>  'gender', 'name' => 'gender','title'=>'Gender'],
        ]);

        return view('receptionist.reservedClients', compact('html'));
    }




    //Receptionist Approve Client
    public function approveClient($id, Request $request){
       
        $clientToUpdate  = Client::findOrFail($id);
            $clientToUpdate->update([
                'receptionist_id'=>$request->currentLogedin,
            ]);
        
        // $clientToUpdate->fill()->save();

       return redirect()->route('receptionist.index');
    }
}
