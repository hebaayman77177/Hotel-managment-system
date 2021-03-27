@extends('admin.manageClient.header')

@section('content')
<div class="login-wrap">
	<div class="login-html">
		<h2 id="tab-2" style="color: #ffc107">Edit InForamation</h2>
		<div class="login-form">
			
			<form class="sign-up-htm" method="POST" action="{{route('manageClient.update',$mId->id)}}">
				@csrf
				@method('PUT')
				<div class="group">
					<label for="user" class="label">Name</label>
					<input id="user" type="text" name="name" class="input" value="{{$mId->name}}">
				</div>
				<div class="group">
					<label for="mid" class="label">ID</label>
					<input id="mid" name="mid" class="input" value="{{$mId->id}}">
				</div>
				<div class="group">
					<label for="national_id" class="label">National Id</label>
					<input id="national_id" name="national_id" class="input" value="{{$mId->national_id}}">
				</div>
				<div class="group">
					<label for="email" class="label">Email Address</label>
					<input id="email" type="email" name="emial" class="input" value="{{$mId->email}}">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Edit">
					{{-- <a href="/admin/manageManager/index">Back</a> --}}
					<input type="submit" class="button" value="Back">
				</div>
				
			</form>
		</div>
	</div>
</div>
@endsection