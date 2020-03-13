<meta charset="utf-8">
<?php
$firstname = $_POST['firstname'];
$detel = $_POST['detel'];
$datetime = $_POST['date'];
include('include/condb.php');
$check = "INSERT INTO anappointment
(
  id_users,
  day,
  detel
)
VALUES
(
'$firstname',
'$datetime',
'$detel'
)";
$result = mysqli_query($condb, $check) or die(mysqli_error($condb));
 

if ($result) {
  echo "<script type='text/javascript'>";
  echo "alert('เพิ่มช้อมูลสำเร็จ');";
  echo "window.location='ilstUser3.php';";
  echo "</script>";
} else {
  echo "<script type='text/javascript'>";
  // echo "alert('Error!');";
  echo "window.location='ilstUser33.php';";
  echo "</script>";
}
mysqli_close($condb);
?>