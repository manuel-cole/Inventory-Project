<?php 
ob_start();
session_start();

//$region_name = $_POST['region_name']; 
$con=mysqli_connect("localhost","inventory","inventory","inventory");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="SELECT * FROM item";

$records=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>RUCST INVENTORY - Formoid php contact form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link href="../assets/site/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../site/css/lightbox.css">
    <script src="../assets/site/css/js/ie-emulation-modes-warning.js"></script>
<script src="../assets/site/js/ie-emulation-modes-warning.js"></script>

 
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
 <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  .roww {
    float: center;
    text-align: right;
    width: 65%;
}

 .container{
  padding-left: 60px;
  padding-bottom: 50px;
  float: left;      
 }

fieldset.scheduler-border {
    border: 3px outset #59c3d8 !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
            
}

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: center !important;
        width:auto;
        padding: 10px 10px 10px 10px;
        border-bottom:none;
        padding-left: 10px;
    }

 /*   form{
        padding-left: 60px;
    }*/
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

<form class="formoid-flat-yellow" style="background-color:#ffffff;padding: 40px; font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:100%;min-width:150px" method="post" action="deleteItem.php">
  <div class="title"><h2><span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ </span><a href="../dashboard2.php">RUCST INVENTORY</a></h2></div>

  
   <fieldset class="scheduler-border">
    <table class="table table-bordered table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
    <th style="width: 50px;"></th>
    <th style="color: #3b3b3b;">Item ID</th> 
    <th style="color: #3b3b3b;">Item Name</th>
    <th style="color: #3b3b3b;">Item Description</th> 
   
    </tr>
        </thead>
    
<tbody>       
    <?php

    $result = mysqli_query($con,"SELECT * FROM item ");
    $count = mysqli_num_rows($result);

?>
    <legend class="scheduler-border">
    <?php
        echo "<h3><center>Available Items</center></h3>";
    ?></legend>
    <?php
while($row=mysqli_fetch_array($result)){
    $id = $row['id'];
  
  ?>
  
    <tr>
  
      <td><center><div class="checkbox"><input type="checkbox" name="<?php echo $row['id']; ?>]" value="1" ></div></center> </td> 
            <td><?php echo $row['itemId'];?></td>
            <td><?php echo $row['itemName'];?></td>
            <td><?php echo $row['description'];?></td>
           
    </tr>
    
    <?php } //end of while loop ?>
        
    </tbody>
</table> 

  <button  class="btn btn-danger" name="delete" type="submit"><center>Delete</center></button>
    </fieldset>

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

