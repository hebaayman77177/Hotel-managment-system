@extends('layouts.app')
@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
@section('content')
    <form method="POST" action="{{ route('payments.create') }}">
        @csrf
        <div class="mb-3">
            <label for="accompany_number" class="form-label">Accompany number</label>
            <input type="text" class="form-control" id="accompany_number" name="accompany_number">
        </div>
        <div class="mb-3">
            <label for="paid_price" class="form-label">Paid Price</label>
            <input type="text" class="form-control" name="amount"/>
        </div>
        <input type="hidden" class="form-control" id="room_number" name="room_number">
        <button type="submit" class="btn btn-success">Reserve</button>
    </form>

@endsection
