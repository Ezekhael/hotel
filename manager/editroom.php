<?php
session_start();
include("server.php");
?>
<?php
$doornumber = $_GET['GetID'];
$query = " select * from room where doornumber='".$doornumber."'";
$result = mysqli_query($db,$query);

while($row=mysqli_fetch_assoc($result))
{
    $doornumber = $row['doornumber'];
    $floornumber = $row['floornumber'];
    $roomtype = $row['roomtype'];
    $roomstatus = $row['roomstatus'];
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
                    <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                </div>
                <div class="card-body">

                    <form action="editroom.php?GetID=<?php echo $doornumber ?>" method="post">
                        <input type="text" class="form-control mb-2" placeholder=" Door Number " name="doornumber" value="<?php echo $doornumber ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Floor Number " name="floornumber" value="<?php echo $floornumber ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Room Type " name="roomtype" value="<?php echo $roomtype ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Room Status " name="roomstatus" value="<?php echo $roomstatus ?>">
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

    $doornumber = $_GET['GetID'];
    $doornumber = $_POST['doornumber'];
    $floornumber = $_POST['floornumber'];
    $roomtype = $_POST['roomtype'];
    $roomstatus = $_POST['roomstatus'];

    $update = " update room set doornumber = '".$doornumber."',floornumber = '".$floornumber."', roomtype = '".$roomtype."',roomstatus='".$roomstatus."' where doornumber='".$doornumber."'";

    $res = mysqli_query($db,$update);

    if($res)
    {
        header("location:room.php");
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}
else
{
    //header("location:room.php");
}


?>
</body>
</html>