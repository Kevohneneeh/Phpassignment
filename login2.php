<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/css.css">
</head>

<body style="background-color: #abf2bf;">
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color: #bf8881">
        <h1>Teachers login</h1>
        <hr>
        <form action="showstudents.php" method="POST">
            Username<br><input type="text" name="name" placeholder="Username" required>
            Password<br><input type="password" name="psw" placeholder="Enter password" required>
            <input type="submit" name="btn_save" value="login">

        </form>
        <p>New member <a href="register.php">Register Here.</a></p>
    </div>
    <div class="col-md-4"></div>

</div>
</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 31/10/2018
 * Time: 12:07
 */

$connected = mysqli_connect("localhost","root","","school");

if (!$connected){
    echo "Failed to connect";
}

if (isset($_POST['name'])){

    $name = $_POST['name'];
    $password = $_POST['psw'];

    while ($name=='kevo' and $password=='kevo12')

    $sql = "SELECT * FROM `teacher` WHERE username= '".$name."' and password = '".$password."'limit 1";

    $result = mysqli_query($connected,$sql);
    $count = mysqli_num_rows($result);

    if ($count==1)
    {
        echo "You are logged in Successfully";
        header("location:showstudents.php");
    }else{

        echo "Enter correct login details";
    }
}


?>