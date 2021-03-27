@extends('receptionist.app')
@section('content')
<div class="row " style="background: white">
     <div class="container">
      <div class="card">
        <div class="card-header" style=" background-color:#393b3d; border-top-left-radius: 0;
              border-top-right-radius:0; padding:25px; ">
          <h3 class="card-title" style="font-size:30px;color:#d3d5d7">Welcome <span 
            style="color:#ffc107;font-weight:bold;font-family:arial"
            >
            Back,
          </span></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body " style="margin-top:30px; background-color:#393b3d;color:#fff">
               {!!  $html->table([
                 'class'=> 'dataTable table-striped table-hover table-bordered'
               ]) !!}
        </div>
      </div>
     </div>
  </div>

  @push('js')
  {!!  $html->scripts() !!}
  @endpush
@endsection
