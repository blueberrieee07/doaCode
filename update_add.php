<meta charset="utf-8">
<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$email = $_POST['email'];
$age = $_POST['age'];
$idcard = $_idcard['idcard'];
$address = $_address['address'];
$number = $_number['number'];

include('include/condb.php');


$check = "SELECT username FROM users WHERE email = '$email'";
$result1 = mysqli_query($condb, $check) or die(mysqli_error());
$num = mysqli_num_rows($result1);
if ($num > 0) {

    echo "<script>";
    echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    exit;
} else {
    $sql = "UPDATE `users` SET `email` = '#' WHERE `users`.`id` = 10;";
    $result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
}

mysqli_close($condb);

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มช้อมูลสำเร็จ');";
    echo "window.location='index.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    // echo "alert('Error!');";
    echo "window.location='updates.php';";
    echo "</script>";
}
