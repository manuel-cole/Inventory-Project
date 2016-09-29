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

$suppliers = "suppliers";

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
$country = mysqli_real_escape_string($con, $_POST['country']);
$city = mysqli_real_escape_string($con, $_POST['City']);
$email = mysqli_real_escape_string($con, $_POST['email']);


$sql="INSERT INTO suppliers(name, Address, Phone_number, Country, City, email)
VALUES ('$name', '$address', '$phone_number', '$country', '$city','$email' )";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>ADD SUPPLIER</title>
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
<div style="background-color: #CCCCCC">
  <center><h3 class="page-title">
                     Inventory System | User Dashboard
                 </h3> 
    <ul class="breadcrumb" style="background-color:#CCCCCC>
                      <li>
					<a href="suppliers.php">Suppliers</a>
												   
                </li>
					  <li>
                           <a href="additem.php"> Add Item 
                  
               </li>
			  
			   <li>
                   <a href="viewitems.php">View All Items</a>
                  
               </li>
			  
				<li>
					<a href="dashboard.php">Borrow Items</a>
										   
               </li>
			    <li>
					<a href="viewitemsborrowed.php">View All borrowed Items</a>
										   
               </li>
			   <li>
					<a href="returnitem.php">Return Item</a>
					   
                </li>
				
				<li>
					<a href="itemcategory.php">Item Category</a>
												   
                </li>
						
				<li>
					<a href="itemlocations.php">Item Locations</a>
												   
                </li>
				<li>
					<a href="dismisseditems.php">Dismissed Items</a>
												   
                </li>
				<li>
					<a href="report.php">Report</a>
											   
                </li>
			   	<li>
						<form align="right" class="navbar-form navbar-right">
							<a href="index.php" target="_top" type="submit" class="btn btn-success">Sign Out</a>
						</form>
				</li>
    </ul></center>
				   </div>
                   <!-- END PAGE TITLE & BREADCRUMB-->

<form class="formoid-flat-yellow" style="background-color:#ffffff;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:100%;min-width:150px" action="addsupplier.php" method="post"><div class="title" style="color:#FF0000">
  <h2><font color="maroon">ADD SUPPLIER</font></h2></div>
	<div class="element-name"><label class="title">Name<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="name" required/><label class="subtitle">Name</label></span></div>
	<div class="element-name"><label class="title">Address<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="address" required/><label class="subtitle">Address</label></span></div>
<div class="element-name"><label class="title">Phone Number<span class="required">*</span></label><span class="nameFirst"><input  type="text" data-mask="99-9999-9999" size="8" name="phone_number" required/><label class="subtitle">Phone_Snumber</label></span></div>
<div class="element-name"><label class="title">Country<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="country" required/><label class="subtitle">Country</label></span></div>
	<div class="element-name"><label class="title">City<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="City" required/><label class="subtitle">City</label></span></div>
	<div class="element-name"><label class="title">Email<span class="required">*</span></label><span class="nameFirst"><input  type="text" data-mask="@.com" size="8" name="email" required/><label class="subtitle">Email</label></span></div>
	
<div class="submit"><input type="submit" name="btnSubmit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">php contact form</a> Formoid.com 2.9</p><script type="text/javascript" src="dashboard_files/formoid1/formoid-flat-yellow.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
