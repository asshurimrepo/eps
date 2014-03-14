
<form method="post" action="{{ route('medications.store') }}" role="form">



  <div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, ['class'=>'form-control', 'required'=>'required']) }}
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>