<?php
/**
 * Created by ruffy.
 */

$msg="";
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["btnSubmit"])) {

        $con=mysqli_connect("localhost","root","","inventory");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$users = "users";

// escape variables for security
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$othernames = mysqli_real_escape_string($con, $_POST['othernames']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$sex = mysqli_real_escape_string($con, $_POST['sex']);
$password = md5( $_POST['password'] );
$member = mysqli_real_escape_string($con, $_POST['level_user']);



$sql="INSERT INTO users(firstname, lastname, othernames, username, sex, password, level_user)
VALUES ('$firstname', '$lastname', '$othernames', '$username', '$sex', '$password', '$member')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header('location:addstaff.php');
echo "1 record added";

mysqli_close($con);

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>RUCST INVENTORY - Formoid php contact form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="css/ruffstyle.css">
   <style type="text/css">

   #apDiv1 {
	position: absolute;
	width: 44px;
	height: 56px;
	z-index: 1;
	left: 255px;
	top: -4px;
}
   </style>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 120px;
	height: 75px;
	z-index: 1;
	left: 711px;
	top: 3px;
}
#apDiv2 {
	position: absolute;
	width: 497px;
	height: 270px;
	z-index: 2;
	left: 748px;
	top: 192px;
}
</style>
</head>
<body class="blurBg-false" style="background-color:#d1d9e3">

<!-- Start Formoid form-->
<link rel="stylesheet" href="dashboard_files/formoid1/formoid-flat-yellow.css" type="text/css" />
<script type="text/javascript" src="dashboard_files/formoid1/jquery.min.js"></script>
<!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <center>
                   <ul class="breadcrumb">
				    <center><h3 class="page-title">
                     Inventory System | Staff Dashboard
                 </h3> 
    <ul class="breadcrumb" style="background-color:#CCCCCC>
				   
				   <li>
							<a href="addstaff.php">Add User</a>
							<span class="divider"></span>						   
                       </li>
					   
					   <li>
                           <a href="bulkregistration.php">Bulk Registration</a>
                           <span class="divider"></span>
                       </li>
                       <li>
                           <a href="viewitems.php">View All Items</a>
                           <span class="divider">/</span>
                       </li>
					   <li>
							<a href="viewitemsborrowed.php">View All borrowed Items</a>
							<span class="divider">/</span>						   
                       </li>
					   <li>
							<a href="dismisseditems.php">Dismissed Items</a>
							<span class="divider"></span>						   
                       </li>
						<li>
							<a href="report.php">Reports</a>
							<span class="divider"></span>						   
                       </li>
					   
					   <li>
						<form align="right" class="navbar-form navbar-right">
							<a href="../index.php" target="_top" type="submit" class="btn btn-success">Sign Out</a>
						</form>
					   </li>
                   </ul></center>
                   <!-- END PAGE TITLE & BREADCRUMB-->
<div class="row">
<div class="col-md-8 col-md-offset-2">

<form class="formoid-flat-yellow" action="addUser.php" method="post">
	<div class="title" style="background-color: #D6D6D6; color: #036;">
  		<h2>ADD USER TO INVENTORY SYSTEM</h2>
	</div>


	<div class="row">
		<div class="col-md-4">
	  		<div class="form-group element-name">
	  			<label class="title">Username<span class="required">*</span></label>
	  			<input type="text" name="username" required />
	  		</div>
	
	  	</div>
	  	
	  	<div class="col-md-4">
	  		<div class="form-group element-name">
	  			<label class="title">Password<span class="required">*</span></label>
	  			<input type="password" name="password" required />
	  		</div>
	
	  	</div>
	  	<div class="col-md-4">
	  		<div class="element-select">
	  			<label class="title">Access Level<span class="required">*</span></label>
	  				<select name="level-user" required="required">
	  					<option value="">Select</option>
						<option value="admin">Admin</option>
						<option value="member">Member</option>
					</select>
			</div>
	  	</div>

  	</div>
  			
	<div class="row">
		<div class="col-md-6">
	  		<div class="form-group element-name">
	  			<label class="title">First Name<span class="required">*</span></label>
	  			<input  type="text" size="8" name="firstname" required/>
	  		</div>
	  	</div>
	  	<div class="col-md-6">
	  		<div class="form-group element-name">
	  			<label class="title">Last Name<span class="required">*</span></label>
	  			<input  type="text" size="14" name="lastname" required/>
	  		</div>
	  	</div>

  	</div>
  	<div class="row">
		<div class="col-md-6">
	  		<div class="element-name">
	  			<label class="title">Othernames<span class="required">*</span></label><input class="small" type="text" name="othernames"/></div>
	
	  	</div>
	  	<div class="col-md-6">
	  		<div class="element-select" title="select faculty">
	  			<label class="title">Gender<span class="required">*</span></label>
	  				<select name="sex" required="required">

						<option value="male">Male</option>
						<option value="female ">Female</option>
					</select>
			</div>
	  	</div>

  	</div>
  	
	
	<div class="submit"><input name="btnSubmit" type="submit" value="Submit"/></div>
</form>
</div>
</div>

<p class="frmd"><a href="http://formoid.com/v29.php">php contact form</a> Formoid.com 2.9</p>

<script type="text/javascript" src="dashboard_files/formoid1/formoid-flat-yellow.js"></script>
<!-- Stop Formoid form-->

</body>
</html>
