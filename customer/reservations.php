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
                <a href="mymessages.php" class="list-group-item list-group-item-action">Messages</a>
            </div>
        </div>
        <div class="col-6" style="padding-right: 100px">
            <div class="col"  style="border: 1px solid;overflow:auto;overflow-x:hidden; height:500px;padding: 10px">
                <?php

                $select = "SELECT * FROM reservation JOIN room ON reservation.doornumber = room.doornumber WHERE email='".$_SESSION['email']."'";
                $result= $db->query($select);

                echo($db -> error);
                while($room = $result->fetch_assoc()) {


                ?>
                <div class = "row" style ="margin-top:15px">

                    <div class="col-7">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Check-In</th>
                                <th scope="col">Check-Out</th>
                                <th scope="col">Door Number</th>
                                <th scope="col">Room Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Extend</th>
                                <th scope="col">Cancel</th>
                            </tr>
                            </thead>
                            <?php
                            //for view
                            $get = " SELECT * FROM reservation JOIN room ON reservation.doornumber=room.doornumber ";
                            $result = mysqli_query($db,$get);

                            while($row=mysqli_fetch_assoc($result))
                            {
                                $checkin = $row['checkin'];
                                $checkout = $row['checkout'];
                                $doornumber = $row['doornumber'];
                                $roomtype = $row['roomtype'];
                                $totprice = $row['totprice'];

                                ?>
                                <tr>
                                    <td><?php echo $checkin ?></td>
                                    <td><?php echo $checkout ?></td>
                                    <td><?php echo $doornumber ?></td>
                                    <td><?php echo $roomtype ?></td>
                                    <td><?php echo $totprice ?></td>
                                    <td><a href="editreservation.php?GetID=<?php echo $doornumber ?>&checkin=<?php echo $checkin?>">Extend</a></td>
                                    <td><a href="deletereservation.php?Del=<?php echo $doornumber ?>">Cancel</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>

    </div>

</div>
</body>
</html>