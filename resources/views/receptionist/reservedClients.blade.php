@extends('receptionist.app')
@section('content')
<div class="row">
     <div class="container">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Responsive Hover Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive">
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
