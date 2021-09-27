@extends('include.app')

@section('main')

@if ( ((count($lights) ==0) and (count($events)==0)) )
<center> <h3><br><br><br><br><br><br><br><br>{{ __('main_page.a182') }} <br><br><br><br><br><br></h3> </center>
@endif

<div class="row">
@if (count($events))
    
  <div class="col">
@include('include.events')
   
  </div>
@endif


@if (count($lights))

  <div class="col">
@include('include.lights')
    
  </div>
  @endif

</div>




@endsection
