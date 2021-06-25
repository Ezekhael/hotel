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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
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
            Reviews
        </h3>
    </div>
    <div class="row">
        <div class="col-6" style="width:840px;padding-right: 650px">
            <div class="list-group">
                <a href="accountdetails.php" class="list-group-item list-group-item-action">Account Details</a>
                <a href="change%20password.php" class="list-group-item list-group-item-action">Change Password</a>
                <a href="reservations.php" class="list-group-item list-group-item-action">Reservations</a>
                <a href="review.php" class="list-group-item list-group-item-action" aria-current="true">
                    Reviews
                </a>
                <a href="mymessages.php" class="list-group-item list-group-item-action active">Messages</a>
            </div>
        </div>
        <div class="col-6" style="padding-right: 500px">
            <div class="col" align="right">
            </div>
            <div class="col"  style="border: 1px solid;overflow:auto;overflow-x:hidden; height:500px;padding: 10px">
                <div class="row" style="border: 1px solid">
                    <?php
                    $select = "SELECT * FROM message WHERE email = '".$_SESSION["email"]."'";
                    $result = $db->query($select);
                    while($message = $result -> fetch_assoc()){


                        ?>
                        <div class="row" style="border: 1px solid">
                            <p>
                                <?php echo $message['message']; ?>
                            </p>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>