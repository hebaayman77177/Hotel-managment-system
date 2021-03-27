@extends('clients.app')
@section('content')
    <div class="row">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Welcome <span>Back,</span></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {!! $html->table([
    'class' => 'dataTable table-striped table-hover table-bordered',
]) !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {!! $html->scripts() !!}
@endpush


{{-- <!DOCTYPE html>
<html>

<head>
    <title>Laravel 8|7 Datatables Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    {!! $dataTable->table() !!}


</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

{!! $dataTable->scripts() !!}

</html> --}}
