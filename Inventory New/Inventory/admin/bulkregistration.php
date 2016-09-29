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

$borrowers = "borrowers";

// escape variables for security
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$title = mysqli_real_escape_string($con, $_POST['title']);
$idnumber = mysqli_real_escape_string($con, $_POST['idnumber']);
$level = mysqli_real_escape_string($con, $_POST['level']);
$department = mysqli_real_escape_string($con, $_POST['department']);


$sql="INSERT INTO borrowers(firstname, lastname, title, id_number, level, department)
VALUES ('$firstname', '$lastname', '$title', '$idnumber', '$level', '$department')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header('location:addborrower.php');
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
                   <center><h3 class="page-title">
                     Inventory System | admin Dashboard
                 </h3>
                   <ul class="breadcrumb">
                  
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
                   <!-- END PAGE TITLE & BREADCRUMB-->

<form class="formoid-flat-yellow" style="background-color:#ffffff;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:100%;min-width:150px" action="addborrower.php" method="post"><div class="title" style="background-color: #CCCCCC">
  <h2>ADD STUDENT/LECTURER</h2>
  <p>&nbsp;</p>
</div>
  <div class="element-name"><label class="title">First Name<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="14" name="firstname" required/></span></div>
	<div class="element-name"><label class="title">Last Name<span class="required">*</span></label><span class="nameLast"><input  type="text" size="14" name="lastname" required/></span></div>
	<div class="element-select" title="select faculty"><label class="title">Title<span class="required">*</span></label><div class="medium"><span><select name="title" required="required">

		<option value="Lecturer">Lecturer</option>
		<option value="Student">Student</option></select><i></i></span></div></div>
	<div class="element-select" title="select faculty"><label class="title">LEVEL<span class="required">*</span></label><div class="medium"><span><select name="level" required="required">

		<option value="100">100</option>
		<option value="200 ">200 </option>
		<option value="300">300</option>
		<option value="400">400</option></select><i></i></span></div></div>
	<div class="element-select" title="Select department"><label class="title">DEPARTMENT<span class="required">*</span></label><div class="medium"><span><select name="department" required="required">

		<option value="Info. System Science">Info. System Science</option>
		<option value="Telecommunication">Telecommunication</option>
		<option value="School of Business">School of Business</option>
		<option value="Computer Science">Computer Science</option></select><i></i></span></div></div>
	<div class="element-number"><label class="title">I.d Number<span class="required">*</span></label><input class="small" type="text" name="idnumber" required value=""/></div>
<div class="submit"><input name="btnSubmit" type="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">php contact form</a> Formoid.com 2.9</p><script type="text/javascript" src="dashboard_files/formoid1/formoid-flat-yellow.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
