<?php include('header.php'); ?>
<?php
/**
 * Created by ruffy.
 */

$msg="";
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$con=mysqli_connect("localhost","livestock","livestock","inventory");
$sql="SELECT * FROM student";

$records=mysqli_query($con,$sql);

if (isset($_POST['btnSearch'])) {
	# code...
	$con=mysqli_connect("localhost","livestock","livestock","inventory");
	$studentid = mysqli_real_escape_string($con, $_POST['studentid']);

	$sqlw = "SELECT * FROM student WHERE student_id = $studentid";
	$res = mysqli_query($con, $sqlw) or die(mysqli_error());
	$row = mysqli_fetch_assoc($res);
	$count = mysqli_num_rows($res);

}

if (isset($_POST['btnSearch2'])) {
	# code...
	$con1=mysqli_connect("localhost","root","","inventory");
	$lecturerid = mysqli_real_escape_string($con1, $_POST['lecturerid']);

	$sqlw2 = "SELECT * FROM lecturer WHERE lecturer_id = $lecturerid";
	$res2 = mysqli_query($con1, $sqlw2) or die(mysqli_error());
	$row2 = mysqli_fetch_assoc($res2);
	$count2 = mysqli_num_rows($res2);

}
	# code...



    if (isset($_POST["btnSubmit"])) {

    $con=mysqli_connect("localhost","root","","inventory");
	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

$borrow = "borrow";

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$itemid = mysqli_real_escape_string($con, $_POST['itemid']);
$requestdate = mysqli_real_escape_string($con, $_POST['requestdate']);
$returndate = mysqli_real_escape_string($con, $_POST['returndate']);
$department = mysqli_real_escape_string($con, $_POST['faculty']);
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$venue = mysqli_real_escape_string($con, $_POST['venue']);
//$itemName = mysqli_real_escape_string($con, $_POST['itemName']);


$con=mysqli_connect("localhost","root","","inventory");
$sql1="INSERT INTO borrow(itemid, purpose,  requestdate, returndate, department, firstname, lastname, venue)
VALUES ('$itemid', '$name', '$requestdate', '$returndate', '$department', '$firstname', '$lastname', '$venue')";
$result_sql1 = mysqli_query($con, $sql1);

$result=mysqli_query($con, "SELECT * from item");
$count=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result)) {
    
  $id=$row['id'];
  
    $sql = "UPDATE item 
	SET status = 'BORROWED',
		purpose = '$name',
		requestdate = '$requestdate',
		returndate = '$returndate',
		firstname = '$firstname',
		lastname = '$lastname',
		venue = '$venue'
	WHERE item = '$itemid' ";

if (!mysqli_query($con,$sql1)) {
  die('Error: ' . mysqli_error($con));
}elseif (!mysqli_query($con,$sql)) {
	  die('Error: ' . mysqli_error($con));
}
//echo $itemid;
    ?>
        <script type="text/javascript">
            alert("item borrowed successfully");
            window.location.href='dashboard.php';
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
    <link rel="stylesheet" href="dashboard_files/formoid1/formoid-flat-yellow.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/ruffstyle.css">


	<script type="text/javascript" src="dashboard_files/formoid1/jquery.min.js"></script>
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
<body>



<!-- Start Formoid form-->

<!-- BEGIN PAGE TITLE & BREADCRUMB-->
<div>
        <center>
                     <ul class="breadcrumb no-margin1" style="background-color:#FFFFF">
                     	<li>
						<a href="dashboard.php">borrow Item</a>
													   
                       </li>
					    <li>
					   <a href="viewitemsborrowed.php">View All borrowed Items</a>
													   
                       </li>
					    <li>
					   <a href="returnitem.php">Return Items</a>
													   
                       </li>
					  
					   <li>
                           <a href="viewitems.php">View All Items</a>
                       </li> 
                        <li>
                           <a href="additem.php">Add Items</a>
                           
                       </li>					   
				<li>
					<a href="addsuppliers.php">Add Suppliers</a>
											   
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
                   </ul>
        </center>
</div>
<div class="container">
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		

		<div class="row">
			<div class="col-md-6">
				<form class="formoid-flat-yellow" action="dashboard.php" method="POST" role="form">
			<div class="title"><h2>SEARCH FOR A STUDENT</h2></div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group element-select">
							<label class="title">Student ID</label>
							<span class="nameFirst">
				  				<input type="text" size="20" name="studentid" id="studentid" class="form-control"/>
				  			</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group element-select">
							<div class="submit"><input name="btnSearch" type="submit" value="Submit"/></div>
						</div>
					</div>	
				</div>
		</form>
			</div>
			<div class="col-md-6">
				<form class="formoid-flat-yellow" action="dashboard.php" method="POST" role="form">
			<div class="title"><h2>SEARCH FOR A LECTURER</h2></div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group element-select">
							<label class="title">Lecturer ID</label>
							<span class="nameFirst">
				  				<input type="text" size="20" name="lecturerid" class="form-control"/>
				  			</span>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group element-select">
							<div class="submit"><input name="btnSearch2" type="submit" value="Submit"/></div>
						</div>
					</div>	
				</div>
		</form>
			</div>
		</div>

		<br>

		<div class="row">
			<div class="col-md-6">
				<form class="formoid-flat-yellow" action="dashboard.php" method="post" role="form">
			<div class="title"><h2>BORROW ITEM <small>STUDENT</small></h2></div>


				<div class="row">
			
					<div class="col-md-4">
				  		<div class="form-group">
				  			<label class="title">First Name<span class="required">*</span></label>
				  			<span class="nameFirst">
				  				<input type="text" size="20" name="firstname" id="firstname" class="form-control" value="<?php echo $row['firstname'];?>">
				  			</span>
				  		</div>

					</div>
					<div class="col-md-4">
						<div class="form-group">
				  			<label class="title">Last Name<span class="required">*</span></label>
				  			<span class="nameLast">
				  				<input type="text" size="14" name="lastname" class="form-control" value="<?php echo $row['lastname'];?>"/>
				  			</span>
				  		</div>
					</div>
					<div class="col-md-4">
				  		<div class="form-group element-select">
							<label class="title">DEPARTMENT<span class="required">*</span></label>
							<input name="faculty" required="required" class="form-control" value="<?php echo $row['department'];?>">
						</div>

					</div>
				</div>
		  		
		  		<div class="row">
		  			<div class="col-md-12">
		  				<div class="form-group element-select">
							<label class="title">ITEM<span class="required">*</span></label>
							<select name="itemid" required="required">
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
								            $result = mysqli_query($con, "SELECT * FROM item WHERE status = 'AVAILABLE' ") or die(mysqli_error($con));
								            $count = mysqli_num_rows($result);
								               
								            while($row=mysqli_fetch_array($result)){
								                $id = $row['id'];
								                ?>
						                               <option id="btn" value"<?php echo $row['itemid'];?>"><?php echo $row['itemid'];?> - <?php echo $row['name'];?></option><hr/>
						                                    <?php } //end of while loop ?>
							</select>
					
						</div>
		  			</div>
		  		</div>
		  		<div class="row">
		  			<div class="col-md-4">
		  				<div class="form-group element-select">
							<label class="title">Venue<span class="required">*</span></label>
							
							<select name="venue" required="required">
								<?php

								$con=mysqli_connect("localhost","root","","inventory");
								// Check connection
								if (mysqli_connect_errno()) {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}
								$sql="SELECT * FROM venue";

								$records=mysqli_query($con,$sql);

								?>
								                                  <?php
								            $result = mysqli_query($con, "SELECT * FROM venue ") or die(mysqli_error($con));
								            $count = mysqli_num_rows($result);
								               
								            while($row=mysqli_fetch_array($result)){
								                $id = $row['id'];
								                ?>
						                               <option id="btn" value"<?php echo $row['id'];?>"><?php echo $row['name'];?></option><hr/>
						                                    <?php } //end of while loop ?>
							</select>
						</div>
		  			</div>
		  			<div class="col-md-4">
		  				<div class="form-group element-date">
		  					<label class="title">Request Date<span class="required">*</span></label>
		  					<input data-format="yyyy-mm-dd" type="date" min="<?php echo date("2016-06-03") ?>" name="requestdate" required placeholder="yyyy-mm-dd"/></div>
		  			</div>
		  			<div class="col-md-4">
		  				<div class="form-group element-date">
		  					<label class="title">Return Date</label>
		  					<input data-format="yyyy-mm-dd" type="date" name="returndate" placeholder="yyyy-mm-dd"/></div>
		  			</div>
		  		</div>

		  		<div class="row">
		  			<div class="col-md-12">
		  				<div class="form-group element-textarea">
		  					<label class="title">Purpose<span class="required">*</span></label>
		  					<textarea class="medium" name="name" cols="20" rows="5" required></textarea>
		  				</div>
		  			</div>
		  		</div>
			<div class="submit"><input name="btnSubmit" type="submit" value="Submit"/></div>
		</form>
			</div>
			<div class="col-md-6">
				<form class="formoid-flat-yellow" action="dashboard.php" method="post" role="form">
			<div class="title"><h2>BORROW ITEM <small>LECTURER</small></h2></div>


				<div class="row">
					<div class="col-md-4">
				  		<div class="form-group">
				  			<label class="title">First Name<span class="required">*</span></label>
				  			<span class="nameFirst">
				  				<input type="text" size="20" name="firstname" id="firstname" class="form-control" value="<?php echo $row2['firstname'];?>"/>
				  			</span>
				  		</div>

					</div>
					<div class="col-md-4">
						<div class="form-group">
				  			<label class="title">Last Name<span class="required">*</span></label>
				  			<span class="nameLast">
				  				<input type="text" size="14" name="lastname" class="form-control" value="<?php echo $row2['lastname'];?>"/>
				  			</span>
				  		</div>
					</div>
					<div class="col-md-4">
				  		<div class="form-group element-select">
							<label class="title">DEPARTMENT<span class="required">*</span></label>
							<input name="faculty" required="required" class="form-control" value="<?php echo $row2['department'];?>">
						</div>

					</div>
				</div>
		  		
		  		<div class="row">
		  			<div class="col-md-12">
		  				<div class="form-group element-select">
							<label class="title">ITEM<span class="required">*</span></label>
							<select name="itemid" required="required">
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
								            $result = mysqli_query($con, "SELECT * FROM item WHERE status = 'AVAILABLE' ") or die(mysqli_error($con));
								            $count = mysqli_num_rows($result);
								               
								            while($row=mysqli_fetch_array($result)){
								                $id = $row['id'];
								                ?>
						                               <option id="btn" value"<?php echo $row['itemid'];?>"><?php echo $row['name'];?> - <?php echo $row['itemid'];?></option><hr/>
						                                    <?php } //end of while loop ?>
							</select>
					
						</div>
		  			</div>
		  		</div>
		  		<div class="row">
		  			<div class="col-md-4">
		  				<div class="form-group element-select">
							<label class="title">Venue<span class="required">*</span></label>
							
							<select name="venueid" required="required">
								<?php

								$con=mysqli_connect("localhost","root","","inventory");
								// Check connection
								if (mysqli_connect_errno()) {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}
								$sql="SELECT * FROM venue";

								$records=mysqli_query($con,$sql);

								?>
								                                  <?php
								            $result = mysqli_query($con, "SELECT * FROM venue ") or die(mysqli_error($con));
								            $count = mysqli_num_rows($result);
								               
								            while($row=mysqli_fetch_array($result)){
								                $id = $row['id'];
								                ?>
						                               <option id="btn" value"<?php echo $row['id'];?>"><?php echo $row['name'];?></option><hr/>
						                                    <?php } //end of while loop ?>
							</select>
						</div>
		  			</div>
		  			<div class="col-md-4">
		  				<div class="form-group element-date">
		  					<label class="title">Request Date<span class="required">*</span></label>
		  					<input data-format="yyyy-mm-dd" type="date" min="<?php echo date("2016-06-03") ?>" name="requestdate" required placeholder="yyyy-mm-dd"/></div>
		  			</div>
		  			<div class="col-md-4">
		  				<div class="form-group element-date">
		  					<label class="title">Return Date</label>
		  					<input data-format="yyyy-mm-dd" type="date" name="returndate" placeholder="yyyy-mm-dd"/></div>
		  			</div>
		  		</div>

		  		<div class="row">
		  			<div class="col-md-12">
		  				<div class="form-group element-textarea">
		  					<label class="title">Purpose<span class="required">*</span></label>
		  					<textarea class="medium" name="name" cols="20" rows="5" required></textarea>
		  				</div>
		  			</div>
		  		</div>

				
				
			
			
			
			<div class="submit"><input name="btnSubmit" type="submit" value="Submit"/></div>
		</form>
			</div>
		</div>
		

		<
	</div>
</div>
</div>

<p class="frmd"><a href="http://formoid.com/v29.php">php contact form</a> Formoid.com 2.9</p>
<script type="text/javascript" src="dashboard_files/formoid1/formoid-flat-yellow.js"></script>
<script type="text/javascript">
	var today = new Date().toISOString().split('T')[0];
	document.getElementsByName("requestdate")[0].setAttribute('min', today);
</script>
<!-- Stop Formoid form-->



</body>
</html>
