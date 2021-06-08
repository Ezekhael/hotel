<?php
session_start();
include("server.php");

if(!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}
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
<div style="padding-left: 30px">

</div>
<div style="padding-left: 30px">
    <div style="padding-top: 70px">
        <h3 style="text-align:center;">
            Change Password
        </h3>
    </div>

    <div class="row">
        <div class="col-6" style="width:840px;padding-right: 600px">
            <div class="list-group">
                <a href="accountdetails.php" class="list-group-item list-group-item-action">Account Details</a>
                <a href="change%20password.php" class="list-group-item list-group-item-action active" aria-current="true">
                    Change Password
                </a>
                <a href="reservations.php" class="list-group-item list-group-item-action">Reservations</a>
                <a href="review.php" class="list-group-item list-group-item-action">Reviews</a>
            </div>
        </div>
        <div class="column-6" style="padding-top: 20px;width:800px">
            <form action="" method="POST">
            <div class="row" style="padding-right: 500px;padding-top: 20px" class="form-floating">
                <label for="floatingPassword">Current Password</label>
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Current Password" value="">
            </div>
            <div class="row" style="padding-right: 500px;padding-top: 20px" class="form-floating">
                <label for="floatingPassword">New Password</label>
                <input type="password" name="npassword" class="form-control" id="floatingPassword" placeholder="New Password" value="">
            </div>
            <div class="row" style="padding-right: 500px;padding-top: 20px" class="form-floating">
                <label for="floatingPassword">New Password Confirmation</label>
                <input type="password" name="cfpassword" class="form-control" id="floatingPassword" placeholder="New Password" value="">

            </div>
            <div class="row" style="padding-right: 100px;padding-top: 30px">
                <div class="mb-3">
                    <button type="submit" name="save" class="btn btn-success">Save Changes</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <?php
    if(isset($_POST['save']))
    {

        $password = $_POST['password']; //current password
        $npassword = $_POST['npassword']; //new password
        $cfpassword = $_POST['cfpassword']; //confirmation of new password

        //echo '<script type="text/javascript">alert("Update Clicked")</script>';
        if(empty($password) && empty($npassword) && empty($cfpassword))
        {
            echo '<script type="text/javascript">alert("Enter Data in All fields")</script>';
        }
        else
        {


            $check = $db -> query("SELECT * FROM user WHERE email='".$_SESSION["email"]."'");
            $userfound = $check -> fetch_assoc();

            if($password == $userfound['password'] && $npassword == $cfpassword){

                $pw = $db -> query("UPDATE user SET password='$npassword' where email='".$_SESSION["email"]."'");

                if($pw)
                {
                    echo '<script type="text/javascript">alert("Password Updated successfully")</script>';
                }
                else {
                    echo '<script type="text/javascript">alert("Update failed")</script>';
                }

            }
            else{
                echo '<script type="text/javascript">alert("Passwords does not match")</script>';
            }





        }
    }
    ?>
</div>
</body>
</html>