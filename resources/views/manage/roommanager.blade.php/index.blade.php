@extends('layouts.master')

@section('content')

<div >
   <a href="{{route('managerecep.create')}}" class="btn btn-success  mt-5">Add user</a>
</div>
<table class="table ">
  <thead>
    <tr>
      <th scope="col">number</th>
      <th scope="col">capacity</th>
      <th scope="col">price</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

@if(count($rooms)>0)

  @foreach($rooms as $room)
    <tr>
      <td>{{$room->number}}</td>
      <td>{{$room->capacity}}</td>
      <td>{{$room->price}}</td>
      <td>
            <a href="/manageroom/{{ $room['number'] }}" class="btn btn-info">View</a>
            <!-- <a href="managerecep/{{ $employee['id'] }}" class="btn btn-primary">show</a> -->
            <a href="{{ route('manageroom.edit', [ 'number' => $room['number'] ]) }}" class="btn btn-primary">Edit</a>
            <form method="post"  style="display:inline;" action="/manageroom/{{$room['number']}}" >
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







@endsection
