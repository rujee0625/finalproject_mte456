<?php

$del1 = $_GET['del'];

//connet DB
include("../config.php");

//Query
$str = "delete from student where id = '$del1' ";
$obj = mysqli_query($conn, $str);

if ($obj) {
    echo "OK!..";
    echo "<meta http-equiv='refresh' content='1;URL=ST_select.php' />";
} else {
    echo "No No No!..";
    echo "<meta http-equiv='refresh' content='1;URL=ST_select.php' />";
}
?>