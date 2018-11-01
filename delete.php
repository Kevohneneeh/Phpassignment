<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 22/10/2018
 * Time: 10:52
 */
$connected = mysqli_connect("localhost","root","","school");
if (isset($_GET['x'])){
    $id = $_GET['x'];
    mysqli_query($connected,"delete from `details` WHERE id=$id");
    header("location:showstudents.php");
}
?>