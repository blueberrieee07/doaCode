<meta charset="utf-8">
<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$sax = $_POST['sax'];
$age = $_POST['age'];
$idcard = $_POST['idcard'];
$date = $_POST['date'];
$address = $_POST['address'];
$number = $_POST['number'];
$position = $_POST['position'];
$university = $_POST['university'];
$branch = $_POST['branch'];
$graduationyear = $_POST['graduationyear'];
$specifically = $_POST['specifically'];
$emai = $_POST['email'];


include('include/condb.php');


$check = "SELECT username FROM users WHERE username = '$user'";
$result1 = mysqli_query($condb, $check) or die(mysqli_error());
$num = mysqli_num_rows($result1);
if ($num > 0) {

    echo "<script>";
    echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    exit;
} else {
    $sql = "INSERT INTO `users` 
    (
            `username`,
            `password`, 
            `firstname`, 
            `lastname`,
            `sax`, 
            `email`, 
            `registerdate`,
            `status`,
            `idcard`,
            `address`,
            `number`,
            `age`, 
            `phone`,
            `day`,
            `position`,
            `university`,
            `branch`, 
            `graduationyear`, 
            `specifically`, 
            `date`
            ) 
               VALUES 
               (
               [value-2],
               [value-3],
               [value-4],
               [value-5],
               [value-6],
               [value-7],
               [value-8],
               [value-9],
               [value-10],
               [value-11],
               [value-12],
               [value-13],
               [value-14],
               [value-15],
               [value-16],
               [value-17],
               [value-18],
               [value-19],
               [value-20],
               [value-21]
               
               )";
    $result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
}

mysqli_close($condb);

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มช้อมูลสำเร็จ');";
    echo "window.location='add.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    // echo "alert('Error!');";
    echo "window.location='add.php';";
    echo "</script>";
}
