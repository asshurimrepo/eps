@extends('master')


@section('c')




				<div class="container">
             <div class="row">
                 <div class="col-md-12 main-title">
                 <h1>E-Prescription</h1>
                <p>Online Prescription System</p>
                </div>
       		</div>
            </div>

<section class="container" id="main">
	
	<div class="panel-group" id="accordion">


@foreach(User::where('type','doc')->get() as $i=>$doc)

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $i }}">
          {{ $doc->fullname() }}
        </a>
      </h4>
    </div>
    <div id="collapse{{ $i }}" class="panel-collapse collapse">
      <div class="panel-body">
      
      <table class="table table-bordered">
      	
      	<thead>
      		<tr>
      			<th>Patient Name</th>
      			<th>Drug</th>
      			<th>Dosage</th>
      			<th>SIG</th>
      			<th>Date of Prescription</th>
      		</tr>
      	</thead>

      	<tbody>
      		
      		@foreach ($doc->prescriptions as $p)
      			<tr>
      				
      				<td>{{ $p->patient->fullname() }}</td>
      				<td>{{ $p->drug->name }}</td>
      				<td>{{ $p->dosage }} {{ $p->measure }}  </td>
      				<td>Take 1 {{ $p['form'] }} {{ $p['frequency'] }} starting from {{ date('F d, Y', strtotime($p['start_date'])) }} to {{ date('F d, Y', strtotime($p['end_date'])) }}
</td>
      				<td>{{ date('F d, Y', strtotime($p->created_at)) }}</td>

      			</tr>
      		@endforeach

      	</tbody>

      </table>

      </div>
    </div>
  </div>
  
 @endforeach

</div>

	
</section><!-- end section main container -->




@stop