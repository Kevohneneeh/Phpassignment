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

<body style="background-color: olive;">
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color: #bfad8c">
        <form action="loginprocess.php" method="POST">
            <h1>Student login</h1>
            <hr>
            Username: <br> <input type="text" name="name" placeholder="Username" required>
            Password <br> <input type="password" name="psw" placeholder="Enter password" required>
            <input type="submit" name="btn_save" value="login">
           <button><a href="login2.php">Teachers login</a></button>
        </form>
        <p>New student <a href="register.php">Register Here.</a></p>
    </div>
    <div class="col-md-4"></div>

</div>
</body>
</html>