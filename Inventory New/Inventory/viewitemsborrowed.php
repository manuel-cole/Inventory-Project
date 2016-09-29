<?php include('header.php'); ?>
<?php 

$con=mysqli_connect("localhost","root","","inventory");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="SELECT * FROM borrow";

$records=mysqli_query($con,$sql);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Inventory</title>

    <!-- Bootstrap core CSS -->
    <link href="site/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="site/css/lightbox.css">
      
    <!-- Custom styles for this template -->
    <link href="site/css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="site/css/js/ie-emulation-modes-warning.js"></script>
<script src="site/js/ie-emulation-modes-warning.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   
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
    <style>
    .container1{
	padding-left: 90px;
        padding-right: 90px;
	float: left;      
 }

 </style>
  <script>
$( document ).ready(function() {
    $('#myModal').on('hidden.bs.modal', function () {
        $(this).removeData('bs.modal');
    });
 $('#myModal').click(function(){
        $('#myModal').modal({backdrop: 'static'});
    });
});
</script>
  </head>

  <body>
  
  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <center>
                   <ul class="breadcrumb">
				    <li>
							<a href="returnitem.php">Return Item</a>
													   
                       </li>
					   <li>
							<a href="dashboard.php">Borrow Items</a>
													   
                       </li>
                       <li>
                           <a href="additem.php">Add Items</a>
                          
                       </li>
					   <li>
                           <a href="viewitems.php">View All Items</a>
                         
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
                   </ul></center>
                   <!-- END PAGE TITLE & BREADCRUMB-->
      
<div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
 
    <br>
    <br>
    <div class="container">
      <!-- Example row of columns -->
         <div class="row form-margin-space">
          <div class="col-md-10 col-md-offset-1 col-sm-6 col-sm-offset-3">
          <div class="panel panel-default">
          <div class="panel-heading">
              <h4 class="panel-title">View Borrowed Items</h4>
          </div>
          <div class="panel-body">
             <form action="" method="post"> 
              <div class="small-space table-responsive">
        	 <!-- <form action="insertIntoConfirmedCars.php" method="post"> -->
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                          <tr>
                                            <th style="color: #3b3b3b;">First Name</th>
                                            <th style="color: #3b3b3b;">Last Name</th>
                                            <th style="color: #3b3b3b;">Purpose</th>
                                            <th style="color: #3b3b3b;">Item ID</th>
                                            <th style="color: #3b3b3b;">Request Date</th>
                                            <th style="color: #3b3b3b;">Return Date</th>
                                            <th style="color: #3b3b3b;">Venue</th>

                                          </tr>
                                      </thead>
                                      <tbody>       
                                            <?php
                                            $result = mysqli_query($con, "SELECT * FROM borrow") or die(mysqli_error($con));
                                            $count = mysqli_num_rows($result);
                                            echo "<b><center><h3>Items borrowed in the Inventory</h3></center></b><br><br>";

                                        while($row=mysqli_fetch_array($result)){
                                            $id = $row['id'];
                                            ?>
                                            <tr>
    
                                              <td><input type="" name="firstname[]" value="<?php echo $row['firstname'];?>" readonly></td>
                                              <td><input type="" name="lastname[]" value="<?php echo $row['lastname'];?>" readonly></td>
                                              <td><input type="" name="purpose[]" value="<?php echo $row['purpose'];?>" readonly></td>
                                              <td><input type="" name="itemid[]" value="<?php echo $row['itemid'];?>" readonly></td>
                                              <td><input type="" name="requestdate[]" value="<?php echo $row['requestdate'];?>" readonly></td>
                                              <td><input type="" name="returndate[]" value="<?php echo $row['returndate'];?>" readonly></td>
                                             <td><input type="" name="venue[]" value="<?php echo $row['venue'];?>" readonly></td>
                                              

                                            </tr>
                                            
                                            <?php } //end of while loop ?>
                                                
                                            </tbody>
                                      </table>
                                    </div>
        

                                      </form>
                                    </div>
                                    </div>
                                  </div>
                                  </div>
                                  </div>
                                  </div> <!-- /container -->
	

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="site/js/jquery-1.11.0.min.js"></script>
	<script src="site/js/lightbox.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="site/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="site/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>



