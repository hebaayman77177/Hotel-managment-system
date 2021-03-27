
@extends('layouts.master')

@section('content')


<!-- <a href="{{route('managerecep.create')}}" class="btn btn-success  mt-5">Add floor</a> -->

<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">number</th>
    </tr>
  </thead>
  <tbody>
  @foreach($floors as $floor)
    <tr>
      <th scope="row">{{$floor->id}}</th>
      <td>{{$floor->name}}</td>
      <td>{{$floor->number}}</td>
      <td class="col">
            <a href="/managefloor/{{ $floor['id'] }}" class="btn btn-info">View</a>
            <a href="" class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>  


@endsection
