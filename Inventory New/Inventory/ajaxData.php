<?php
//Include database configuration file

$con=mysqli_connect("localhost","inventory","inventory","inventory");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST["studentid"]) && !empty($_POST["studentid"])){
    //Get all state data

    $query= mysql_query("SELECT * FROM student WHERE student_id = '".$_POST["studentid"]."'");

    //Count total number of rows

    $rowCount = mysql_num_rows($query);
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">--SELECT--</option>';
        while($row = mysql_fetch_assoc($query)){ 
            echo '<option value="'.$row['firstname'].'">'.$row['firstname'].'</option>';
        }
    }else{
        echo '<option value=""></option>';
    }
}
?>