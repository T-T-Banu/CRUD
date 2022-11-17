<?php
    include 'conn.php';

    //$id = $_POST['nic'];

    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $address = $_POST['address'];

    $sql = "UPDATE student SET nic='$nic', name= '$name', Address='$address' WHERE nic = '$nic'";

    if(mysqli_query($con, $sql))
    {
        echo "record update";
        header("location:index.php");
    }

    else{
        echo "Error";
    }
?>
