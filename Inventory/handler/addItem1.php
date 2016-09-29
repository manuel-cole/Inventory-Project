<?php
/**
 * Created by Emmanuel.
 */
$msg="";
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);

    if (isset($_POST["addItem"])) {

        $con=mysqli_connect("localhost","inventory","inventory","inventory");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


// escape variables for security
$itemId = mysqli_real_escape_string($con, $_POST['itemId']);
//$phoneNumber = mysqli_real_escape_string($con, $_POST['phoneNumber']);
$itemName = mysqli_real_escape_string($con, $_POST['itemName']);
$description = mysqli_real_escape_string($con, $_POST['description']);
//$department = mysqli_real_escape_string($con, $_POST['department']);


$sql ="INSERT INTO item(itemId, itemName, description)
VALUES ('$itemId','$itemName', '$description')";


if (!mysqli_query($con,$sql)) {

        die('Error: ' . mysqli_error($con));
      }
?>
<script type="text/javascript">
            alert("Item Added Successfully!!!");
            history.back();
        </script>
<?php
mysqli_close($con);

  }else{
    echo "Error!! Couldn't Add item";
  }
?>
