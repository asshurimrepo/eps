<!DOCTYPE html>
<html>
<head>
  <title>EPS</title>

 {{ HTML::style('bs/css/bootstrap.css') }} 
 {{ HTML::script('jquery-1.11.0.min.js') }} 
 {{ HTML::script('bs/js/bootstrap.js') }} 

@yield('css')
 

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('main') }}">Electronic Prescription System 
      @if(Auth::user()->type == 'pharm')

        | {{ Pharmacy::where('user_id', Auth::user()->id)->first()->name }}

      @endif
       </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi, <b>{{ Auth::user()->fname }}</b>! <b class="caret"></b></a>
          <ul class="dropdown-menu">
           
            <li><a href="{{ url('out') }}">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="container">
  
<br>
<br>
<br>


@include('alert')

@yield('c')


</div>


@yield('js')

</body>
</html>