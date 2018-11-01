<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/css.css">
</head>
<body style="background-color: #ffcec6">
<h1 style="text-align: center"><i><b>Students</b></i></h1>
<div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-2"><a href="register.php"><button class="add" style="background-color: red">Add Student</button></a></div>
    <div class="col-md-5"></div>
</div>

<hr>
<div class="row">

    <div class="col-md-6">
        <table style="background-color: orange">
            <tr>
                <th>First name</th>
                <th>Second name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php
            /**
             * Created by PhpStorm.
             * User: HP
             * Date: 18/10/2018
             * Time: 10:29
             */
            $connected = mysqli_connect("localhost","root","","school");
            $fetch = mysqli_query($connected,
                "select * from details");
            while ($row = mysqli_fetch_assoc($fetch)){
                extract($row);

                echo
                "<tr>
<td>$fname</td>
<td>$sname</td>
<td>$username</td>
<td>$email</td>
<td><a href='update.php?x=$id'><button class='btn btn-success'>Update</button></a></td>
<td><a href='delete.php?x=$id'><button class='btn btn-danger'>Delete</button></a></td>

</tr>";
            }
            ?>
        </table>
    </div>
    <div class="col-md-3"></div>
</div>

</body>
</html>