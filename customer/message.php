<?php
session_start();
include("server.php");
$msg="";
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

<div class="col-6" style="margin-left:1px;margin-top: 60px">
    <div class="col" align="center" style="padding-top: 10px">
        <div class="container">
            <div class="row justifiy-content-center">
                <div class="col-lg-5 bg-light rounded mt-2">
                    <h4 class="text-center p-2"> Write a message </h4>
                    <form action="message.php" method="POST" class="p-2" >
                        <div class="form-group">
                            <textarea  name="message" class="form-control rounded-0" placeholder="Write your message" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn bt-primary rounded-0" value="Post message">
                            <h6 class="float-right text-succes p-2"><?=$msg;?></h6>
                        </div>
                    </form>
                </div>
            </div>

                <div class="row justify-content-center">


                </div>
                <?php

            if(isset($_POST['submit'])){
                $message=$_POST['message'];
                $date=date("Y-m-d");
                $email=$_SESSION['email'];
                $sql="INSERT INTO message(message,date,email)VALUES ('$message','$date','$email')";

                if($db->query($sql)){
                    $msg="Posted";
                }
                else {
                    $msg = "Failed to poste";
                }
            }
            ?>

        </div>
</body>
</html>