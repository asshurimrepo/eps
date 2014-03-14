<?php $numbers = [1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10]; ?>


<div class="alert alert-success success-sent" style="display:none;">
	
	<strong> Your Prescription is Succesfully Sent! </strong>

</div>


{{ Form::open(['route'=>'prescriptions.store', 'class'=>'pres_form']) }}

<div class="panel panel-warning pad" style="display:none">

  <div class="panel-heading">
    <h3 class="panel-title">Prescription Pad Request</h3>
  </div>
		  <div class="panel-body">
		    
		  	<div class="well">
		  		

		  	<div class="row">
		  		

		  		<div class="col-md-12">
		  		
		  		<table class="table table-condense">
		  			
		  			<thead>
		  				
		  			<tr>
		  				
	  				<td align="right"><b>Patient:</b> </td> <td align="left">{{ $patient->fullname() }}</td>

		  			</tr>

		  			<tr>
		  				
		  				<td align="right"><b>Date of Birth:</b> </td> <td align="left">{{ $patient->dob }}</td>
		  				<td align="right"><b>Weight:</b> </td> <td align="left">{{ $patient->weight }} lbs</td>

		  			</tr>

		  			<tr>
		  				<td align="right"><b>Gender:</b> </td> <td align="left">{{ $patient->gender }}</td>
		  				<td align="right"><b>Phone:</b> </td> <td align="left">{{ $patient->phone }}</td>
		  			</tr>

		  			
		  			</thead>

		  		</table>


		  	</div>

		  	</div>

		  		
		  	</div>


		  	<div class="row">
		  		
		  		<div class="col-md-6">
		  			
			  		<div class="panel panel-primary">

						  <div class="panel-heading">
						    <h3 class="panel-title">Available Medications</h3>
						  </div>
						  <div class="panel-body">

						  	{{ Form::select('medications', Medication::lists('name', 'id'), null, ['class'=>'form-control md_available', 'style'=>'height:400px;', 'size'=>1000]) }}

						  </div>
					</div>

		  		</div>

		  		<div class="col-md-6">
		  			
		  			<div class="panel panel-primary">

						  <div class="panel-heading">
						    <h3 class="panel-title">Medication List</h3>
						  </div>
						  <div class="panel-body">

						  {{ Form::select('medications[]', [], null, [ 'class'=>'form-control md_list', 'size'=>5]) }}
						  <div class="pull-right">
						  						  <a style="margin:5px;" class="btn btn-sm btn-danger remove_from_list">X</a>
						  </div>

						  <br clear="all">
						  <fieldset><legend><small>Dosage</small></legend>

						  	<div class="row">
						  		<div class="col-md-4"> {{ Form::select('qty_per_unit', $numbers, null, ['class'=>'form-control input-sm']) }} </div>
						  		<div class="col-md-3" align="right">Units:</div>
						  		<div class="col-md-5">{{ Form::select('unit', ['Tablet(s)'=>'Tablet(s)', 'Syrup'=>'Syrup', 'Capsule(s)'=>'Capsule(s)'], null, ['class'=>'form-control input-sm']) }}</div>

						  	</div>

						  	<div class="row" style="margin-top:5px;">
						  		<div class="col-md-4"> {{ Form::select('qty_per_time_format', $numbers, null, ['class'=>'form-control input-sm']) }} </div>
						  		<div class="col-md-3" align="right">Times per:</div>
						  		<div class="col-md-5">{{ Form::select('time_format', ['Day'=>'Day', '8 hours'=>'8 hours', '6 hours'=>'6 hours'], null, ['class'=>'form-control input-sm']) }}</div>

						  	</div>

						  	<textarea name="other_instructions" class="form-control" placeholder="Other Instructons..."></textarea>


						  </fieldset>

						  <fieldset><legend><small>Duration</small></legend>

						  	<div class="row">
						  		<div class="col-md-4"> {{ Form::select('duration_qty', $numbers, null, ['class'=>'form-control input-sm']) }} </div>
						  		<div class="col-md-8">{{ Form::select('duration_time_format', ['Day(s)'=>'Day(s)', 'Week(s)'=>'Week(s)', 'Month(s)'=>'Month(s)'], null, ['class'=>'form-control input-sm']) }}</div>

						  	</div>

						  </fieldset>


						  <fieldset><legend><small>Pharmacy</small></legend>

						  	<div class="row">
						  		<div class="col-md-12"> {{ Form::select('pharmacy_id', Pharmacy::lists('name','id'), null, ['class'=>'form-control input-sm']) }} </div>
						  		

						  	</div>

						  </fieldset>

						  </div>
					</div>

		  		</div>

		  	</div>

		  	 <div class="pull-right">
		 	
		 	<button class="btn btn-primary">Submit Request</button>
		 	<a href="{{ url('main') }}" class="btn btn-danger">Cancel</a>

		 </div>

		 <br clear="all">

		  </div>




		</div>
			
			

{{ Form::close() }}