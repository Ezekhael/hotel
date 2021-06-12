<?php
session_start();
include("server.php");
?>
<?php
$doornumber = $_GET['GetID'];
$query = " select * from reservation where doornumber='".$doornumber."'";
$result = mysqli_query($db,$query);

while($row=mysqli_fetch_assoc($result))
{
    $checkout = $row['checkout'];
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

                    <form action="editroom.php?GetID=<?php echo $doornumber ?>" method="post">
                        <input type="date" class="form-control mb-2" placeholder=" Door Number " name="checkout" value="<?php echo $checkout ?>">
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


    $checkout = $_POST['checkout'];

    $update = " update reservation set checkout='".$checkout."' where doornumber='".$doornumber."'";

    $res = mysqli_query($db,$update);

    if($res)
    {
        header("location:reservation.php");
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