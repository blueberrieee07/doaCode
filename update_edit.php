<meta charset="utf-8">
<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

$id = $_POST['id'];
$sax = $_POST['sax'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$age = $_POST['age'];
$idcard = $_POST['idcard'];
$address = $_POST['address'];
$number = $_POST['number'];

include('include/condb.php');

$sql = "UPDATE `users` SET 
        `firstname` = '$firstname',
        `lastname` = '$lastname',
        `sax` = '$sax',
        `email` = '$email',
        `idcard` = '$idcard',
        `address` = '$address',
        `number` = '$number',
        `age` = '$age' 

        WHERE id = '$id' ";
$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());


mysqli_close($condb);

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มช้อมูลสำเร็จ');";
    echo "window.location='listUser.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    // echo "alert('Error!');";
    echo "window.location='updates.php';";
    echo "</script>";
}
