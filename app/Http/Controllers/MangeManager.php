<?php

namespace App\Http\Controllers;
use App\DataTables\ClientTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
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
                'id',
                'email',
                'national_id',
                    );

                if (request()->ajax()) {
                    return DataTables::of($students)->addColumn('action', function ($row) {
                    return '<a href="'.route('manageManager.edit',$row->id).'" class="btn btn-xs btn-primary"> Edit</a>
                            <form style="display:inline" method="POST" action="'.route('manageManager.destroy',$row->id).'">
                            
                            <input type="hidden" name="_method" value="DELETE">
                            <a class="btn btn-xs btn-primary" type="submit"> Delete</a>
                            </form>
                            

                            <a href="'.route('manageManager.show',$row->id).'" class="btn btn-xs btn-primary"> Info</a> ';
                    })
                    ->toJson();
                }

            $html = $builder->columns([
                ['data' => 'name', 'name' => 'name', 'title' => 'Name'],
                ['data' => 'email', 'name' => 'email', 'title' => 'Email'],
                ['data' => 'id', 'name' => 'id', 'title' => 'Id'],
                ['data' =>  'password', 'name' => 'password','title'=>'password'],
                ['data' =>  'national_id', 'name' => 'national_id','title'=>'National Id'],
                ['data' =>  'action', 'name' => 'action','title'=>'Actions'],

    
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manager = Employee::find($id);
        return view('admin.manageManager.show',['mId'=> $manager]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manager = Employee::find($id);
        return view('admin.manageManager.edit',['mId'=> $manager]);
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
        $manager = Employee::findOrFail($id);
        $manager->update([
            'id' =>$request->id,
            'name' =>$request->name,
            'email' =>$request->email,
            'national_id' =>$request->national_id,
        ]);
        
        return redirect()->route('manageManager.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return ('hello');
    }
}
