@extends('receptionist.app');
@section('content')
<div class="row">
      <table class="table border">
          <thead>
            <th>Name</th>
            <th>Email</th>
          </thead>
          <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td> {{$client->name}}</td>
                    <td> {{$client->email}}</td>
                </tr>
            @endforeach
          </tbody>
      </table>
  </div>
@endsection