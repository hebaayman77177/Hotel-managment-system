@extends('layouts.basicLayout')

@section('content')
<h1>hello</h1>
hiiiiiiiiiiiiii
    {{$dataTable->table()}}
@endsection

@push('scripts')
    {{$dataTable->scripts()}}
@endpush