@extends('layouts.master')

@section('content')

<form method="POST" action="{{route('managerecep.store')}}" class="mt-5 container">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">name</label>
      <input type="text" class="form-control" id="title"name="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">email</label>
      <input type="email" class="form-control" id="email" name="email" >
      </div>
      <div class="mb-3">
      <label for="password" class="form-label">password</label>
      <input type="text" class="form-control" id="password" name="password" >
      </div>
      <div class="mb-3">
      <label for="nid" class="form-label">nid</label>
      <input type="number" class="form-control" id="nid" name="national_id" >
      </div>
    <!-- <div class="form-check">
      <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
      <label class="form-check-label" for="blankCheckbox">Ban</label>
    </div> -->

    <button type="submit" class="btn btn-success">Create</button>
  </form>

@endsection
