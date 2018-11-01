<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 23/10/2018
 * Time: 10:49
 */
$connected = mysqli_connect("localhost","root","","school");
if (isset($_POST['id'])){
    extract($_POST);
    mysqli_query($connected,"UPDATE details SET fname='$name1',sname='$name2',username='$name3',
    email='$email' WHERE id=$id");
    header("location:showstudents.php");
}
?>