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
<div class="container" style="padding: 20px;border: 1px solid;margin: 21px;padding-top:100px">
<div class="col" >
    <?php


$_SESSION['checkin'] = $_POST['checkin'];
$_SESSION['checkout'] = $_POST['checkout'];
$_SESSION['roomtype'] = $_POST['roomtype'];

$select = "SELECT * FROM room WHERE roomstatus = 'Empty' and roomtype='".$_SESSION['roomtype']."'";
$result= $db->query($select);

    echo($db -> error);
while($room = $result->fetch_assoc()) {


?>
    <div class="row align-items-center" style="border:1px solid;margin-top:5px;margin-bottom:5px;padding-top:30px;padding-bottom:30px">
        <div class="col">
            <img width="200px" height="180px" src="hotel%20room.jpg">
        </div>
        <div class="col">
            <div class="row">
             <p>
                 <?php echo $room['roomtype'] ?> Room
             </p>
            </div>
            <div class="row">
                <p>
                    <?php echo $room['doornumber'] ?>
                </p>
            </div>
        </div>
        <div class="col">
            <form action="booking.php" method="POST">
            <a href="search.php">
                <input type="hidden" name="doornumber" value="<?php echo $room['doornumber'] ?>">
                <button type="submit" name="sub" class="btn btn-dark ">Book Now</button>
            </a>
            </form>
        </div>
    </div>
<?php
}
?>
</div>

</div>
</body>
</html>

