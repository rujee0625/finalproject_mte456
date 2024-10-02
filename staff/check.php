<?php
session_start();
include("config.php");

$A_User = mysqli_real_escape_string($conn, $_POST['adUser']);
$A_Pass = md5($_POST['adPass']); //ป้องกันไม่ให้คนอื่นรู้รหัสผ่าน


$str = "select * from admin where A_user = '$A_User' and A_pass = '$A_Pass' ";
$obj = mysqli_query($conn, $str);

if ($obj && mysqli_num_rows($obj) == 1) {
    echo "Yes Success!..";
    $_SESSION['user'] = $A_User;
    echo "<meta http-equiv='refresh' content='1;URL=admin/ST_select.php' />";
} else {
    echo "No not correct!..";
    echo "<meta http-equiv='refresh' content='1;URL=login.php' />";
}
?>