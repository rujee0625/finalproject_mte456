<?php
session_start();

if ($_SESSION['user'] == "") {
    echo "<meta http-equiv='refresh' content='0;URL=../login.php' />";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employees System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

    <?php

    include("../config.php");

    $strKeyword = null;
    if (isset($_GET["txtKeyword"])) {
        $strKeyword = $_GET["txtKeyword"];
    }

    $str = "select * from teacher where name like '%$strKeyword%' ";
    $obj = mysqli_query($conn, $str);
    include("../page/pg.php");

    ?>

    <div class="card text-center" style="padding:15px;">
        <h4>All contact
            <a href="../logout.php">Log out</a>

        </h4>
    </div><br>

    <div class="container">
        <h4>
            <a href="ST_insert.php" class="btn btn-primary"> Add contact </a>
        </h4><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $i = ($Page - 1) * $Per_Page;
                while ($result = mysqli_fetch_array($obj)) {
                    ?>

                    <tr>
                        <td><?php echo $result['name']; ?></td>
                        <td><?= $result['email']; ?></td>
                        <td><?= $result['message']; ?></td>

                        <a href="ST_delete.php?del=<?= $result['id']; ?>" style="color:red"
                            onclick="return confirm('Are you sure want to delete this record')">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                        </td>
                    </tr>

                    <?php
                }
                ?>

            </tbody>
        </table>
        <br>

        <?php
        include("../page/sh.php");
        ?>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>