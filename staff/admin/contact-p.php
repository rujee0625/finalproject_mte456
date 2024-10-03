<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//connet DB
include("../config.php");

//Query
$str = "insert into teacher (name,email,message) 
        values('$name','$email','$message')";
$obj = mysqli_query($conn, $str);

if ($obj) {
    echo "OK!..";
    echo "<meta http-equiv='refresh' content='3;URL=ST_select.php' />";
} else {
    echo "No No No!..";
    echo "<meta http-equiv='refresh' content='3;URL=ST_insert.php' />";
}
?>