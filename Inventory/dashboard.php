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
	left: 748px;
	top: 192px;
}
</style>
</head>
<body class="blurBg-false" style="background-color:#d1d9e3">



<!-- Start Formoid form-->
<link rel="stylesheet" href="dashboard_files/formoid1/formoid-flat-yellow.css" type="text/css" />
<script type="text/javascript" src="dashboard_files/formoid1/jquery.min.js"></script>
<div id="apDiv1"><img src="images/DD.png" width="110" height="66"></div>
<div id="apDiv2"><img src="images/28027_534773819867421_417352634_n.jpg" width="513" height="199">
  <table width="517" border="2">
    <tr>
      <th width="179" height="72" scope="col"><img src="images/b5251c2dd9b3d019455a0889be155acd.jpg" width="155" height="66"></th>
      <th width="164" scope="col"><img src="images/ext.jpg" width="138" height="68"></th>
      <th width="150" scope="col"><img src="images/teamwork2.gif" width="131" height="61"></th>
    </tr>
  </table>
</div>
<form class="formoid-flat-yellow" style="background-color:#ffffff;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:100%;min-width:150px" method="post"><div class="title"><h2>RUCST INVENTORY</h2></div>
	<div class="element-name"><label class="title">Name<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="name[first]" required/><label class="subtitle">First Name</label></span><span class="nameLast"><input  type="text" size="14" name="name[last]" required/><label class="subtitle">Last Name</label></span></div>
	<div class="element-select" title="select faculty"><label class="title">FACULTY<span class="required">*</span></label><div class="medium"><span><select name="select1" required="required">

		<option value="SIET">SIET</option>
		<option value="FAS ">FAS </option>
		<option value="SBS">SBS</option>
		<option value="Staff">Staff</option></select><i></i></span></div></div>
	<div class="element-select" title="Select department"><label class="title">DEPARTMENT<span class="required">*</span></label><div class="medium"><span><select name="select" required="required">

		<option value="Staff">Staff</option>
		<option value="Info. System Science">Info. System Science</option>
		<option value="Telecommunication">Telecommunication</option>
		<option value="School of Business">School of Business</option>
		<option value="Computer Science">Computer Science</option></select><i></i></span></div></div>
	<div class="element-number"><label class="title">I.d Number<span class="required">*</span></label><input class="small" type="text" min="0" max="8" name="number" required value=""/></div>
	<div class="element-date"><label class="title">Date of request<span class="required">*</span></label><input class="small" data-format="yyyy-mm-dd" type="date" name="date" required placeholder="yyyy-mm-dd"/></div>
	<div class="element-date"><label class="title">Date of return</label><input class="small" data-format="yyyy-mm-dd" type="date" name="date1" placeholder="yyyy-mm-dd"/></div>
	<div class="element-textarea"><label class="title">Item Name / Description<span class="required">*</span></label><textarea class="medium" name="textarea" cols="20" rows="5" required></textarea></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">php contact form</a> Formoid.com 2.9</p><script type="text/javascript" src="dashboard_files/formoid1/formoid-flat-yellow.js"></script>
<!-- Stop Formoid form-->



</body>
?>
