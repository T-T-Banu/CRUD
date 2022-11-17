<?php
    include 'conn.php';

    $nic = $_GET['nic'];

    $sql = "SELECT * FROM student WHERE nic = '$nic'";

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="width:80%; margin:auto">
        <h1 style="text-align:center;">Student Renewal Form</h1>
        
        <form action="updatePro.php" method="post">
            <table>
                <tr>
                    <td><label for="">NIC Number </label></td>
                    <td><input type="text" name="nic" id="" value="<?php echo $row['nic']?>"></td>
                </tr>

                <tr>
                    <td><label for="">Student Name </label></td>
                    <td><input type="text" name="name" id="" value="<?php echo $row['name']?>"></td>
                </tr>

                <tr>
                    <td><label for="">Student Address</label></td>
                    <td><textarea name="address" id="" cols="50" rows="4"><?php echo $row['Address']?></textarea></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="update"></td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>
