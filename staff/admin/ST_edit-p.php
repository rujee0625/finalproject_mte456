<?php

$fullname = $_POST['fullname'];
$nname = $_POST['nname'];
$mid_score = $_POST['mid_score'];
$final_score = $_POST['final_score'];
$editID = $_POST['editID'];
$dstfile = $_POST['pic'];

if (isset($_FILES['fileupload'])) 
{
    $filename = $_FILES['fileupload']['name'];
    $srcfile = $_FILES['fileupload']['tmp_name'];

    $filename = time() . $filename;
    $dstfile = "img/$filename";

    if (move_uploaded_file($srcfile, $dstfile)) {
        echo "upload success.";
    } else {
        echo "upload fail.";
        $dstfile = $_POST['pic'];
    }
}

//connet DB
include("../config.php");

//Query
$str = "update student set img = '$dstfile', fname = '$fullname', nname = '$nname ', 
        mid_score = '$mid_score', final_score = '$final_score' 
        where id = '$editID' ";
$obj = mysqli_query($conn, $str);

if ($obj) {
    echo "OK!..";
    echo "<meta http-equiv='refresh' content='3;URL=ST_select.php' />";
} else {
    echo "No No No!..";
    echo "<meta http-equiv='refresh' content='3;URL=ST_select.php' />";
}
?>