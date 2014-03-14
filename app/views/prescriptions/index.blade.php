@extends('master')


@section('c')

	<div class="container">
		
		<div class="panel-group" id="accordion">


@foreach($doctors as $i=>$doc)

  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}">
         {{ $doc->fullname() }}
        </a>
      </h4>
    </div>
    <div id="collapse{{$i}}" class="panel-collapse collapse {{ $i?:'in' }} ">
      <div class="panel-body">
      		

      		<table class="table table-bordred">
      			
      			<thead>
      				
      				<tr>
      					
      					<th>Patient</th>
      					<th>Medication</th>
      					<th>Qty per Unit</th>
      					<th>Frequency</th>
      					<th>Duration</th>
      					<th>Other Instructions</th>

      				</tr>

      			</thead>

      			<tbody>
      				
      	@foreach($doc->prescriptions()->myPharmacy()->get() as $pres)

      			<tr>
      				
      				<td><a href="{{ url('main/print/'.$pres->id) }}">{{ $pres->patient->fullname() }}</a></td>
      				<td>{{ $pres->medication->name }}</td>
      				<td>{{ $pres->qty_per_unit.' '.$pres->unit }}</td>
      				<td>{{ $pres->qty_per_time_format.' per '.$pres->time_format }}</td>
      				<td>{{ $pres->duration_qty.' '.$pres->duration_time_format }}</td>
      				<td>{{ $pres->other_instructions}}</td>
      					
      			</tr>

      	@endforeach

      			</tbody>

      		</table>


      </div>
    </div>
  </div>

@endforeach
  
  
</div>

	</div>

@stop