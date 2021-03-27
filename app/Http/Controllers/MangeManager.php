<?php

namespace App\Http\Controllers;
use App\DataTables\ClientTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use DataTables;
use Yajra\DataTables\Html\Builder;
class MangeManager extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Builder $builder)
    {
        $students = \DB::table('employees')
            ->select(
                'name',
                'password',
                'email',
                'national_id',
                'avatar_img');
            // )->where('is_approved', '=', 1);

        if (request()->ajax()) {
            return DataTables::of($students)->addColumn('action', function ($row) {
            return '<a href="'.route('client.approve',$row->id).'" class="btn btn-xs btn-primary"> Edit</a>';
            })
            ->toJson();
        }

        $html = $builder->columns([
            ['data' => 'name', 'name' => 'name', 'title' => 'Name'],
            ['data' =>  'id', 'name' => 'action','id'=>'Approve', 'orderable' =>  false, 'searchable' =>  false],
            ['data' => 'email', 'name' => 'email', 'title' => 'Email'],
            ['data' => 'national_id', 'name' => 'national_id', 'title' => 'National Id'],
            ['data' =>  'avatar_img', 'name' => 'avatar_img', 'title' => 'Image'],
        ]);

        return view('admin.manageManager.index',compact('html'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
