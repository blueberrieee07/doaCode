<meta charset="utf-8">
<?php
// echo '<pre>';
// print_r($_GET);
// echo '</pre>';
// exit;
include('include/condb.php');

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = $id";
$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());

mysqli_close($condb);
if ($result) {
    echo "<script type='text/javascript'>";
    // echo "alert('เพิ่มช้อมูลสำเร็จ');";
    echo "window.location='listUser.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    //echo "alert('Error!');";
    echo "window.location='listUser.php';";
    echo "</script>";
}
