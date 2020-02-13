<?php
$localhost_db = '103.22.183.220'; //host
$username_db = 'smomscic_doaCode'; //username ฐานข้อมููล
$password_db = 'jG4rti7iw'; //password ฐานข้อมููล
$db_name = 'smomscic_doaCode'; //ชื่อ ฐานข้อมููล

$condb = mysqli_connect("$localhost_db", "$username_db", "$password_db", "$db_name") or die("Error: " . mysqli_error($condb));

mysqli_query($condb, "SET NAMES 'utf8' ");

date_default_timezone_set('Asia/Bangkok');
error_reporting(error_reporting() & ~E_NOTICE);

if (!$condb) {
    echo 'error';
}
