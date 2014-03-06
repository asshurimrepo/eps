<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs -->
<meta charset="utf-8" />
<title>EPS</title>
<meta name="description" content="" />
<meta name="author" content="Ansonika" />

<!-- Favicons-->
<link rel="shortcut icon" href="{{ url('') }}/img/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" type="image/x-icon" href="{{ url('') }}/img/apple-touch-icon-57x57-precomposed.png" />
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ url('') }}/img/apple-touch-icon-72x72-precomposed.png" />
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ url('') }}/img/apple-touch-icon-114x114-precomposed.png" />
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ url('') }}/img/apple-touch-icon-144x144-precomposed.png" />

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- CSS -->
<link href="{{ url('') }}/css/bootstrap.css" rel="stylesheet" />
<link href="{{ url('') }}/css/style.css" rel="stylesheet" />
<link href="{{ url('') }}/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="{{ url('') }}/css/socialize-bookmarks.css" rel="stylesheet" />
<link href="{{ url('') }}/js/fancybox/source/jquery.fancybox.css?v=2.1.4" rel="stylesheet" />
<link href="{{ url('') }}/check_radio/skins/square/aero.css" rel="stylesheet" />

<!-- Toggle Switch -->
<link rel="stylesheet" href="{{ url('') }}/css/jquery.switch.css" />

<!-- Owl Carousel Assets -->
<link href="{{ url('') }}/css/owl.carousel.css" rel="stylesheet" />
<link href="{{ url('') }}/css/owl.theme.css" rel="stylesheet" />

<!-- Google web font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css' />

<!--[if lt IE 9]>
<script src="{{ url('') }}/http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Jquery -->
<script src="{{ url('') }}/js/jquery-1.10.2.min.js"></script>
<script src="{{ url('') }}/js/jquery-ui-1.8.12.min.js"></script>

<!-- Wizard-->
<script src="{{ url('') }}/js/jquery.wizard.js"></script>

<!-- Radio and checkbox styles -->
<script src="{{ url('') }}/check_radio/jquery.icheck.js"></script>

<!-- HTML5 and CSS3-in older browsers-->
<script src="{{ url('') }}/js/modernizr.custom.17475.js"></script>

<!-- Support media queries for IE8 -->
<script src="{{ url('') }}/js/respond.min.js"></script>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

	<header>
         <div class="container">
            <div class="row">
        	<div class="col-md-4 col-xs-3" id="logo"><a href="{{ url('') }}/index.html">Planio Survey template</a></div>
            
            <div class="btn-responsive-menu"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </div>

            @if(!Auth::guest())

            <nav class="col-md-8 col-xs-9" id="top-nav">
            	<ul>
                    <li> You are log in as <a href="">{{ Auth::user()->username }}</a></li>
                    <li><a href="{{ url('auth/logout') }}" id="purchase">  Logout</a></li>
               </ul>
            </nav>
            <!-- End Nav -->

            @endif
            
         </div><!-- End row -->
         </div><!-- End container -->
        </header> <!-- End header -->
        	


          
        <div style="min-height:500px">


        	@yield('c')


        </div>


<!-- end section main container -->
       
<footer>
	<section class="container">
	<div class="row">
    	<div class="col-md-6">
        	<h3>About us</h3>
            <p>Electronic prescription or e-prescribing (e-Rx) is the computer-based electronic generation, transmission and filling of a medical prescription, taking the place of paper and faxed prescriptions. </p>
        </div>
        
        <div class="col-md-6" id="contact">
        	<h3>Contact info</h3>
            <p>Silliman university Medical Center </p> 
                <ul>
                        <li><i class="icon-home"></i> Address: Aldecoa Drive 6200 Dumaguete City</li>
                        <li><i class="icon-phone"></i> Telephone: (035)422-6002 or (035)225-0814 </li>
                        <li><i class="icon-envelope"></i> Email: <a href="{{ url('') }}/#">sumc@planio.com </a></li>
                        <li><i class="icon-skype"></i> Skype name: sumc</li>
                    </ul>    
        </div>
        
        
        
    </div><!-- end row -->
  	</section>
    
    <section id="footer_2">
    <div class="container">
    <div class="row">
    	<div class="col-md-6">
                <ul id="footer-nav">
                	<li>Copyright© CreativeAssh </li>
                </ul>              
        </div>
            <div class="col-md-6" style="text-align:center">
                <ul class="social-bookmarks clearfix">
                    <li class="facebook"><a href="{{ url('') }}/#">facebook</a></li>
                    <li class="twitter"><a href="{{ url('') }}/#">twitter</a></li>
                </ul>
            </div>
        </div>
		</div>
    </section>

</footer> 
 
 <div id="toTop">Back to Top</div>  



<!-- OTHER JS --> 
<script src="{{ url('') }}/js/jquery.validate.js"></script>
<script src="{{ url('') }}/js/jquery.placeholder.js"></script>
<script src="{{ url('') }}/js/jquery.tweetable.min.js"></script> 
<script src="{{ url('') }}/js/jquery.switch.min.js"></script>
<script src="{{ url('') }}/js/quantity-bt.js"></script>
<script src="{{ url('') }}/js/bootstrap.js"></script>
<script src="{{ url('') }}/js/retina.js"></script>
<script src="{{ url('') }}/js/owl.carousel.min.js"></script>
<script src="{{ url('') }}/js/functions.js"></script>


@yield('js')

<!-- FANCYBOX -->
<script src="{{ url('') }}/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4" type="text/javascript"></script> 
<script src="{{ url('') }}/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5" type="text/javascript"></script> 
<script src="{{ url('') }}/js/fancy_func.js" type="text/javascript"></script> 

</body>
</html>