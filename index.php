<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/css.css">
</head>
<style>
    /*body {margin:0;}*/

    .navbar {
        overflow: hidden;
        background-color: #333;
        position: fixed;
        top: 0;
        width: 100%;
        min-height: content-box;
        height: 10%;
    }

    .navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .navbar a:hover {
        background: #ddd;
        color: black;
    }
    .main {
        padding: 5px;
        text-align: center;
        color: #005cbf;
        margin-top: 70px;
</style>
<body>
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="login.php">School page</a>
    <a href="">Contact us</a>
    <a href="login.php"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    </a>
    <a href="register.php"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register</button>
    </a>
    </div>
<div class="main">
    <h1><b><i>WELCOME TO OUR HOME PAGE.</i></b></h1>
    <hr>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Ad aut consectetur culpa doloribus expedita iure laudantium minus
    nemo nesciunt obcaecati officiis placeat quaerat quas qui quidem, quo
    tenetur totam voluptatem.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias animi
    consequatur deserunt eaque impedit iure mollitia nam, nostrum nulla quibusdam
    sunt tempore ut. Expedita ipsa libero molestias provident vero.</p>
</body>
</html>