
@extends('layouts.master')

@section('content')

<div class="card mt-5 container">
    <div class="card-header">
       Reseptionest Details
    </div>
   
  <div class="card-body">
      <h5 class="card-title">{{$employee['id']}}</h5>
      <p class="card-text">{{$employee['name']}}</p>
      <p class="card-text">{{$employee['email']}}</p>
    </div>
  </div>




@endsection





