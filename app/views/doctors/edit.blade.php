@extends('master')

@section('c')

	<div class="panel panel-primary">

		  <div class="panel-heading">
		    <h3 class="panel-title">Edit Doctor Information</h3>
		  </div>
		  <div class="panel-body">
		    
		  	
{{ Form::model($doc,['route'=>['doctors.update', $doc->id], 'method'=>'put']) }}


	<div class="form-group">
    {{ Form::label('username', 'Username') }}
    {{ Form::text('username', null, ['class'=>'form-control', 'required'=>'required']) }}
  </div>

  

  <div class="form-group">
    {{ Form::label('fname', 'First Name') }}
    {{ Form::text('fname', null, ['class'=>'form-control', 'required'=>'required']) }}
  </div>

	<div class="form-group">
	    {{ Form::label('lname', 'Last Name') }}
	    {{ Form::text('lname', null, ['class'=>'form-control', 'required'=>'required']) }}
	  </div>

  <div class="form-group">
    {{ Form::label('prefix', 'Prefix') }}
    {{ Form::text('prefix', null, ['class'=>'form-control', 'required'=>'required']) }}
  </div>


  <button type="submit" class="btn btn-default">Submit</button>
</form>

		  </div>
				  
		</div
			
	</div>	

@stop