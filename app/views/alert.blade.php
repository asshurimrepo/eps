{{-- For Error Message --}}
@if(Session::has('err'))
	
	<div class="alert alert-danger"><i class="icon-warning-sign"></i> <b>{{ Session::get('err') }}</b>
	<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button></div>
	
@endif

@if(Session::has('err2'))
	
	<div class="alert alert-danger" style="text-transform: initial; font-weight:bold"><i class="icon-warning-sign"></i><b> {{ Session::get('err2') }}</b></div>
	
@endif

{{-- For Success Message --}}
@if(Session::has('suc'))
	
	<div class="alert alert-success"><i class="icon-ok-sign"></i> <b>{{ Session::get('suc') }}</b>
	<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button></div>

@endif

@if(Session::has('suc2'))
	
	<div class="alert alert-success" style="text-transform: initial; font-weight:bold"><i class="icon-ok-sign"></i> {{ Session::get('suc2') }}</div>

@endif

{{-- For Validation Errors --}}
@if($errors->any())
	<div class="alert alert-danger"><i class="icon-warning-sign"></i> <b> {{ $errors->first() }} </b><button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button></div>
	<!-- 
	{{ implode('', $errors->all('<div class="alert alert-danger"><i class="icon-warning-sign"></i> <b>:message</b> <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button></div>')) }}
 -->
@endif