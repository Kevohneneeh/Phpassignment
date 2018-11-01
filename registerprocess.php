<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 18/10/2018
 * Time: 10:29
 */
if (isset($_GET['email'])){
    $connected = mysqli_connect("localhost","root","","school");
    if (!$connected){
        echo "Failed to connect to the database";
    }else{
        $fname = $_GET['name1'];
        $sname = $_GET['name2'];
        $username = $_GET['name3'];
        $email = $_GET['email'];
        $date = $_GET['date'];
        $gender = $_GET['gender'];
        $password = $_GET['psw'];
        $insert = "INSERT INTO `details`(`id`, `fname`, `sname`, `username`, `email`, `date`, `gender`, `password`) VALUES (null ,'$fname','$sname','$username','$email','$date','$gender','$password')";
        $query = mysqli_query($connected,$insert);
        if ($query){
            echo "saved successfully";
            header("location:showstudents.php");
        }else{
            echo "Failed to save";
        }
    }
}


?>