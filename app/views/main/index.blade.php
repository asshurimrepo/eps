@extends('master')


@section('css')

	<style type="text/css">

	.patient tbody tr{

		cursor: pointer;

	} 

	</style>

@stop

@section('c')

	
	<div class="row">

	
		
		<div class="col-md-8">


		<div class="panel panel-warning">

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
		  				
		  				<td align="right"><b>Patient:</b> </td> <td align="left">Briggs</td>
		  				<td align="right"><b>Age:</b> </td> <td align="left">Briggs</td>

		  			</tr>

		  			<tr>
		  				
		  				<td align="right"><b>Date of Birth:</b> </td> <td align="left">Briggs</td>
		  				<td align="right"><b>Weight:</b> </td> <td align="left">Briggs</td>

		  			</tr>

		  			<tr>
		  				<td align="right"><b>Gender:</b> </td> <td align="left">Briggs</td>
		  				<td align="right"><b>Age:</b> </td> <td align="left">Briggs</td>
		  			</tr>

		  			<tr>
		  				<td align="right"><b>Phone:</b> </td> <td align="left">Briggs</td>
		  			</tr>
		  			</thead>

		  		</table>


		  	</div>

		  	</div>

		  		
		  	</div>

		  </div>
		  <div class="panel-footer"> <small>Click any of the patient's row to get started</small> </div>
		</div
			
			

		</div>	


		<div class="panel panel-primary">

  <div class="panel-heading">
    <h3 class="panel-title">My Patients</h3>
  </div>
		  <div class="panel-body">
		    
		  	<table class="table table-hover table-condensed table-striped patient">
        	
        	<thead>
        		
        		<tr>
        			<th>First Name</th>
        			<th>Last Name</th>
        			<th>Gender</th>
        			<th>Phone</th>
        			<th>Weight</th>
        			<th>Date of Birth</th>
        		</tr>

        	</thead>

        	<tbody>
        	
        	@foreach(Patient::all() as $p)

        		<tr>
        			
        			<td>{{ $p->fname }}</td>	
        			<td>{{ $p->lname }}</td>	
        			<td>{{ $p->gender }}</td>	
        			<td>{{ $p->phone }}</td>	
        			<td>{{ $p->weight }} lbs</td>	
        			<td>{{ $p->dob }}</td>	


        		</tr>

        	@endforeach

        	</tbody>

        </table>

		  </div>
		  <div class="panel-footer"> <small>Click any of the patient's row to get started</small> </div>
		</div
			
			

		</div>	

	</div>
	

	<div class="col-md-4">
		
		<div class="panel panel-primary">

  <div class="panel-heading">
    <h3 class="panel-title">Add New Patient</h3>
  </div>
		  <div class="panel-body">
		    
		  	

		  </div>
		  
		</div
			
			

		</div>

	</div>
        
       
@stop


@section('side')

	<div class="widget add-opening">
        <button>Add New Patient</button>
        <div class="plus">+</div>
      </div>



@stop