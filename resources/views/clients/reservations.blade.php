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
              {!!  $html->table([
                'class'=> 'dataTable table-striped table-hover table-bordered'
              ]) !!}
       </div>
     </div>
    </div>
 </div>
@endsection

@push('js')
    {!! $html->scripts() !!}
@endpush
