@extends('master')


@section('js')

	<script type="text/javascript">

		$(document).ready(function() {
			
			$(".add_pres").click(function(event) {


				var drug_id = $("*[name='drug_id'").val();
				var dosage = $("*[name='dosage'").val();
				var measure = $("*[name='measure'").val();
				var form = $("*[name='form'").val();
				var frequency = $("*[name='frequency'").val();	
				var form = $("*[name='form'").val();
				var start_date = $("*[name='start_date'").val();
				var end_date = $("*[name='end_date'").val();

					$.post('{{ url("store-pres") }}', {drug_id:drug_id, dosage:dosage, measure:measure, form:form, frequency:frequency, start_date:start_date, end_date:end_date}, 
					function(data){
						$(".pres_content").html(data);
					});
				});
		});


		function removePres (i) {
			$.post('{{ url("remove-pres") }}/'+i);

		}

	</script>

@stop

@section('c')




				<div class="container">
             <div class="row">
                 <div class="col-md-12 main-title">
                 <h1>E-Prescription Wizard</h1>
                <!-- <p>Help us to improve our service and customer satisfaction.</p> -->
                </div>
       		</div>
            </div>

<section class="container" id="main">


@include('alert');


<!-- Start Survey container -->
<div id="survey_container">

	<div id="top-wizard">
		<strong>Progress <span id="location"></span></strong>
		<div id="progressbar"></div>
		<div class="shadow"></div>
	</div><!-- end top-wizard -->
    
	<form name="example-1" id="wrapped" action="{{ url('submit-prescription') }}" method="POST" />
		<div id="middle-wizard">
			<div class="step">
				<div class="row">
					<h3 class="col-md-10">Enter Your Patient's Info</h3>
					<div class="col-md-6">
						<ul class="data-list">
							<li>{{ Form::text('firstname', null, ['class'=>'required form-control', 'placeholder'=>'First Name']) }}</li>
							<li>{{ Form::text('middlename', null, ['class'=>'required form-control', 'placeholder'=>'Middle Name']) }}</li>
							<li>{{ Form::text('lastname', null, ['class'=>'required form-control', 'placeholder'=>'Last Name']) }}</li>
						</ul>
					</div><!-- end col-md-6 -->
                    
					<div class="col-md-6">
						<ul class="data-list floated clearfix">
							<li id="age"><input type="text" name="age" class="required form-control" placeholder="Age" /></li>
							<li><input name="gender" type="radio" class="required" value="Male" /><label class="label_gender"> Male</label></li>
							<li><input name="gender" type="radio" class="required" value="Female" /><label class="label_gender"> Female</label></li>
						</ul>
                        
					</div><!-- end col-md-6 -->
				</div><!-- end row -->
                
				
                
			</div><!-- end step-->
            
			<div class="step row">
				<div class="col-md-10">
					<h3>Prescription Details</h3>
					
				</div>

				<div class="col-md-6">
						<ul class="data-list">
							<li>
								<strong>Drug</strong>
								<div class="styled-select">
									{{ Form::select('drug_id', Drug::orderBy('name','asc')->lists('name', 'id'), null, ['class'=>'form-control required']) }}
								</div>
								<br>
							</li>

							<li>
								<strong>Strength</strong>

								<div class="row">
								<div class="col-md-6">
										{{ Form::text('dosage', null, ['class'=>'required form-control', 'placeholder'=>'Dosage']) }}
									</div>

									<div class="col-md-6">
										
										<div class="styled-select">
										{{ Form::select('measure', ['ml'=>'ml', 'l'=>'l', 'mg'=>'mg', 'g'=>'g'], null, ['class'=>'form-control required']) }}
										</div>

									</div>
									</div>
							</li>

							<li>

								<div class="row">
								<div class="col-md-6">
										<strong>Form</strong>
										<div class="styled-select">
										{{ Form::select('form', ['tablet'=>'tablet', 'syrup'=>'syrup', 'capsule'=>'capsule'], null, ['class'=>'form-control required']) }}
										</div>
								</div>

									<div class="col-md-6">
										<strong>Frequency</strong>
										{{ Form::text('frequency',  null, ['class'=>'form-control required', 'placeholder'=>'e.g. 3 Times a Day']) }}

									</div>
									</div>
								
							</li>

							<li>

								<div class="row">

									<div class="col-md-6">
										<strong>Start Date</strong>
										{{ Form::input('date','start_date',  null, ['class'=>'form-control required', 'placeholder'=>'Start Date']) }}

									</div>

									<div class="col-md-6">
										<strong>End Date</strong>
										{{ Form::input('date','end_date',  null, ['class'=>'form-control required', 'placeholder'=>'Start Date']) }}

									</div>
								</div>
								
							</li>

							<li> <button type="button" class="btn btn-info form-control add_pres">Add</button> </li>

						</ul>
				</div>

				<div class="col-md-6">
					
				<table class="table table-hover table-pres">
					
					<thead>
						
						<tr>
							
							<th>Drug</th>
							<th colspan="2">SIG</th>

						</tr>

					</thead>


					<tbody class="pres_content">
						
						<tr>
							<td></td>
							<td></td>
						</tr>

					</tbody>

				</table>

				</div>

			</div><!-- end step -->
            
			<div class="step row">
				<div class="col-md-10">
					<h3>Prescription Summary</h3>
					
					<div class="col-md-12">
						
						<table class="table table-bordered table-condensed table-summary">
						<thead>
								
								<tr>
									<th colspan="2"> Patient's Information </th>
								</tr>

						</thead>
						<tbody>
								
								<tr>
									
									<th>First Name:</th>
									<td id="firstname"></td>

								</tr>

								<tr>
									
									<th>Middle Name:</th>
									<td id="middlename"></td>

								</tr>

								<tr>
									
									<th>Last Name:</th>
									<td id="lastname"></td>

								</tr>

								<tr>
									
									<th>Age:</th>
									<td id="f_age"></td>

								</tr>

								<tr>
									
									<th>Gender:</th>
									<td id="gender"></td>

								</tr>

						</tbody>

					</table>


					<div class="pres_cont"></div>

					</div>


				</div>
			</div><!-- end step -->
            
			<div class="step row">
				<div class="col-md-10">
					<h3>Select Pharmacy?</h3>
					<ul class="data-list-2 clearfix">

					@foreach(Pharmacy::all() as $pharm)
						<li><input name="pharmacy_id" type="radio" class="required" value="{{ $pharm->id }}" /><label>{{ $pharm->name }}</label></li>
					@endforeach

					</ul>
				</div>
			</div><!-- end step -->
            
			<div class="submit step" id="complete">
                    	<i class="icon-check"></i>
						<h3>Prescription complete!</h3>
						<button type="submit" name="process" class="submit">Submit the prescription</button>
			</div><!-- end submit step -->
            
		</div><!-- end middle-wizard -->
        
		<div id="bottom-wizard">
			<button type="button" name="backward" class="backward">Backward</button>
			<button type="button" name="forward" class="forward">Forward </button>
		</div><!-- end bottom-wizard -->
	</form>
    
</div><!-- end Survey container -->


</section><!-- end section main container -->




@stop