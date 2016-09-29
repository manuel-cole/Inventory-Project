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

$item = "item";

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$Address = mysqli_real_escape_string($con, $_POST['Address']);
$phone number = mysqli_real_escape_string($con, $_POST['phone number']);
$Item ID = mysqli_real_escape_string($con, $_POST['Item ID']);
$Date = mysqli_real_escape_string($con, $_POST['Date']);
$Country = mysqli_real_escape_string($con, $_POST['Country']);
$City = mysqli_real_escape_string($con, $_POST['city']);


$sql="INSERT INTO Suppliers(name, Address, Phone number, ItemID, Date, Country, City, Cost)
VALUES ('$name', '$address', '$phone number', '$itemid', '$date', '$country', '$city', '$cost')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);

	}
}
?>
<!DOCTYPE html>
<?php
require 'config.php';

include 'loginform.inc.php';
?>

<head>
	<meta charset="utf-8" />
	<title>RUCST INVENTORY - Formoid php contact form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	left: 816px;
	top: 193px;
}
</style>
</head>
<body class="blurBg-false" style="background-color:#d1d9e3">



<!-- Start Formoid form-->
<link rel="stylesheet" href="dashboard_files/formoid1/formoid-flat-yellow.css" type="text/css" />
<script type="text/javascript" src="dashboard_files/formoid1/jquery.min.js"></script>
<div id="apDiv2">
  <img src="images/28027_534773819867421_417352634_n.jpg" width="513" height="199">
  <table width="517" border="2">
    <tr>
      <th width="179" height="72" scope="col"><img src="images/b5251c2dd9b3d019455a0889be155acd.jpg" width="155" height="66"></th>
      <th width="164" scope="col"><img src="images/ext.jpg" width="138" height="68"></th>
      <th width="150" scope="col"><img src="images/teamwork2.gif" width="131" height="61"></th>
    </tr>
  </table>
</div>
<form class="formoid-flat-yellow" style="background-color:#ffffff;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:100%;min-width:150px" action="borrow.php" method="post"><div class="title"><h2>BORROW ITEM</h2></div>

	<div class="element-name"><label class="title">Name<span class="required">*</span></label><span class="name"><input  type="text" size="8" name="name" required/><label class="subtitle">Name<div>
    <div class="element-Address"><label class="title">Address<span class="required">*</span></label><span class="address"><input  type="text" size="8" name="address" required/><label class="subtitle">Address<div>
	<div class="element-Phone number"><label class="title">Phone number<span class="required">*</span></label><input class="small" type="text" min="0" max="8" name="address" required value=""/></div>
	<div class="element-Item ID"><label class="title">Item ID<span class="required">*</span></label><input class="small" data-format="Item ID" type="text" name="itemid" required value="itemid"/></div>
	<div class="element-country"><label class="title">Country<span class="required">*</span></label><input class="small" data-format="Country" type="text" name="country" required value="country"/></div>
	<div class="element-date"><label class="title"></label><input class="small" data-format="yyyy-mm-dd" type="date" name="Arrivl date" placeholder="yyyy-mm-dd"/></div>
	<div class="element-city"><label class="title">City<span class="required">*</span></label><input class="small" data-format="City" type="text" name="City" required value="city"/></div>
<div class="submit"><input name="btnSubmit" type="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">php contact form</a> Formoid.com 2.9</p><script type="text/javascript" src="dashboard_files/formoid1/formoid-flat-yellow.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
