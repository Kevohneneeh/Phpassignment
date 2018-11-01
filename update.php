<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
<h1>Update Users</h1>
<a href="showstudents.php"><button style="background-color: red">Cancel</button></a>
<hr>
<form action="updateprocess.php" method="POST">
    <?php
    /**
     * Created by PhpStorm.
     * User: HP
     * Date: 23/10/2018
     * Time: 10:32
     */
    $connected = mysqli_connect("localhost","root","","school");
    $id=$_GET['x'];
    $fetch = mysqli_query($connected,"select * from details where id=$id");
    $row = mysqli_fetch_assoc($fetch);
    extract($row);

    ?>
    <input type="text" name="name1" value="<?php echo $fname;?>">
    <input type="text" name="name2" value="<?php echo $sname;?>">
    <input type="text" name="name3" value="<?php echo $username;?>">
    <input type="text" name="email" value="<?php echo $email;?>">
    <input type="number" name="id" value="<?php echo $id;?>" hidden>
    <a href=""><input type="submit" name="btnsave" value="Update"></a>
</form>
</body>
</html>