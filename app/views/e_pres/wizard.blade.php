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

<!-- Start Survey container -->
<div id="survey_container">

	<div id="top-wizard">
		<strong>Progress <span id="location"></span></strong>
		<div id="progressbar"></div>
		<div class="shadow"></div>
	</div><!-- end top-wizard -->
    
	<form name="example-1" id="wrapped" action="survey_send_1.php" method="POST" />
		<div id="middle-wizard">
			<div class="step">
				<div class="row">
					<h3 class="col-md-10">Enter your patient's info</h3>
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
					
				<table class="table table-hover">
					
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
					<h3>How did you hear about our company?</h3>
					<ul class="data-list-2">
						<li><input name="question_1[]" type="checkbox" class="required" value="Google" /><label>Google</label></li>
						<li><input name="question_1[]" type="checkbox" class="required" value="A friend of mine" /><label>A friend of mine</label></li>
						<li><input name="question_1[]" type="checkbox" class="required" value="Print advertise" /><label>Print advertise</label></li>
						<li><input name="question_1[]" type="checkbox" class="required" value="Newspaper" /><label>Newspaper</label></li>
					</ul>
				</div>
			</div><!-- end step -->
            
			<div class="step row">
				<div class="col-md-10">
					<h3>Do you think to suggest our company to a friend or parent?</h3>
					<ul class="data-list-2 clearfix">
						<li><input name="question_2" type="radio" class="required" value="No" /><label>No</label></li>
						<li><input name="question_2" type="radio" class="required" value="Maybe" /><label>Maybe</label></li>
					  <li><input name="question_2" type="radio" class="required" value="Probably" /><label>Probably </label></li>
						<li><input name="question_2" type="radio" class="required" value="100% Sure" /><label>100% Sure</label></li>
						<li><strong>In no, please describe with few words why</strong><textarea name="message_suggest_no" class="form-control"></textarea></li>
					</ul>
				</div>
			</div><!-- end step -->
            
			<div class="submit step" id="complete">
                    	<i class="icon-check"></i>
						<h3>Survey complete! Thank you for you time.</h3>
						<button type="submit" name="process" class="submit">Submit the survey</button>
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