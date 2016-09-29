<?php
/**
 * Created by RUFFY.
 */

$msg="";
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["btnSubmit"])) {

        $con=mysqli_connect("localhost","inventory","inventory","inventory");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$borrow = "borrow";

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$studentid = mysqli_real_escape_string($con, $_POST['studentid']);
$itemid = mysqli_real_escape_string($con, $_POST['itemid']);
$requestdate = mysqli_real_escape_string($con, $_POST['requestdate']);
$returndate = mysqli_real_escape_string($con, $_POST['returndate']);
$faculty = mysqli_real_escape_string($con, $_POST['faculty']);
$department = mysqli_real_escape_string($con, $_POST['department']);
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$venue = mysqli_real_escape_string($con, $_POST['venue']);

$sql="INSERT INTO borrow(name, studentid, itemid, requestdate, returndate, faculty, department, firstname, lastname, venue)
VALUES ('$name', '$studentid', '$itemid', '$requestdate', '$returndate', '$faculty', '$department', '$firstname', '$lastname', '$venue')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header('location:dashboard.php');
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
                     Inventory System | Staff Dashboard
                 </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="additem.php">Add Item</a>
                           <span class="divider">/</span>
                       </li>
					   <li>
                           <a href="addborrower.php">Add Student OR Lecturer</a>
                           <span class="divider">/</span>
                       </li>
					   <li>
                           <a href="viewitems.php">View Items</a>
                           <span class="divider">/</span>
                       </li>
					   <li>
							<a href="viewitemsborrowed.php">View All borrowed Items</a>
							<span class="divider">/</span>						   
                       </li>
						<li>
							<a href="dashboard.php">Borrow Items</a>
							<span class="divider">/</span>						   
                       </li>
					   <li>
					<a href="returnitem.php">Return Item</a>
												   
                </li>
					   <li>
						<form align="right" class="navbar-form navbar-right">
							<a href="index.php" target="_top" type="submit" class="btn btn-success">Sign Out</a>
						</form>
					   </li>
                   </ul></center>
                   <!-- END PAGE TITLE & BREADCRUMB-->
<div id="apDiv2"><img src="images/28027_534773819867421_417352634_n.jpg" width="513" height="199">
  <table width="517" border="2">
    <tr>
      <th width="179" height="72" scope="col"><img src="images/b5251c2dd9b3d019455a0889be155acd.jpg" width="155" height="66"></th>
      <th width="164" scope="col"><img src="images/ext.jpg" width="138" height="68"></th>
      <th width="150" scope="col"><img src="images/teamwork2.gif" width="131" height="61"></th>
    </tr>
  </table>
</div>
<form class="formoid-flat-yellow" style="background-color:#ffffff;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:100%;min-width:150px" action="dashboard.php" method="post">
 <h2><font color="maroon">BORROW ITEM</font></h2></div>
  <div class="element-name"><label class="title">First Name<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="firstname" required/></span></div>
	<div class="element-name"><label class="title">Last Name<span class="required">*</span></label></span><span class="nameLast"><input  type="text" size="14" name="lastname" required/></span></div>
	<div class="element-select" title="select faculty"><label class="title">FACULTY<span class="required">*</span></label><div class="medium"><span><select name="faculty" required="required">

		<option value="SIET">SIET</option>
		<option value="FAS ">FAS </option>
		<option value="SBS">SBS</option>
		<option value="Staff">Staff</option></select><i></i></span></div></div>
	<div class="element-select" title="Select department"><label class="title">DEPARTMENT<span class="required">*</span></label><div class="medium"><span><select name="department" required="required">

		<option value="Info. System Science">Info. System Science</option>
		<option value="Telecommunication">Telecommunication</option>
		<option value="School of Business">School of Business</option>
		<option value="Computer Science">Computer Science</option></select><i></i></span></div></div>
	<div class="element-number"><label class="title">Student/Lecturer ID<span class="required">*</span></label><input class="small" type="text" name="studentid" required value=""/></div>
	<div class="element-number"><label class="title">Item ID<span class="required">*</span></label><input class="small" type="text" name="itemid" required value=""/></div>
	<div class="element-number"><label class="title">Venue<span class="required">*</span></label><input class="small" type="text" name="venue" required value=""/></div>
	<div class="element-date"><label class="title">Date of request<span class="required">*</span></label><input class="small" data-format="yyyy-mm-dd" type="date" name="requestdate" required placeholder="yyyy-mm-dd"/></div>
	<div class="element-date"><label class="title">Date of return</label><input class="small" data-format="yyyy-mm-dd" type="date" name="returndate" placeholder="yyyy-mm-dd"/></div>
	<div class="element-textarea"><label class="title">Item Name / Description<span class="required">*</span></label><textarea class="medium" name="name" cols="20" rows="5" required></textarea></div>
<div class="submit"><input name="btnSubmit" type="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">php contact form</a> Formoid.com 2.9</p><script type="text/javascript" src="dashboard_files/formoid1/formoid-flat-yellow.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
