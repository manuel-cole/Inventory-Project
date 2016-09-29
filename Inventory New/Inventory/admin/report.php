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


$result=mysqli_query($con, "SELECT * from item");
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
                           <a href="report.php">Reports</a>
                           <span class="divider"></span>
                       </li>
					     <li>
							<a href="addstaff.php">Add User</a>
							<span class="divider">/</span>						   
                       </li>
					    <li>
                           <a href="additem.php"> Add Item 
                   <span class="divider">/</span>
               </li>
			   <li>
                           <a href="viewitems.php">View All Items</a>
                           <span class="divider">/</span>
                       </li>
                      
					   <li>
                           <a href="bulkregistration.php">Bulk Registration</a>
                           <span class="divider"></span>
                       </li>
					   
					   <li>
							<a href="viewitemsborrowed.php">View All borrowed Items</a>
							<span class="divider">/</span>						   
                       </li>
					 
					  <li>
                           <a href="dismisseditems.php">Dismissed Items</a>
                           <span class="divider"></span>
                       </li>
					   <li>
						<form align="right" class="navbar-form navbar-right">
							<a href="../index.php" target="_top" type="submit" class="btn btn-success">Sign Out</a>
						</form>
					   </li>
                   </ul></center>
                   <!-- END PAGE TITLE & BREADCRUMB-->
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

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="site/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="site/css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="site/css/styles.css" />  
    
    <script src="site/js/ie-emulation-modes-warning.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>

  <body>
      


    <div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="">
            <h3 class=""><center>Report</center></h3>
	</div>
        
		        <div class="panel panel-default class col-md-8 col-md-offset-2">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><center>View Reports</center></a>
					                <div class="panel-body">
                    <a href="view_daily.php" target="main"><center>View Today's Report</center></a>
                </div>
                <div class="panel-body">
                    <a href="#demo" data-toggle="collapse" data-target="#demo"><center>View Monthly Report<center></a>
                            <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="view_monthly.php?month=01 & month_name=January" value="" class="btn btn-info" target="main"><center>January</center></a>
                     </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block"> 
                        <a href="view_monthly.php?month=02 & month_name=February" type="submit" class="btn btn-info" target="main"><center>February</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="view_monthly.php?month=03 & month_name=March" type="submit" class="btn btn-info" target="main"><center>March</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="view_monthly.php?month=04 & month_name=April" type="submit" class="btn btn-info" target="main"><center>April</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="view_monthly.php?month=05 & month_name=May" type="submit" class="btn btn-info" target="main"><center>May</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="view_monthly.php?month=06 & month_name=June" type="submit" class="btn btn-info" target="main"><center>June</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="view_monthly.php?month=07 & month_name=July" type="submit" class="btn btn-info" target="main"><center>July</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="view_monthly.php?month=08 & month_name=August" type="submit" class="btn btn-info" target="main"><center>August</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="view_monthly.php?month=09 & month_name=September" type="submit" class="btn btn-info" target="main"><center>September</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="view_monthly.php?month=10 & month_name=October" type="submit" class="btn btn-info" target="main"><center>October</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="view_monthly.php?month=11 & month_name=November" type="submit" class="btn btn-info" target="main"><center>November</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="view_monthly.php?month=12 & month_name=December" type="submit" class="btn btn-info" target="main"><center>December</center></a>
                    </form>
                </h4>
            <div id="collapse3" class="panel-collapse collapse">

                        </div>
                </div>
                <div class="panel-body">
                <a href="#demo1" data-toggle="collapse" data-target="#demo1"><center>View Yearly Reportly</center></a>

                <form name="reportYear" class="form-inline" role="form" method="POST" action="view_yearly.php" target="main">
                    <div class="form-group">
                        <select name="reportYear" style="width: 240px" class="form-control" required>
                            <option value="">Select year</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                        </select>
                    </div>
                    <button name="reportYearBtn" style="float: right;" type="submit" class="btn btn-info">Generate</button>
                </form>
                </div>
            </div>
        </div>
     
    </div> 
      </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
