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
        <h1 style="text-align:center;">Student Search Form</h1>
        <form method="post">
            <table>
                <tr>
                    <td><label for="">NIC Number </label></td>
                    <td><input type="text" name="nic" id=""></td>
                    <td><input type="submit" value="Search" name="search"></td>
                    <a href="index.php"><input type="button" value="Home Page" style="float:right; padding:10px; margin-right:120px"></a>
                </tr>
            </table>
        </form>

        <table border=1 style="border-collapse:collapse; width:90%; text-align:center; margin-top:50px">
                    <tr>
                        <th>NIC NUMBER </th>
                        <th>NAME </th>
                        <th>ADDRESS</th>
                    </tr>

    </div>

    <div style="width:80%; margin:auto">
        <?php
        if(isset($_POST['search']))
        {
            
            include 'conn.php';

            $nic = $_POST['nic'];

            $sql = "SELECT * FROM student WHERE nic = '$nic'";

            $resut = mysqli_query($con, $sql);

            $row = mysqli_fetch_array($resut);

            if ($resut -> num_rows>0)
            {
                ?>
                    <tr>
                        <td><?php echo $row['nic']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['Address']?></td>
                    </tr>
                </table>

                <?php
            }

            else 
            {
                echo "<h3 style='color:red'>No information</h3>";
            }
        }

        ?>
    </div>

</body>
</html>
