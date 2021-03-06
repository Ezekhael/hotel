<?php
session_start();
include("server.php");

?>
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
    <?php
    include("header.php");
    ?>
</header>
<?php
$validate=true;
$error = $email = $password = $cfpassword = $name = $surname = $phone = $emailerror = $passworderror = $cfpassworderror = $nameerror = $phoneerror = $confirmationerror = $surnameerror = "";
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
    if (empty($_POST["cfpassword"])) {
        $cfpassworderror = "Password is required";
        $validate=false;
    } else {
        $cfpassword = test_input($_POST["cfpassword"]);
    }
    if (empty($_POST["name"])) {
        $nameerror = "Name is required";
        $validate=false;
    } else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["surname"])) {
        $surnameerror = "Surname is required";
        $validate=false;
    } else {
        $surname = test_input($_POST["surname"]);
    }
    if (empty($_POST["phone"])) {
        $phoneerror = "Phone Number is required";
        $validate=false;
    } else {
        $phone = test_input($_POST["phone"]);
    }
    if ($password != $cfpassword) {
    $confirmationerror = "Passwords are not same";
    $validate=false;
    }




    if ($validate){
      header("Location:login.php");
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<?php
if(!empty($_POST["name"] && $_POST["surname"] && $_POST["email"] && $_POST["phone"] &&
    $_POST["password"] && $_POST["cfpassword"])){


    if(isset($_POST["name"],$_POST["surname"],$_POST["email"],$_POST["phone"],
        $_POST["password"],$_POST["cfpassword"])){

        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $phoneNumber = $_POST["phone"];
        $password = $_POST["password"];
        //$password = md5($password); security purpose
        $passwordAgain = $_POST["cfpassword"];


        $add = $db -> query("INSERT INTO user(name, surname, phone, email, password) 
                VALUES ('".$name."','".$surname."','".$phoneNumber."','".$email."','".$password."')");



    }
}
?>


<div style="padding-left: 30px">
    <div style="padding-top: 30px">
        <h3 align="left">
            Sign Up
        </h3>
    </div>
    <div>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
    <div style="padding-right: 1600px;padding-top: 10px" class="form-floating">
        <input name="name" type="text" class="form-control" placeholder="Bahad??r Enes">
        <?php
        echo $nameerror;
        ?>
        <label  class="form-label">Name</label>
    </div>
    <div style="padding-right: 1600px;padding-top: 10px" class="form-floating">
        <input name="surname" type="text" class="form-control" placeholder="AY">
        <?php
        echo $surnameerror;
        ?>
        <label  class="form-label">Surname</label>
    </div>
    <div style="padding-right: 1600px;padding-top: 10px" class="form-floating">
        <input name="phone" type="phone" class="form-control" placeholder="5555555555">
        <?php
        echo $phoneerror;
        ?>
        <label  class="form-label">Phone Number</label>
    </div>
    <div style="padding-right: 1600px;padding-top: 10px" class="form-floating">
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <?php
        echo $emailerror;
        ?>
        <label for="floatingInput">Email address</label>
    </div>
    <div style="padding-right: 1600px;padding-top: 10px" class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <?php
        echo $passworderror . "<br>";
        ?>
        <?php
        echo $confirmationerror;
        ?>
        <label for="floatingPassword">Password</label>
    </div>
    <div style="padding-right: 1600px;padding-top: 10px" class="form-floating">
        <input name="cfpassword" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <?php
        echo $cfpassworderror . "<br>";
        ?>

        <?php
        echo $confirmationerror;
        ?>
        <label for="floatingPassword">Confirm Password</label>
    </div>
            <input class="btn btn-primary" style="margin-top: 10px" type="submit">
        </form>
    </div>


</div>
</body>
</html>