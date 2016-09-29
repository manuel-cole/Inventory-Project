<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
if (isset($_POST['username'])&&isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if (!empty($username)&&!empty($password)) {
		echo 'ok.';
	
	} else {
		echo 'you must supply a username and password.';
	}
}



   










<head>
<title>home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="User Interface Ui Kit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
		</script>
<!--Calender-->
		<link rel="stylesheet" href="css/clndr.css" type="text/css" />
		<script src="js/underscore-min.js"></script>
		<script src= "js/moment-2.2.1.js"></script>
		<script src="js/clndr.js"></script>
		<script src="js/site.js"></script>
  <!--End Calender-->
	</head>
	<body>
		<!--container-->
		<div class="container">
		  <!--main-content-->
		        <h1><img src="images/DD.png" width="140" height="86">Regent University College Of Science &amp; Technology</h1>
		  <div class="main-content">
		    <!--top-header-->
				<div class="top-header">
				 <!--top-nav-->
					<div class="col-md-8 top-nav">
					  <span class="menu"> <img src="images/icon.png" alt=""></span>
						<ul class="res">
							<li><a href="#home"><i class="glyphicon glyphicon-user"> </i> Account</a></li>
							<li><a class="active" href="#"><i class="glyphicon glyphicon-cog"> </i> Settings</a></li>
						</ul>
			<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.res" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
						<!-- /script-for-menu -->
				   </div>
				    <div class="col-md-4 serch1">
				    <form>
						<input type="text" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
						<input type="submit" value="">
					</form>
			     </div>
				 <div class="clearfix"> </div>
				<!--top-nav-->
		 </div>
		  <!--top-header-->
		   <!--inner-content-->
		    <div class="inner-content">
			  <!--web-forms-->
			    <div class="web-forms">
				 <!--first-one-->
				 <div class="col-md-4 first-one">
				  <div class="first-one-inner">
				     <h3 class="tittle">Sign in</h3>
					<form>
						<input type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'username';}" >
						<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
						<div class="submit"><input name="Submit" type="submit" onclick="myFunction()" value="Sign in" ></div>
						<div class="clearfix"></div>
						<div class="new">
							<h3><a href="#">Forgot your password ?</a></h3>
						</div>
					</form>
				   </div>
				 </div>
				   <!--second-one-->
				 <div class="col-md-4 second-one">
				  <div class="first-one-inner">
			        <h3 class="tittle"><img src="images/miss-malaika-2015-pageant-girls-pictures-7.jpg" width="220" height="283">				  </h3>
				  </div>
				          <div class="social">
				            <div class="clearfix"></div>
				   </div>
			      </div>
				   <!--//second-one-->
				   <!--/third-one-->
				   <div class="col-md-4 first-one">
					    <div class="first-one-inner lost">
						    <div class="here">
								<div class="here-bottom">
									<img src="images/Regent-Banner6.jpg" alt="" width="279" height="268">
										<h4>RUCST</h4>
										<h6>Inventory System</h6>
							  </div>
							</div>
				     </div>
						 <div class="deals">
							<div class="sap_tabs">	
									<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
