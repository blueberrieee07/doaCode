<meta charset="utf-8">
<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';
// exit;
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$sax = $_POST['sax'];
$age = $_POST['age'];
$idcard = $_POST['idcard'];
$date = $_POST['date'];
$address = $_POST['address'];
$position = $_POST['position'];
$university = $_POST['university'];
$branch = $_POST['branch'];
$graduationyear = $_POST['graduationyear'];
$specifically = $_POST['specifically'];
$phone = $_POST['number'];
$email = $_POST['email'];



include('include/condb.php');


$check = "SELECT username FROM users  WHERE username = '$email'";
$result1 = mysqli_query($condb, $check) or die(mysqli_error());
$num = mysqli_num_rows($result1);
if ($num > 0) {

    echo "<script>";
    echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    exit;
} else {
    $sql = "INSERT INTO users
    (
            `username`,
            `password`, 
            `firstname`, 
            `lastname`,
            `email`,
            `sax`,
            `idcard`,
            `address`,
            `age`, 
            `phone`,
            `day`,
            `position`,
            `university`,
            `branch`, 
            `graduationyear`, 
            `specifically`
            ) 
               VALUES 
               (
                '$email',
                '$password',
                '$firstname',
                '$lastname',
                '$email',
                '$sax',
                '$idcard',
                '$address',
                '$age', 
                '$phone',
                '$date',
                '$position',
                '$university',
                '$branch', 
                '$graduationyear', 
                '$specifically'

               )";
    $result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
}

mysqli_close($condb);

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มช้อมูลสำเร็จ');";
    echo "window.location='ilstUser.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    // echo "alert('Error!');";
    echo "window.location='ilstUser.php';";
    echo "</script>";
}
