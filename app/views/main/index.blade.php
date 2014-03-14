@extends('master')



@section('css')

	<style type="text/css">

	.patient tbody tr{

		cursor: pointer;

	} 

	</style>

@stop


@section('js')

	<script type="text/javascript">

		$(document).ready(function() {

			$("fieldset *").each(function(event) {
				
				var name = $(this).attr('name');
				if(name != undefined){

					$(".md_available option").attr('data-'+name, $(this).val());

				}
				

			});

			
			$(".md_available").change(function(){

				var b = $(".md_available option:selected");
				$(".md_available option:selected").remove();

				$(".md_list").append(b);


			});



			$(".md_list").change(function(){

				// var data = $('.md_list option:selected').data();

				$("fieldset *").each(function(event) {
				
					var name = $(this).attr('name');
					if(name != undefined){

						$(this).val( $('.md_list option:selected').attr('data-'+name) );

					}
					

				});

			});



			$(".remove_from_list").click(function(){

				var b = $(".md_list option:selected");
				$(".md_list option:selected").remove();

				$(".md_available").append(b);

			});


			$("fieldset *").change(function(event) {
				
				var name = $(this).attr('name');
				if(name != undefined){

					$(".md_list option:selected").attr('data-'+name, $(this).val());

				}
				

			});

		});
	
	@if(isset($patient))
	
		$(".pres_form").submit(function(){


			$(".md_list option").each(function(){

				var ob = this;
				$(this).remove();
				$(".md_list").append(ob);

			});

			$(".md_list option").each(function(){

				var data = $(this).data();
				data.medication_id = this.value;
				data.patient_id = {{ $patient->id }};
				data.user_id = {{ Auth::user()->id }};
				$.post('{{ url('main/send-data') }}', {data:data});


			});		

			$(".pad").fadeOut(1500);
			$(".success-sent").fadeIn(1600);

			return false;

		});

	@endif

	</script>

@stop

@section('c')

	
	<div class="row">


		<div class="col-md-8">

		@if(isset($patient))

			<script type="text/javascript">

				$(document).ready(function() {
					$(".pad").fadeIn('slow');
				});

			</script>

			@include("patients.show")	

		@endif
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

        		<tr class="{{ isset($patient) && $patient->id == $p->id ? 'info' : '' }}" >
        			
        			<td>{{ link_to('main/index/'.$p->id, $p->fname) }}</td>	
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
		    
		  		@include('patients.create')

		  </div>
				  
		</div
			
	</div>

	<div class="panel panel-primary">

		  <div class="panel-heading">
		    <h3 class="panel-title">Add New Medication</h3>
		  </div>
		  <div class="panel-body">
		    
		  		@include('medications.create')

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