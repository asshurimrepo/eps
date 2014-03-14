@extends('master')

@section('c')

	<div class="row">
		<h1>Doctors</h1>
		
		<div class="col-md-8">
				

			<table class="table table-bordered">
				
				<thead>
					
					<tr>
						
						<th>Name</th>
						<th>Prefix</th>
						<th>Action</th>

					</tr>

				</thead>


				<tbody>
					
					@foreach (User::doctors()->get() as $row)
						
						<tr>
							
							<td>{{ $row->fullname() }}</td>
							<td>{{ $row->prefix }}</td>
							<td>
								
								<a class="btn btn-info btn-sm" href="{{ route('doctors.edit', $row->id) }}"> Edit </a>
								<a class="btn btn-danger btn-sm" href="{{ url('main/delete-user/'.$row->id) }}"> Remove </a>
								<!-- <a class="btn btn-danger btn-sm"> Remove </a> -->

							</td>

						</tr>


					@endforeach

				</tbody>

			</table>

		</div>

		<div class="col-md-4">
			
			@include('doctors.create')

		</div>


	</div>
	
@stop