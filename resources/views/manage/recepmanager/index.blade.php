
@extends('layouts.master')

@section('content')

<div >
   <a href="{{route('managerecep.create')}}" class="btn btn-success  mt-5">Add user</a>
</div>
<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">Created by</th>
      <th scope="col">status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

@if(count($employees)>0)

  @foreach($employees as $employee)
    <tr>
      <th scope="row">{{$employee->id}}</th>
      <td>{{$employee->name}}</td>
      <td>{{$employee->email}}</td>
      <td>{{$employee->created_at}}</td>
      <td>
      @if ($employee->is_banned== 0)
       <label class="btn btn-primary">not ban</label>
      @elseif ($employee->is_banned == 1)
      <label class=" btn btn-danger"> ban</label>
         @endif
      </td>
      <td>
            <a href="/managerecep/{{ $employee['id'] }}" class="btn btn-info">View</a>
            <!-- <a href="managerecep/{{ $employee['id'] }}" class="btn btn-primary">show</a> -->
            <a href="{{ route('managerecep.edit', [ 'id' => $employee['id'] ]) }}" class="btn btn-primary">Edit</a>
            <form method="post"  style="display:inline;" action="/managerecep/{{$employee['id']}}" >
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('Are you sure to delete this user?')" title="delete" class="btn btn-danger">
                    Delete
                  </button>
                </form>
      </td>
    </tr>
    @endforeach

    @else

    <h1 class="text-center">No data to be shown</h1>
@endif


  </tbody>
</table>  




<!-- <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">created by</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$employee->id}}</th>
      <td>{{$employee->name}}</td>
      <td>{{$employee->email}}</td>
      <td class="col">
            <a href="" class="btn btn-info">View</a>
            <a href="" class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
            <a href="" class="btn btn-danger">Ban</a>
      </td>
    </tr>
     -->





@endsection
