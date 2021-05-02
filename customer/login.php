<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hotel California</title>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<header class="header">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Hotel California</a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservations.html">Reservations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.html">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rooms.html">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="allcomments.html.html">Comments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account%20details.html"><img src="profile.png" width="30px" height="30px"></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<?php
    $validate=true;
    $error = $email = $password = $emailerror = $passworderror = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")  {

    if (empty($_POST["email"]) || filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $emailerror = "Valid email is required";
        $validate=false;
    } else {
        $email = test_input($_POST["email"]);
    }
    if (empty($_POST["password"])) {
        $passworderror = "Password is required";
        $validate=false;
    } else {
        $password = test_input($_POST["password"]);
    }


    if ($validate){
    if ($email =='enes@gmail.com' AND $password=='12345') {
        header("Location:account%20details.html");
    } else {
        $error = "Wrong Email or Password Try Again";
    }
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>



<div style="padding-left: 30px">
    <div style="padding-top: 30px">
       <?php
       echo $error;
       ?>
        <h3 align="left">
            Login
        </h3>
    </div>
    <div style="padding-top: 10px">
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
            <div style="padding-right: 1600px" class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <?php
                echo $emailerror;
                ?>
                <label for="floatingInput">Email address</label>
            </div>
            <div style="padding-right: 1600px" class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <?php
                echo $passworderror;
                ?>
                <label for="floatingPassword">Password</label>
            </div>
            <div>
                <div style="margin-top: 10px">
                    <a href="signup.php" style="color:black"><p >If you dont have an account click here to create one</p></a>
                </div>
            </div>
            <input class="btn btn-primary" style="margin-top: 10px" type="submit">
        </form>
    </div>


</div>
</body>
</html>