<div class="resp-tabs-container">
					<h2 class="resp-accordion" role="tab" aria-controls="tab_item-0">
											<span class="resp-arrow"></span>TAB DATAPOPULARConnexionConnexion</h2>
												<h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>RECENTS'inscrireS'inscrire</h2><h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Mot de passeMot de passe</h2><h2 class="resp-accordion" role="tab" aria-controls="tab_item-3"><span class="resp-arrow"></span></h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
													<p>Ut wisi enim ad minim veniam,nostrud exerci tation ullamcorpersuscipit lobortis nisl ut aliquip ex eacommodo consequat. Claritas est etiamprocessus dynamicus, qui sequitur.</p>
												</div>
												<h2 class="resp-accordion" role="tab" aria-controls="">
												<span class="resp-arrow"></span>TAB DATA</h2>
												<h2 class="resp-accordion" role="tab" aria-controls="tab_item-5"><span class="resp-arrow"></span></h2><h2 class="resp-accordion" role="tab" aria-controls="tab_item-6"><span class="resp-arrow"></span></h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
													<p>he printing and typesetting industry.Lorem Ut wisi enim ad minim veniam,nostrud exerci tation ullamcorpersuscipit lobortis nisl ut aliquip ex eacommodo consequat. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
												</div>										
										</div>
									</div>
									<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
									<script type="text/javascript">
										$(document).ready(function () {
											$('#horizontalTab').easyResponsiveTabs({
												type: 'default', //Types: default, vertical, accordion           
												width: 'auto', //auto or any width like 600px
												fit: true   // 100% fit in a container
											});
										});
									   </script>	
							</div>				
				         </div>
			      </div>
					  	<div class="clearfix"></div>
				   <!--//third-one-->
			    </div>
				  <!--//web-forms-->
				  <!--skills-->
				   <div class="main-skills">
				     <!--skill-one--><!--//skill-one-->
						   <!--menu-->
						    <div class="col-md-4 skill-one">
							    <div class="mid-menu"></div>
							</div>
						     <!--//menu-->
							   <!--twitter-->
					     <div class="clearfix"></div>
						   
				   </div>
				  <!--skills-->
				    <!--/accordions-->
					  <div class="mid-tabs-top">
				           <!--skill-one-->
						 <div class="col-md-6 mid-tabs">
						 <div id="tabs" class="tabs">
								<nav>
									<ul>
										<li><a href="#section-1"><i class="glyphicon glyphicon-picture"></i></a></li>
										<li><a href="#section-2"><i class="glyphicon glyphicon-facetime-video"></i> <span> Video Tutorial</span></a></li>
										<li><a href="#section-3"><i class="glyphicon glyphicon-file"></i> <span> Post</span></a></li>
									</ul>
								</nav>
									<div class="content">
										<section id="section-1">
											<div class="tab-inner">
												<div class="tab-grids">
													<div class="tab-img">
														<img class="img-responsive" src="images/DD.png" alt="">
															<h4>&nbsp;</h4>	 
												  </div>
													<div class="tab-img">
														<img class="img-responsive" src="images/Regent-Banner6.jpg" alt="">
																<h4>&nbsp;</h4>	 
													</div>
										            <div class="tab-img"><img class="img-responsive" src="images/DD.png" alt="">
										              <h4>&nbsp;</h4>	 
																	 
											      </div>
														<div class="clearfix"></div>
												</div>
												<div class="clearfix"></div>
											</div>
										</section>
										<section id="section-2">
											<div class="tab-inner">
												<iframe src="https://player.vimeo.com/video/25025844"></iframe>
											</div>
										</section>
										<section id="section-3">
											<div class="tab-inner">
											   <img class="img-responsive" src="images/post.jpg" alt="">
										  </div>
										</section>
									</div><!-- /content -->
						   </div><!-- /tabs -->
						<link rel="stylesheet" type="text/css" href="css/component.css" />
					</div>
						<script src="js/cbpFWTabs.js"></script>
						<script>
							new CBPFWTabs( document.getElementById( 'tabs' ) );
							</script>
						  
				</div>
						  <div class="col-md-6 accordions">
						    <section class="ac-container">
									<div>
										<input id="ac-1" name="accordion-1" type="checkbox" />
										<label for="ac-1">LOGIN</label>
										<article class="ac-small">
											<p>Login with authenticated username and password</p>
										</article>
									</div>
									<div>
										<input id="ac-2" name="accordion-1" type="checkbox" />
										<label for="ac-2">Dashboard</label>
										<article class="ac-medium">
											<p>Navigate dashboard to perform various options on the task bar</p>
										</article>
									</div>
									<div>
										<input id="ac-3" name="accordion-1" type="checkbox" />
										<label for="ac-3">Inventory</label>
										<article class="ac-large">
											<p> Navigate inventory table and complete the required process .</p>
										</article>
									</div>
									<div>
										<input id="ac-4" name="accordion-1" type="checkbox" />
									</div>
							</section>


		      </div>
						  <div class="clearfix"></div>
		    </div>
						<div class="clearfix"> </div>
					  <!--//accordions-->
					    <!--/pricing-tables-->
						<div class="pricing-grids">
						  <div class="clearfix"> </div>
			</div>
						  <!--//pricing-tables-->
						  <!--/cal-grids-->
	      <!--/call-inner--></div>
						  <!--/cal-grids-->
    </div>
				<!--main-content-->
				<!--start-copyright-->
				<div class="copy-right">
						<p>Copyright &copy; 2016 Inventory Management. All rights  Reserved | Designed by <a href="http://w3layouts.com">RuFFie</a></p>
				</div>
	<!--//end-copyright-->

		</div>
	 <!--//container-->
	</body>
?>

