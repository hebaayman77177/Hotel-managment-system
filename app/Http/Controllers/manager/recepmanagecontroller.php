<?php

namespace App\Http\Controllers\manager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
// use Illuminate\Support\Facades\DB;

class recepmanagecontroller extends Controller
{
    
       public function index(){
           return view('manage.recepmanager.index',[
            'employees' => Employee::all(),
           ]);
       }

      public function show($employee){ 
        $employee = Employee::find($employee);
        return view('manage.recepmanager.show', [
            'employee' => $employee
        ]);
       }

       public function create(){
        return view('manage.recepmanager.create', [
            'employees' => Employee ::all()
           ]);
       }
       public function store(Request $myRequestObject){
        $data = $myRequestObject->all();
        Employee::create($data);
        return redirect()->route('managerecep');
       }
 
       public function destroy($employee){
        $employee = Employee::find($employee);

        $employee->forceDelete();
        return view('manage.recepmanager.index',[
         'employees' => Employee::all(),
        ]);
       }

       public  function edit($employee){
        $employee = Employee::find($employee);
        $employees = employee::all();
        return view('manage.recepmanager.edit' ,['employee' => $employee, 'employees' => $employees]);
      } 

    public  function update(Request $request,$employee){
    $s=Employee::findOrFail($employee);
    $s->update([
        'name' => $request['name'],
        'email' =>$request['email'],
        'password' =>$request['password'],
        'is_banned' =>$request['is_banned']
    ]);
    return view('manage.recepmanager.index',[
        'employees' => Employee::all(),
       ]);
    }
}