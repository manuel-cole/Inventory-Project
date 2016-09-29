<?php
/**
 * Created by Ruffy.
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
$status = mysqli_real_escape_string($con, $_POST['status']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$itemid = mysqli_real_escape_string($con, $_POST['itemid']);

$id = $row['id'];


$item = "item";


$result=mysqli_query($con, "SELECT * from item");
$count=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result)) {
    
  $id=$row['id'];
  
      $sql = " UPDATE item 
	SET status = '$status'
    WHERE id = '$id' ";

	

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header('location:status.php');
echo "1 record updated";

mysqli_close($con);

	}
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
      <script> 
    $(function(){
      $("#btn").click(function(){
          $("#includedContent").load("000111.php?id = id']"); 
      });
    });
    </script> 
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
	left: 747px;
	top: 192px;
}
#apDiv3 {
	position: absolute;
	width: 69px;
	height: 62px;
	z-index: 3;
	left: 19px;
	top: 46px;
}
</style>
</head>
<body class="blurBg-false" style="background-color:#d1d9e3">



<!-- Start Formoid form-->
<link rel="stylesheet" href="dashboard_files/formoid1/formoid-flat-yellow.css" type="text/css" />
<script type="text/javascript" src="dashboard_files/formoid1/jquery.min.js"></script>
<!-- BEGIN PAGE TITLE & BREADCRUMB-->
<div>
                   <center><h3 class="page-title">
                     Inventory System | Staff Dashboard
                 </h3>
                   <ul class="breadcrumb" style="background-color:#FFFFF">
                       <li>
                           <a href="additem.php">Add Items</a>
                          
                       </li>
					   <li>
                           <a href="viewitems.php">View All Items</a>
                          
                       </li>
					   <li>
							<a href="viewitemsborrowed.php">View All borrowed Items</a>
												   
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
                           <a href="addsupplier.php">Add Supplier</a>
                         
                       </li>
					  <li>
					<a href="addsuppliers.php">Add Suppliers</a>
												   
                </li>
				<li>
					<a href="suppliers.php">Suppliers</a>
												   
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
<form class="formoid-flat-yellow" style="background-color:#ffffff;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:100%;min-width:150px" action="status.php" method="post"><div class="title" style="background-color:#00000"><h2>ITEM STATUS</h2></div>
		<div class="element-select" title="select ITEM"><label class="title">ITEM<span class="required">*</span></label><div class="medium"><span><select name="itemid" required="required">
			<?php

$con=mysqli_connect("localhost","root","","inventory");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="SELECT * FROM item WHERE itemid = '$itemid'";

$records=mysqli_query($con,$sql);

?>
                                  <?php
            $result = mysqli_query($con, "SELECT * FROM item WHERE itemid = '$itemid' ") or die(mysqli_error($con));
            $count = mysqli_num_rows($result);
               
            while($row=mysqli_fetch_array($result)){
                $id = $row['id'];
                ?>
                                    <option id="btn"><?php echo $row['itemid'];?></option><hr/>
                                    <?php } //end of while loop ?>
	</select><i></i></span></div></div>
	<div class="element-select" title="select faculty"><label class="title">STATUS<span class="required">*</span></label><div class="medium"><span><select name="status" required="required">

		<option value="PENDING">PENDING</option>
		<option value="BROKEN">BROKEN </option>
		<option value="FIXED">FIXED</option>
		<option value="AVAILABLE">AVAILABLE</option>
		<option value="OUT FOR REPAIR">OUT FOR REPAIR</option>
		<option value="BROKEN(NOT FIXABLE)">BROKEN(NOT FIXABLE)</option></select><i></i></span></div></div>
	<div class="element-date"><label class="title">Update Date<span class="required">*</span></label><input class="small" data-format="yyyy-mm-dd" type="date" name="updatedate" required placeholder="yyyy-mm-dd"/></div>	
	<div class="submit"><input name="btnSubmit" type="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">php contact form</a> Formoid.com 2.9</p><script type="text/javascript" src="dashboard_files/formoid1/formoid-flat-yellow.js"></script>
         
	<!-- Stop Formoid form-->




</body>
</html>
