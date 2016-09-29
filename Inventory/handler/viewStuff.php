<?php 
ob_start();
session_start();

//$region_name = $_POST['region_name']; 
$con=mysqli_connect("localhost","inventory","inventory","inventory");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="SELECT * FROM users WHERE level_user = 'Staff' ";

$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>RUCST INVENTORY.</title>
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link href="../assets/site/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../site/css/lightbox.css">
    <link href="../assets/site/css/jumbotron.css" rel="stylesheet">
    <script src="../assets/site/css/js/ie-emulation-modes-warning.js"></script>
<script src="../assets/site/js/ie-emulation-modes-warning.js"></script>

 
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
 <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
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
  body {

    background-color: #EBEBEE;

}
input{
    padding-right: 0px;
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
        padding:0 10px;
        border-bottom:none;
    }
    form{
        padding-left: 60px;
    }

</style>
  </head>

  <body id="target">
    <div class="container">
    <div class="row">
     <form id="form1" action="deleteStaff.php" method="post">
     <fieldset class="scheduler-border">
    <table class="table table-bordered table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
    <th style="width: 50px;"></th>
    <th style="color: #3b3b3b;">Firstname</th> 
    <th style="color: #3b3b3b;">Lastname</th>
    <th style="color: #3b3b3b;">Phone Number</th> 
    <th style="color: #3b3b3b;">Email</th>
    <th style="color: #3b3b3b;">Faculty</th>
    <th style="color: #3b3b3b;">Department</th>
   
    </tr>
        </thead>
		
<tbody>       
    <?php

    $result = mysqli_query($con,"SELECT * FROM users WHERE level_user = 'Staff' ");
    $count = mysqli_num_rows($result);

?>
    <legend class="scheduler-border">
    <?php
        echo "<h3><center>Available Stuff</center></h3>";
    ?></legend>
    <?php
while($row=mysqli_fetch_array($result)){
    $id_user = $row['id_user'];
	
	?>
	
    <tr>
	
	    <td><center><input type="checkbox" name="check[<?php echo $row['id_user'];?>]" value="1" ></center> </td> 
            <td><?php echo $row['firstname'];?></td>
            <td><?php echo $row['lastname'];?></td>
            <td><?php echo $row['phoneNumber'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['faculty'];?></td>            
            <td><?php echo $row['department'];?></td>
           
    </tr>
    
    <?php	} //end of while loop ?>
       	
    </tbody>
</table> 

    <button class="btn btn-danger" name="delete" type="submit">Delete</button>
    </fieldset>
      </form>

    <script src="js/main.js"></script>
    <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
     <script src="../assets/site/css/js/ie-emulation-modes-warning.js"></script>
<script src="../site/js/ie-emulation-modes-warning.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
