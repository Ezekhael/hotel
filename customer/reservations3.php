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
            Reservations
        </h3>
    </div>
    <div class="row">
        <div class="col-6" style="width:840px;padding-right: 650px">
            <div class="list-group">
                <a href="accountdetails.php" class="list-group-item list-group-item-action">Account Details</a>
                <a href="change%20password.php" class="list-group-item list-group-item-action">Change Password</a>
                <a href="reservations.php" class="list-group-item list-group-item-action active" aria-current="true">
                    Reservations
                </a>
                <a href="review.php" class="list-group-item list-group-item-action">Reviews</a>
            </div>
        </div>
        <div class="col-6" style="padding-right: 500px">
            <div class="col"  style="border: 1px solid;overflow:auto;overflow-x:hidden; height:500px;padding: 10px">
                        </div>
    </div>

</div>
</body>
</html>