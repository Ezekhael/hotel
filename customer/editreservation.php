<?php
session_start();
include("server.php");
?>
<?php
$id = $_GET['GetID'];
$roomtype =$_GET['roomtype'];
$query = " select * from reservation where id='".$id."'";
$result = mysqli_query($db,$query);
echo $db->error;

while($row=mysqli_fetch_assoc($result))
{
    $checkin = $row['checkin'];
    $checkout = $row['checkout'];
    $totprice = $row['totprice'];
    //$roomtype = $row['roomtype'];
    echo $db->error;
}

?>
<?php
function calc($checkin, $checkout, $roomtype){
    include("server.php");

    $select = $db -> query("SELECT * FROM roomprice"
        ." WHERE roomtype = '".$roomtype."'");

    $price = $select -> fetch_assoc();

    $date1 = date_create("$checkout");
    $date2 = date_create("$checkin");

    $diff = date_diff($date1, $date2);

    return $diff->format('%d') * $price['price'];
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card mt-5">
                <div class="card-title">
                    <h3 class="bg-success text-white text-center py-3"> Update Your Check-Out Date</h3>
                </div>
                <div class="card-body">

                    <form action="editreservation.php?GetID=<?php echo $id ?>&roomtype=<?php echo $roomtype ?>" method="post">
                        <input type="date" class="form-control mb-2" placeholder=" Check-Out " name="checkout" value="<?php echo $checkout ?>">
                        <button type="submit" button class="btn btn-primary" name="update">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php

if(isset($_POST['update']))
{
    $update = " update reservation set checkout='".$_POST['checkout']."' where id='".$id."'";

    $res = mysqli_query($db,$update);


    if($res)
    {
        $totprice = calc($checkin,$_POST['checkout'], $roomtype);
        $changetot = $db->query("UPDATE reservation SET totprice = '".$totprice."' where id='".$id."'");
        header("location:reservations.php");
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}
else
{
    //header("location:reservation.php");
}


?>
</body>
</html>