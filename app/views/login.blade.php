@extends('master')

@section('c')

		<div class="container">
             <div class="row">
                 <div class="col-md-12 main-title">
                 <h1>electronic prescription system</h1>
                <p>For Doctors In Siliman Medical Center</p>
                </div>
       		</div>
            </div>

<section class="container" id="main">

<!-- Start Survey container -->
<div id="survey_container">

    
	<!-- <form name="example-1" id="wrapped" action="survey_send_1.php" method="POST" /> -->


	{{ Form::open(['url'=>'auth/check']) }}

		<div id="middle-wizard">
				<div class="row">

          @include('alert')


					<h3 class="col-md-12"><center>Enter Your Login Info</center></h3>



					<div class="col-md-6 col-md-offset-3">
						<ul class="data-list">
							<li><input type="text" name="username" class="required form-control" placeholder="Username" /></li>
							<li><input type="password" name="password" class="required form-control" placeholder="Password" /></li>
						</ul>
					</div><!-- end col-md-6 -->

					


                    
				</div><!-- end row -->

				<div class="submit " id="complete">
						<button type="submit" name="process" class="submit">Sign In</button>
					</div><!-- end submit step -->
               
                
            
			
            
	{{ Form::close() }}
	<!-- </form> -->
    
</div><!-- end Survey container -->


</section><!-- end section main container -->

@stop