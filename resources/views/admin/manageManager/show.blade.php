
@extends('admin.manageClient.header')

 @section('content')

<div class="card">
    <div class="front">
      <div class="user-img"></div>
      <h2>MR.{{$mId->name}}</h2>
      <p class="subheading"> <span style="color:#ffc107">Email: </span> {{$mId->email}}</p>
      <p class="subheading"> <span style="color:#ffc107">National Id: </span> {{$mId->national_id}}</p>
      <p class="subheading"> <span style="color:#ffc107">Password: </span> {{$mId->password}}</p>
      <p class="subheading"> <span style="color:#ffc107">Banned: </span> {{$mId->is_banned? 'No':'Yes'}}</p>

     <div class="clickback">
        <a href="/admin/manageClient/index">Go Back</a>
     </div>
   </div>
     
 @endsection