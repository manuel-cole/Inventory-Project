<?php
/**
 * Created by Jonathan.
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

$item = "item";

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$itemid = mysqli_real_escape_string($con, $_POST['itemid']);
$type = mysqli_real_escape_string($con, $_POST['type']);
$brandname = mysqli_real_escape_string($con, $_POST['brand_name']);
$serialno = mysqli_real_escape_string($con, $_POST['serial_no']);
$staffid = mysqli_real_escape_string($con, $_POST['staffid']);
$arrivaldate = mysqli_real_escape_string($con, $_POST['arrival_date']);
$description = mysqli_real_escape_string($con, $_POST['description']);

$sql="INSERT INTO item(name, itemid, type, brand_name, serial_no, staffid, arrival_date, description, item)
VALUES ('$name', '$itemid', '$type', '$brandname', '$serialno', '$staffid', '$arrivaldate', '$description', '$itemid - $name')";

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
	<title>ADD ITEM</title>
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
                     Inventory System | Staff Dashboard
                 </h3> 
    <ul class="breadcrumb" style="background-color:#CCCCCC>
                       <li>
                           <a href="additem.php"> Add Item 
                   <span class="divider">/</span>
               </li>
			   
			   <li>
                   <a href="viewitems.php">View All Items</a>
                   <span class="divider">/</span>
               </li>
			   <li>
                           <a href="bulkregistration.php">Bulk Registration</a>
                           <span class="divider"></span>
                       </li>
			   <li>
					<a href="viewitemsborrowed.php">View All borrowed Items</a>
					<span class="divider">/</span>						   
               </li>
			   	<li>
					<a href="addstaff.php">Add User</a>
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
				   </div>
                   <!-- END PAGE TITLE & BREADCRUMB-->

<form class="formoid-flat-yellow" style="background-color:#ffffff;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:100%;min-width:150px" action="additem.php" method="post"><div class="title" style="color:#FF0000">
  <h2><font color="maroon">ADD ITEM</font></h2></div>
	<div class="element-name"><label class="title">Name<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="name" required/><label class="subtitle">Item Name</label></span></div>
	<div class="element-name"><label class="title">Item ID<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="itemid" required/><label class="subtitle">Item ID</label></span></div>
    <div class="element-name"><label class="title">Type<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="type" required/><label class="subtitle">Type</label></span></div>
    <div class="element-name"><label class="title">Brand Name<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="brand_name" required/><label class="subtitle">Brand Name</label></span></div>
    <div class="element-name"><label class="title">Serial No<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="serial_no" required/><label class="subtitle">Serial No</label></span></div>
    <div class="element-name"><label class="title">Staff ID<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="staffid" required/><label class="subtitle">Staff ID</label></span></div>
    <div class="element-date"><label class="title">Arrival Date<span class="required">*</span></label><input class="small" data-format="yyyy-mm-dd" type="date" name="arrival_date" required placeholder="yyyy-mm-dd"/></div>
	<div class="element-textarea"><label class="title">Description<span class="required">*</span></label><textarea class="medium" name="description" cols="20" rows="5" required></textarea></div>
<div class="submit"><input type="submit" name="btnSubmit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">php contact form</a> Formoid.com 2.9</p><script type="text/javascript" src="dashboard_files/formoid1/formoid-flat-yellow.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
