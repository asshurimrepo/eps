<!DOCTYPE html>
<!--[if IE 7]><html class = "ie7"><![endif]-->
<!--[if IE 8]><html class = "ie8"><![endif]-->
<!--[if IE 9]><html class = "ie9"><![endif]-->
<!--[if !(IE 7) | !(IE 8) | !(IE 9) ]><!-->
<html>
<!--<![endif]-->
<head>
<title>Silliman AsshDevA</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="{{ url('') }}/bs/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="{{ url('') }}/css/style.css" />
<script type="text/javascript" src="{{ url('') }}/js/jquery-1.11.0.js" ></script>
<script type="text/javascript" src="{{ url('') }}/js/script.js" ></script>
<!--[if IE]><script src="{{ url('') }}/js/html5.js"></script><link rel="stylesheet" type="text/css" href="css/ie.css"><![endif]-->
</head>
<body class="login">
<div class="wrapper login-wrapper">
  <header>
    <h1>E-Prescription System for Silliman Medical Center </h1>
    @include('alert')
  </header>
  <!-- header -->
  <div class="post">
    <div class="post-header">
      <h2>Sign in</h2>
    </div>
    <!-- .post-header -->
    <form class="login-form clearfix" method="post" action="{{ url('check') }}">
      <input required name="username" id="username" type="email" />
      <input required name="password" type="password" />
      <input type="submit" value="Sign in" />
    </form>
    <!-- .login-form -->
    <div class="post-footer">
    </div>
    <!-- .post-footer -->
  </div>
  <!-- .post -->
</div>
<!-- .wrapper -->
</body>
</html>