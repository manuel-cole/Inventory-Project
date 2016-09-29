<?php
ob_start();
session_start();

$con=mysqli_connect("localhost","inventory","inventory","inventory");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//$disapproved_reservation = "disapproved_reservation";
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
<?php		}
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

    <title>RUCST INVENTORY - Formoid php contact form</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/lightbox.css">
    <link href="jumbotron.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
<nav class="navbar navbar-inverse navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#">Inventory</a>
        
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form action="logout.php" class="navbar-form navbar-right">
			
           <button type="submit" class="btn btn-success">Sign Out</button>
          </form>
        </div><!--/.nav-collapse -->
      </div> 
    </nav>
    <br><br><br>
    <br>
    <div class="container">
      <!-- Example row of columns -->
 <div class="row">
        <div class="">     
            <center><h2> Deleted Successfully..</h2></center>
       <br>  
       <h4><center>Click <a href="../dashboard2.php">Here</a> to go back.</center></h4>
        </div>
        </div>
        
    </div> <!-- /container -->
  </body>
</html>