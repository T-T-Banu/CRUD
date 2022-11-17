<?php

    include 'conn.php';

    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $address= $_POST['address'];

    $sql = "INSERT INTO student(nic, name, Address) VALUES ('$nic', '$name', '$address')";
    
    if (mysqli_query($con, $sql))
    {
        ?>
        <script>
            alert("Data successfully inserded");
            window.location.href="index.php";
        </script>
        <?php
       
    }

    else
    {
        echo "Error ".mysqli_error($con);
    }
?>
