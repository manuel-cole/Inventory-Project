<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>RUCST INVENTORY - Formoid php contact form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

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

body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px !important;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

</style>

</head>
<body class="blurBg-false" style="background-color:#d1d9e3">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="addLecturer.php">Add Lecturer</a>
  <!-- <a href="addStudent.php">Add Student</a> -->
  <a href="addItem.php">Add Item</a>
  <a href="viewItem.php">View</a>
      <a href="../logout.php">Sign Out</a>
</div>

<!-- Start Formoid form-->
<link rel="stylesheet" href="../dashboard_files/formoid1/formoid-flat-yellow.css" type="text/css" />
<script type="text/javascript" src="../dashboard_files/formoid1/jquery.min.js"></script>

<div id="main">

<div id="apDiv1"><img src="../images/DD.png" width="110" height="90"></div>
<div id="apDiv2"><br><img src="../images/28027_534773819867421_417352634_n.jpg" width="500" height="200">
</div>

<form class="formoid-flat-yellow" style="background-color:#ffffff;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:100%;min-width:150px" method="post" action="addLecturer1.php">

	<div class="title"><h2><span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ </span><a href="../dashboard2.php">RUCST INVENTORY</a></h2></div><br>

 <center><h2><p class="bg-primary">Adding Lecturer Details.</p></h2></center>

	<div class="element-name"><label class="title">Name<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="firstname" required/><label class="subtitle">First Name</label></span><span class="nameLast"><input  type="text" size="14" name="lastname" required/><label class="subtitle">Last Name</label></span></div><br>

	<div class="element-select" title="select faculty"><label class="title">FACULTY<span class="required">*</span></label><div class="medium"><span><select name="faculty" required="required">

    <option value="SIET">SIET</option>
    <option value="FAS ">FAS </option>
    <option value="SBS">SBS</option>
    <option value="Staff">Staff</option></select><i></i></span></div></div>
  <div class="element-select" title="Select department"><label class="title">DEPARTMENT<span class="required">*</span></label><div class="medium"><span><select name="department" required="required">

    <option value="Staff">Staff</option>
    <option value="Info. System Science">Info. System Science</option>
    <option value="Telecommunication">Telecommunication</option>
    <option value="School of Business">School of Business</option>
    <option value="Computer Science">Computer Science</option></select><i></i></span></div></div><br>
	<div class="element-number"><label class="title">I.d Number<span class="required">*</span></label><input class="small" type="text"  name="idNumber" required value=""/></div><br>

	<div class="submit"><input name="addLecturer" type="submit" value="Submit"/></div></form>
	</div>

	<p class="frmd"><a href="http://formoid.com/v29.php">php contact form</a> Formoid.com 2.9</p>
	<script type="text/javascript" src="../dashboard_files/formoid1/formoid-flat-yellow.js"></script>
<!-- Stop Formoid form-->
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>

</body>
</html>
