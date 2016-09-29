<?php
/**
 * Created by Emmanuel.
 */
$msg="";
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);

    if (isset($_POST["addStuff"])) {

        $con=mysqli_connect("localhost","inventory","inventory","inventory");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$clerks = "troops";

// escape variables for security
$email = mysqli_real_escape_string($con, $_POST['email']);
$phoneNumber = mysqli_real_escape_string($con, $_POST['phoneNumber']);
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$department = mysqli_real_escape_string($con, $_POST['department']);
$faculty = mysqli_real_escape_string($con, $_POST['faculty']);
$password = mysqli_real_escape_string($con, $_POST['password']);
// $dob = mysqli_real_escape_string($con, $_POST['dob']);
// $age = mysqli_real_escape_string($con, $_POST['age']);
// $gender = mysqli_real_escape_string($con, $_POST['gender']);
// $address = mysqli_real_escape_string($con, $_POST['address']);
// $charges = mysqli_real_escape_string($con, $_POST['charges']);
// $sentence = mysqli_real_escape_string($con, $_POST['sentence']);
// $start_date = mysqli_real_escape_string($con, $_POST['start_date']);
// $pic = mysqli_real_escape_string($con, $_POST['pic']);

$password = md5('password');

$sql ="INSERT INTO users(email, phoneNumber, firstname, lastname, department, faculty, level_user, password)
VALUES ('$email', '$phoneNumber','$firstname', '$lastname', '$department', '$faculty', '$faculty', '$password')";


if (!mysqli_query($con,$sql)) {

        die('Error: ' . mysqli_error($con));
      }
?>
<script type="text/javascript">
            alert("Staff Added Successfully!!!");
            history.back();
        </script>
<?php
mysqli_close($con);

  }else{
  	echo "Error!! Couldn't Add Staff";
  }
?>