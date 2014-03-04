<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs -->
<meta charset="utf-8" />
<title>PLANIO Survey Responsive Template</title>
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

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11097556-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

	<header>
         <div class="container">
            <div class="row">
        	<div class="col-md-4 col-xs-3" id="logo"><a href="{{ url('') }}/index.html">Planio Survey template</a></div>
            
            <div class="btn-responsive-menu"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </div>

            <nav class="col-md-8 col-xs-9" id="top-nav">
            	<ul>
                    <li><a href="{{ url('') }}/../index.html">Full version</a></li>
                    <li><a href="{{ url('') }}/#" id="purchase">Purchase this template</a></li>
               </ul>
            </nav><!-- End Nav -->
            
         </div><!-- End row -->
         </div><!-- End container -->
        </header> <!-- End header -->
        	
            <div class="container">
             <div class="row">
                 <div class="col-md-12 main-title">
                 <h1>Satisfaction survey</h1>
                <p>Help us to improve our service and customer satisfaction.</p>
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
					<h3 class="col-md-10">Enter your personal info</h3>
					<div class="col-md-6">
						<ul class="data-list">
							<li><input type="text" name="firstname" class="required form-control" placeholder="First name" /></li>
							<li><input type="text" name="lastname" class="required form-control" placeholder="Last name" /></li>
							<li><input type="email" name="email" class="required form-control" placeholder="Your Email" /></li>
						</ul>
					</div><!-- end col-md-6 -->
                    
					<div class="col-md-6">
                    
						<ul class="data-list">
							<li>
							<div class="styled-select">
								<select class="form-control required" name="country">
									<option value="" selected="" />Select your country
									<option value="Europe" />Europe
									<option value="Asia" />Asia
									<option value="North America" />North America
									<option value="South America" />South America
								</select>
							</div>
							</li>
						</ul>
                        
						<ul class="data-list">
							<li>
							<div class="qty-buttons">
								<input type="button" value="-" class="qtyminus" name="quantity" />
								<input type="text" name="quantity" value="" class="qty form-control required" placeholder="none" />
								<input type="button" value="+" class="qtyplus" name="quantity" /><span>Your incrementer</span>
							</div>
							</li>
						</ul>
                        
						<ul class="data-list floated clearfix">
							<li id="age"><input type="text" name="age" class="required form-control" placeholder="Age" /></li>
							<li><input name="gender" type="radio" class="required" value="Male" /><label class="label_gender"> Male</label></li>
							<li><input name="gender" type="radio" class="required" value="Female" /><label class="label_gender"> Female</label></li>
						</ul>
                        
					</div><!-- end col-md-6 -->
				</div><!-- end row -->
                
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<ul class="data-list" id="terms">
							<li>
                            <strong>Do you accept <a href="{{ url('') }}/#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?</strong>
							<div style="position:relative">
								<select class=" example-1 required" name="terms">
									<option value="" />No
									<option value="Accepted" />Yes
								</select>
							</div>
							</li>
						</ul>
					</div>
				</div>
                
			</div><!-- end step-->
            
			<div class="step row">
				<div class="col-md-10">
					<h3>Please rate your overall satisfaction about the service provided.</h3>
					<ul class="data-list-2">
						<li><input name="rate" type="radio" class="required" value="Not Satisfied" /><label>Not Satisfied</label></li>
						<li><input name="rate" type="radio" class="required" value="Quite Satisfied" /><label>Quite Satisfied</label></li>
						<li><input name="rate" type="radio" class="required" value="Satisfied" /><label>Satisfied</label></li>
						<li><input name="rate" type="radio" class="required" value="Completely Satisfied" /><label>Completely Satisfied</label></li>
					</ul>
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
       
<footer>
	<section class="container">
	<div class="row">
    	<div class="col-md-4">
        	<h3>About us</h3>
            <p>Lorem ipsum dolor sit amet, duo iudico accusamus ne, at vix sumo alia. Usu etiam probatus ne, eu magna ullum iusto his. Nec ea case eirmod dissentiunt. Etiam denique has cu, nam quando accusamus dissentiunt ne. Ea sit malorum scribentur.</p>
        </div>
        
        <div class="col-md-4" id="contact">
        	<h3>Contact info</h3>
            <p>Nec ea case eirmod dissentiunt. Etiam denique has cu, nam quando accusamus dissentiunt ne. </p> 
                <ul>
                        <li><i class="icon-home"></i> 1110 Bates Avenue Los Angeles, CA 90029, US</li>
                        <li><i class="icon-phone"></i> Telephone: 41.22.319.36.10 </li>
                        <li><i class="icon-envelope"></i> Email: <a href="{{ url('') }}/#">info@planio.com </a></li>
                        <li><i class="icon-skype"></i> Skype name: Planio</li>
                    </ul>    
        </div>
        
        <div class="col-md-4">
        	<h3>Latest tweet</h3>
            <div id="tweets"></div>
        </div>
        
    </div><!-- end row -->
  	</section>
    
    <section id="footer_2">
    <div class="container">
    <div class="row">
    	<div class="col-md-6">
                <ul id="footer-nav">
                	<li>Copyright© Ansonika </li>
                    <li><a href="{{ url('') }}/#">Terms of Use</a></li>
                    <li><a href="{{ url('') }}/#">Privacy</a></li>
                </ul>              
        </div>
            <div class="col-md-6" style="text-align:center">
                <ul class="social-bookmarks clearfix">
                    <li class="facebook"><a href="{{ url('') }}/#">facebook</a></li>
                    <li class="googleplus"><a href="{{ url('') }}/#">googleplus</a></li>
                    <li class="twitter"><a href="{{ url('') }}/#">twitter</a></li>
                    <li class="delicious"><a href="{{ url('') }}/#">delicious</a></li>
                    <li class="paypal"><a href="{{ url('') }}/#">paypal</a></li>
                </ul>
            </div>
        </div>
		</div>
    </section>

</footer> 
 
 <div id="toTop">Back to Top</div>  

<!-- Modal About -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">About us</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal About -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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


<!-- FANCYBOX -->
<script src="{{ url('') }}/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4" type="text/javascript"></script> 
<script src="{{ url('') }}/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5" type="text/javascript"></script> 
<script src="{{ url('') }}/js/fancy_func.js" type="text/javascript"></script> 

</body>
</html>