@extends('layouts.master')

@section('content')

<form method="POST" action="{{route('managerecep.update',['id' => $employee->id])}}" class="mt-5 container">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="name" class="form-label">name</label>
      <input type="text" class="form-control" id="title"name="name"  value="{{$employee->name}}"aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">email</label>
      <input type="email" class="form-control" id="email" name="email"  value="{{$employee->email}}">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">password</label>
      <input type="text" class="form-control" id="password" name="password" >
    </div>
   <div class="mb-3">
       <label for="nid" class="form-label">nid</label>
       <input type="number" class="form-control" id="nid" name="national_id" >
  </div>
  <div>
      <select class="form-select" aria-label="Default select example" name="is_banned">
        <option selected> select Ban/Un-Ban</option>
        <option value="1">Ban</option>
        <option value="0">Un-Ban</option>
      </select>
  </div>

    <button type="submit" class="btn btn-success">Update</button>
  </form>

@endsection
