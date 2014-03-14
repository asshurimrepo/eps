@extends('master')

@section('js')
	
	<script type="text/javascript">


		window.print();

	</script>

@stop

@section('c')

	<div class="container" style="bordred:1px solid #ccc;">
		
		<div class="row">
			
			<div class="col-md-6 col-md-offset-3" style="border:1px solid #ccc; min-height:400px; padding:10px; background: url({{ url('rx.png') }}) no-repeat bottom 10px right 20px  !important; ">
				
				<center>
			
			<h3>{{ $pres->user->fname.' '.$pres->user->lname.', '.$pres->user->prefix  }}</h3>
			<h4>SILLIMAN MEDICAL CENTER</h4>

			<hr />


		</center>

			
			<div class="col-md-6">
				
				<b>Name:</b> {{ $pres->patient->fullname() }}  

			</div>

			<div class="col-md-6">
				
				<b>Gender:</b> {{ $pres->patient->gender }}  

			</div>

			<div class="col-md-6">
				
				<b>Date:</b> {{ date('F d, Y', strtotime($pres->created_at)) }}  

			</div>


			<div class="col-md-12">
				
			<center>
				<h3><i>{{ $pres->medication->name }}</i></h3>

				SIG: Take {{ $pres->qty_per_time_format }} {{ $pres->unit }} every {{ $pres->time_format }} for {{ $pres->duration_qty }} {{ $pres->duration_time_format }}

			</center>


			</div>


			</div>


			


		</div>

	</div>

@stop