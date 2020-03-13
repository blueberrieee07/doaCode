<meta charset="utf-8">
<?php
$firstname = $_POST['firstname'];
$treatment = $_POST['treatment'];
$treatmentdatails = $_POST['treatmentdetails'];
$datetime = $_POST['date'];
$amount = $_POST['amount'];


include('include/condb.php');


$check = "INSERT INTO tm_history
(
  id_users,
  treatment,
  treatmentdetails,
  amount,
  datetime

)
VALUES
(

'$firstname',
'$treatment',
'$treatmentdatails',
'$amount',
'$datetime'

)";
$result = mysqli_query($condb, $check) or die(mysqli_error($condb));
 

if ($result) {
  echo "<script type='text/javascript'>";
  echo "alert('เพิ่มช้อมูลสำเร็จ');";
  echo "window.location='ilstUser2.php';";
  echo "</script>";
} else {
  echo "<script type='text/javascript'>";
  // echo "alert('Error!');";
  echo "window.location='ilstUser22.php';";
  echo "</script>";
}
mysqli_close($condb);
?>