<?php 

$con=mysqli_connect("localhost","root","","inventory");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="SELECT * FROM item";

$records=mysqli_query($con,$sql);

if(isset($_POST['delete'])){

$con=mysqli_connect("localhost","root","","inventory");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$item = "item";


$result=mysqli_query($con, "SELECT * from dismissed");
$count=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result)) {
    
  $id=$row['id'];

  if (array_key_exists($id, $_POST["check"])) {
    $ischecked=$_POST["check"][$id];
    /* See if this has a value of 1.  If it does, it means it has been checked */
    if ($ischecked==1) {
    $sql = "DELETE FROM item 
          WHERE id = $id";


      if (!mysqli_query($con,$sql)) {

        die('Error: ' . mysqli_error($con));
      }
?>
<script type="text/javascript">
            alert("Item Deleted Successfully!!!");
            history.back();
        </script>
<?php   }
  }
}
}

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
      
<div>

<!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <center>
                   <h3 class="page-title">
                     Inventory System | User Dashboard
                 </h3>
                   <ul class="breadcrumb">
                      			  
					  <li>
                           <a href="additem.php">Add Items</a>
                          
                       </li>
					   <li>
                           <a href="viewitems.php">View All Items</a>
                           
                       </li>
						<li>
                           <a href="borrowitem.php">Borrow Item</a>
                          
                       </li>
					    <li>
							<a href="viewitemsborrowed.php">View All borrowed Items</a>
												   
                       </li>
					   <li>
                           <a href="returnitems.php">Return Item</a>
                          
                       </li>
					   
					  <li>
					<a href="addsuppliers.php">Add Suppliers</a>
												   
                </li>
				<li>
					<a href="suppliers.php">Suppliers</a>
												   
                </li>
				<li>
					<a href="report.php">Report</a>
												   
                </li>
					   <li>
						<form align="right" class="navbar-form navbar-right">
							<a href="../index.php" target="_top" type="submit" class="btn btn-success">Sign Out</a>
						</form>
					   </li>
                   </ul></center>
                   <!-- END PAGE TITLE & BREADCRUMB-->

    <!-- Main jumbotron for a primary marketing message or call to action -->
 
    <br>
    <br>
    <div class="container1">
      <!-- Example row of columns -->
 <div class="row">
     <form action="" method="post"> 
	 <!-- <form action="insertIntoConfirmedCars.php" method="post"> -->
    <center><table class="table table-striped table-hover table-bordered datatable">
    <thead style="background: #FFD700; color: White;">
    
		<tr>
			<th style="width: 50px;"></th>
			<th style="color: #3b3b3b;">Item Name</th>
			<th style="color: #3b3b3b;">Item ID</th>
            <th style="color: #3b3b3b;">Category</th>
             <th style="color: #3b3b3b;">Purchase_cost</th>
			 <th style="color: #3b3b3b;">warranty</th> 
             <th style="color: #3b3b3b;">supplier</th>
             <th style="color: #3b3b3b;">manufacturer</th>  
            <th style="color: #3b3b3b;">Arrival Date</th>
			






		</tr>
    </thead>
<tbody>       
    <?php
    $result = mysqli_query($con, "SELECT * FROM dismissed") or die(mysqli_error($con));
    $count = mysqli_num_rows($result);
echo "<b><center><h3>Items deleted from the Inventory</h3></center></b><br><br>";

while($row=mysqli_fetch_array($result)){
    $id = $row['id'];
    ?>
    <tr>
			<td><center><input type="checkbox" name="check[<?php echo $row['id']; ?>]" value="1" ></div></center></td>
            <td><input type="" name="name[]" value="<?php echo $row['name'];?>" readonly></label></td>
			<td><input type="" name="itemid[]" value="<?php echo $row['itemid'];?>" readonly></label></td>
            <td><input type="" name="Category[]" value="<?php echo $row['category'];?>" readonly></label></td>
			<td><input type="" name="Purchase_cost[]" value="<?php echo $row['purchase_cost'];?>" readonly></label></td>
            <td><input type="" name="warranty[]" value="<?php echo $row['warranty'];?>" readonly></label></td> 
          <td><input type="" name="supplier[]" value="<?php echo $row['supplier'];?>" readonly></label></td>
          <td><input type="" name="manufacturer[]" value="<?php echo $row['manufacturer'];?>" readonly></label></td>  
            <td><input type="" name="arrival_date[]" value="<?php echo $row['arrival_date'];?>" readonly></label></td>
			

    </tr>
    
    <?php	} //end of while loop ?>
       	
    </tbody>
</table>

<!--Bootstrap Modal-->
<div class="modal fade" id="myModal">
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <strong>Loading...</strong>
        </div>
    </div>
</div>
        

      </form>
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



