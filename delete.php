<?php
    include 'conn.php';

    $nic = $_GET['nic'];

    $sql = "DELETE FROM student WHERE nic = '$nic'";

    if (mysqli_query($con, $sql))
    {
        echo "record Delete";
        header("location:index.php");
    }

    else
    {
        echo "error";
    }
?>
