<meta charset="utf-8">
<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
session_start();
if (isset($_POST['email'])) {
    include('include/condb.php');

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $check = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result1 = mysqli_query($condb, $check) or die(mysqli_error());
    $num = mysqli_num_rows($result1);

    if ($num == 1) {
        $row = $num;

        $_SESSION['userid'] = $row['id'];
        $_SESSION['user'] = $row['firstname'] . "" . $row['lastname'];
        header("Location:index.php");
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('ผิด');";
        echo "window.location='login.php';";
        echo "</script>";
    }
}
