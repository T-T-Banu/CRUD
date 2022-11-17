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
        <h1 style="text-align:center;">Student Registration Form</h1>
        <a href="search.php"><input type="button" value="Search Student" style="float:right; padding:10px; margin-right:120px"></a>
        <form action="crud.php" method="post">
            <table>
                <tr>
                    <td><label for="">NIC Number </label></td>
                    <td><input type="text" name="nic" id=""></td>
                </tr>

                <tr>
                    <td><label for="">Student Name </label></td>
                    <td><input type="text" name="name" id=""></td>
                </tr>

                <tr>
                    <td><label for="">Student Address</label></td>
                    <td><textarea name="address" id="" cols="50" rows="4"></textarea></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </div>

    <div style="width:80%; margin:auto; margin-top:50px">
        <?php
            include 'conn.php';

            $sql = "SELECT * FROM student";

            $result = mysqli_query($con, $sql);

            if($result ->num_rows > 0)
            {
                ?>
                <table border=1 style="border-collapse:collapse; width:90%; text-align:center">
                        <tr style="height:40px">
                            <th>NIC NUMBER</th>
                            <th>STUDENT NAME </th>
                            <th>STUDENT ADDRESS</th>
                            <th colspan=2>ACTION</th>
                        </tr>
                    
                <?php
                while($row = mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                    <td> <?php echo $row['nic']?> </td>
                    <td> <?php echo $row['name']?> </td>
                    <td> <?php echo $row['Address']?> </td>
                    <td><a href="update.php?nic=<?php echo $row['nic']?>"><button>Update</button></a></td>
                    <td><a href="delete.php?nic=<?php echo $row['nic']?>"><button>Delete</button></a></td>
                    </tr>
                    <?php
                }
            }

            else
            {
                echo "No Record";
            }

        ?>
        </table>
    </div>
</body>
</html>
