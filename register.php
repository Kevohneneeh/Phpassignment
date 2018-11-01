<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/css.css">
</head>
<body style="background-color: #1e7e34">
<h1 style="text-align: center;color: deeppink"><i><b>REGISTER HERE</b></i></h1>
<hr>
<a href="index.php" style="color: black;padding-left: 30px">Back</a>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 form">
            <form action="registerprocess.php" method="GET">
                <h1 style="color: orange"><b><i>REGISTER</i></b></h1>
                <p>Please fill in this form to register.</p>
                <hr>
                <label><b>First Name</b></label>
                <input type="text" placeholder="Enter Name" name="name1" required>

                <label><b>Second Name</b></label>
                <input type="text" placeholder="Enter Second Name" name="name2" required>

                <label><b>Username</b></label>
                <input type="text" placeholder="Username" name="name3" required>

                <label><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label><b>D.O.B</b></label>
                <input type="date" name="date" required> <br>

                <label><b>Gender</b></label> <br>
                MALE: <input type="radio"  name="gender" value="male" required>
                FEMALE: <input type="radio"  name="gender" value="female" required><br>


                <label><b>Password</b></label>
                <input type="password" placeholder="Password" name="psw" required>

                <label>
                    <input type="checkbox" checked="checked" style="margin-bottom"> Remember me
                </label>
                <div class="clearfix">
                    <button type="submit" class="signupbtn">Register</button>

                </div>

        </div>

        </form>
        <div class="col-md-4"></div>
    </div>
</div>
</div>
</body>
</html>