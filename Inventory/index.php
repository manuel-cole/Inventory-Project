<?php
session_start();
require 'Config.php';

if ( isset($_POST['form-username']) && isset($_POST['form-password']) ) {
    
    $sql_check = "SELECT firstname, 
                         lastname,
                         username,
                         level_user, 
                         id_user 
                  FROM users 
                  WHERE 
                       username=? 
                       AND 
                       password=? 
                  LIMIT 1";
    $check_log = $dbconnect->prepare($sql_check);
    $check_log->bind_param('ss', $username, $password);

    $username = $_POST['form-username'];
    $password = md5( $_POST['form-password'] );

    $check_log->execute();

    $check_log->store_result();

    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($firstname, $lastname, $username, $level_user, $id_user);

        while ( $check_log->fetch() ) {
            $_SESSION['user_login'] = $level_user;
            $_SESSION['sess_id']    = $id_user;
            $_SESSION['firstname']       = $firstname;
            $_SESSION['lastname']       = $lastname;
            $_SESSION['username']       = $username;
            
        }

        $check_log->close();

        if ($level_user == 'admin') {
            header('location:dashboard1.php');
            exit();
        }else{
           header('location:dashboard2.php');
            exit(); 
        }
        

    } else {
        header('location:index.php?error='.base64_encode('Username and Password Invalid!!!'));
        exit();
    }

   
} 
?>
<!DOCTYPE HTML>
<html>
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
		        <h1><img src="images/DD.png" width="129" height="107">Regent University College Of Science &amp; Technology</h1>
		  <div class="main-content">
		    <!--top-header-->
				<!--top-nav-->
		 </div>
		  <!--top-header-->
		   <!--inner-content-->
		    <div class="inner-content">
			  <!--web-forms-->
			    <div style="width: 60%; margin: 0px auto;" class="web-forms">
				 <!--first-one-->
				 <div style="width: 80%; margin: 0px auto;" class="col-md-4 first-one">
				  <div style="width: 80%; margin: 0px auto;" class="first-one-inner">
				     <h3 class="tittle">Sign in</h3>
					<form action="index.php" method="post">
						<input type="text" name="form-username" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'username';}" >
						<input type="password" name="form-password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
						<div class="submit"><input name="Submit" type="submit" value="Sign in" ></div>
						<div class="clearfix"></div>
						<div class="new">
							<h3><a href="#">Forgot your password ?</a></h3>
						</div>
					</form>
				   </div>
				 </div>
				   <!--second-one-->
				   <!--//second-one-->
				   <!--/third-one-->
							
				         </div>
			</div>
					  	<div class="clearfix"></div>
				   <!--//third-one-->
			    </div>
				  <!--//web-forms-->
				  <!--skills-->

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
</html>

