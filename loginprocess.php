<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 25/10/2018
 * Time: 01:18
 */

$connected = mysqli_connect("localhost","root","","school");

if (!$connected){
    echo "Failed to connect";
}

if (isset($_POST['name'])){

    $name = $_POST['name'];
    $password = $_POST['psw'];

    $sql = "SELECT * FROM `details` WHERE username= '".$name."' and password = '".$password."'limit 1";

    $result = mysqli_query($connected,$sql);
    $count = mysqli_num_rows($result);

    if ($count==1)
    {
        echo "You are logged in Successfully";
        header("location:welcome.php");
    }else{

        echo "Enter correct login details";
    }
}












?>
























