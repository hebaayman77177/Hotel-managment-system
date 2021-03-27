<?php

namespace App\Http\Controllers;
use App\DataTables\ClientTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use DataTables;
use Yajra\DataTables\Html\Builder;

class ManageClientController extends Controller
{
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
                            

                            <a href="'.route('manageClient.show',$row->id).'" class="btn btn-xs btn-primary"> Info</a> ';
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
        return view('admin.manageClient.index',compact('html'));
    }

    public function show($id)
    {
        $manager = Employee::find($id);
        return view('admin.manageClient.show',['mId'=> $manager]);
    }

    public function edit($id)
    {
        $manager = Employee::find($id);
        return view('admin.manageClient.edit',['mId'=> $manager]);
    }

    public function update(Request $request, $id)
    {
        $manager = Employee::find($id);
        // $manager->update([
        //     'id' =>$request->id,
        //     'name' =>$request->name,
        //     'email' =>$request->email,
        //     'national_id' =>$request->national_id,
        // ]);
        
        return redirect()->route('manageClient.index');
    }

    public function destroy($id)
    {
        return ('hello');
    }

}
