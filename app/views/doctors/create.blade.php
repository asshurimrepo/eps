<div class="panel panel-primary">

		  <div class="panel-heading">
		    <h3 class="panel-title">Add New Doctor</h3>
		  </div>
		  <div class="panel-body">
		    
		  	
<form method="post" action="{{ route('doctors.store') }}" role="form">

	{{ Form::hidden('type', 'doc') }}

	<div class="form-group">
    {{ Form::label('username', 'Username') }}
    {{ Form::text('username', null, ['class'=>'form-control', 'required'=>'required']) }}
  </div>

   <div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password',['class'=>'form-control', 'required'=>'required']) }}
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