<?php include('header.php'); ?>
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

$item = "item";

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$itemid = mysqli_real_escape_string($con, $_POST['itemid']);
$category = mysqli_real_escape_string($con, $_POST['category']);
$brandname = mysqli_real_escape_string($con, $_POST['brand_name']);
$serialno = mysqli_real_escape_string($con, $_POST['serial_no']);
$purchasecost = mysqli_real_escape_string($con, $_POST['purchase_cost']);
$warranty = mysqli_real_escape_string($con, $_POST['warranty']);
$supplier = mysqli_real_escape_string($con, $_POST['supplier']);
$manufacturer = mysqli_real_escape_string($con, $_POST['manufacturer']);
$arrivaldate = mysqli_real_escape_string($con, $_POST['arrival_date']);
$description = mysqli_real_escape_string($con, $_POST['description']);

$sql="INSERT INTO item(name, itemid, category, serial_no, purchase_cost, warranty, supplier, manufacturer, description)
VALUES ('$name', '$itemid', '$category', '$serialno', '$purchasecost', '$warranty', '$supplier', '$manufacturer', '$description')";

$sql1="INSERT INTO dismissed(itemname, itemid, category, serial_no, purchase_cost, warranty, supplier, manufacturer, description)
VALUES ('$name', '$itemid', '$category', '$serialno', '$purchasecost', '$warranty', '$supplier', '$manufacturer', '$description')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
if (!mysqli_query($con,$sql1)) {
  die('Error: ' . mysqli_error($con));
}
    ?>
        <script type="text/javascript">
            alert("item added successfully");
            window.location.href('additem.php');
        </script>
    <?php


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
<body>



<!-- Start Formoid form-->
<link rel="stylesheet" href="dashboard_files/formoid1/formoid-flat-yellow.css" type="text/css" />
<script type="text/javascript" src="dashboard_files/formoid1/jquery.min.js"></script>
<!-- BEGIN PAGE TITLE & BREADCRUMB-->
<div style="background-color: #CCCCCC">
  <center>
    <ul class="breadcrumb">
                       
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
					<a href="suppliers.php">Suppliers</a>
										   
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
<div class="container">
<div class="row">
	<div class="col-md-8 col-md-offset-2">

<form class="formoid-flat-yellow" action="additem.php" method="post">
	<div class="title">
  		<h2><font color="maroon">ADD ITEM</font></h2>
  	</div>

  	<div class="row">

		<div class="col-md-6">
			<div class="form-group element-name">
				<label class="title">Item Name<span class="required">*</span></label>
				<span><input  type="text" size="8" name="name" required/>
				</span>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group element-name">
				<label class="title">Item ID<span class="required">*</span></label>
				<span><input  type="text" size="8" name="itemid" required/>
				</span>
			</div>
		</div>

	</div>

	<div class="row">

		<div class="col-md-6">
			<div class="form-group element-select" title="select manufacturer">
				<label class="title">MANUFACTURER<span class="required">*</span></label>
					<select name="manufacturer" required="required">
						<?php

														$con=mysqli_connect("localhost","root","","inventory");
														// Check connection
														if (mysqli_connect_errno()) {
														  echo "Failed to connect to MySQL: " . mysqli_connect_error();
														}
														$sql="SELECT * FROM item";

														$records=mysqli_query($con,$sql);

														?>
														                                  <?php
														            $result = mysqli_query($con, "SELECT * FROM manufacturer") or die(mysqli_error($con));
														            $count = mysqli_num_rows($result);
														               
														            while($row=mysqli_fetch_array($result)){
														                $id = $row['id'];
														                ?>
												                               <option id="btn" value"<?php echo $row['id'];?>"><?php echo $row['type'];?></option><hr/>
												                                    <?php } //end of while loop ?>
									
					
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group element-name">
				<label class="title">Purchase Cost (GHc)<span class="required">*</span></label>
				<span><input  type="text" size="8" name="purchase_cost" required/>
				</span>
			</div>
		</div>

	</div>
	
	<div class="row">

		<div class="col-md-4">
			<div class="form-group element-select" title="select category">
	 		<label class="title">CATEGORY<span class="required">*</span></label>
	 		<select name="category" required="required">
	 			<?php

								$con=mysqli_connect("localhost","root","","inventory");
								// Check connection
								if (mysqli_connect_errno()) {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}
								$sql="SELECT * FROM item";

								$records=mysqli_query($con,$sql);

								?>
								                                  <?php
								            $result = mysqli_query($con, "SELECT * FROM category ORDER BY type ASC") or die(mysqli_error($con));
								            $count = mysqli_num_rows($result);
								               
								            while($row=mysqli_fetch_array($result)){
								                $id = $row['id'];
								                ?>
						                               <option id="btn" value"<?php echo $row['id'];?>"><?php echo $row['type'];?></option><hr/>
						                                    <?php } //end of while loop ?>
			
			</select>
	</div>
		</div>
		<div class="col-md-4">
			<div class="form-group element-select" title="select warranty">
				<label class="title">WARRANTY<span class="required">*</span></label>
					<select name="warranty" required="required">
						<?php

								$con=mysqli_connect("localhost","root","","inventory");
								// Check connection
								if (mysqli_connect_errno()) {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}
								$sql="SELECT * FROM item";

								$records=mysqli_query($con,$sql);

								?>
								                                  <?php
								            $result = mysqli_query($con, "SELECT * FROM warranty") or die(mysqli_error($con));
								            $count = mysqli_num_rows($result);
								               
								            while($row=mysqli_fetch_array($result)){
								                $id = $row['id'];
								                ?>
						                               <option id="btn" value"<?php echo $row['warid'];?>"><?php echo $row['type'];?></option><hr/>
						                                    <?php } //end of while loop ?>
			
					</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group element-select" title="select supplier">
			 	<label class="title">SUPPLIER<span class="required">*</span></label>
			 		<select name="supplier" required="required">
			 			<?php

											$con=mysqli_connect("localhost","root","","inventory");
											// Check connection
											if (mysqli_connect_errno()) {
											  echo "Failed to connect to MySQL: " . mysqli_connect_error();
											}
											$sql="SELECT * FROM item";

											$records=mysqli_query($con,$sql);

											?>
											                                  <?php
											            $result = mysqli_query($con, "SELECT * FROM supplier") or die(mysqli_error($con));
											            $count = mysqli_num_rows($result);
											               
											            while($row=mysqli_fetch_array($result)){
											                $id = $row['id'];
											                ?>
									                               <option id="btn" value"<?php echo $row['id'];?>"><?php echo $row['name'];?></option><hr/>
									                                    <?php } //end of while loop ?>
						
				</select>
			</div>
		</div>


	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group element-textarea">
				<label class="title">Description<span class="required">*</span></label>
				<textarea name="description" cols="20" rows="5" required></textarea>
			</div>

		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<input type="submit" name="btnSubmit" value="Submit" class="pull-right"/>
			</div>
			<br>
			<br>
		</div>
	</div>
  	
</form>
</div>
</div>
</div>
<p class="frmd"><a href="http://formoid.com/v29.php">php contact form</a> Formoid.com 2.9</p>

<script type="text/javascript" src="dashboard_files/formoid1/formoid-flat-yellow.js"></script>


    
 


	<!-- Stop Formoid form-->



</body>
</html>
