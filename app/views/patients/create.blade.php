
<form method="post" action="{{ route('patients.store') }}" role="form">



  <div class="form-group">
    {{ Form::label('fname', 'First Name') }}
    {{ Form::text('fname', null, ['class'=>'form-control', 'required'=>'required']) }}
  </div>

<div class="form-group">
    {{ Form::label('lname', 'Last Name') }}
    {{ Form::text('lname', null, ['class'=>'form-control', 'required'=>'required']) }}
  </div>

  <div class="form-group">
    {{ Form::label('gender', 'Gender') }}
    {{ Form::select('gender', ['Male'=>'Male', 'Female'=>'Female'], null, ['class'=>'form-control', 'required'=>'required']) }}
  </div>


  <div class="form-group">
    {{ Form::label('phone', 'Phone number') }}
    {{ Form::text('phone', null, ['class'=>'form-control', 'required'=>'required']) }}
  </div>

  <div class="form-group">
    {{ Form::label('weight', ' Weight') }}
    {{ Form::text('weight', null, ['class'=>'form-control', 'required'=>'required']) }}
  </div>

  <div class="form-group">
    {{ Form::label('dob', ' Birth Date') }}
    {{ Form::input('date','dob', null, ['class'=>'form-control', 'required'=>'required']) }}
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>