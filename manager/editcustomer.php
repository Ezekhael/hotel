<?php
session_start();
include("server.php");
?>
<?php
$email = $_GET['GetID'];
$query = " select * from user where email='".$email."'";
$result = mysqli_query($db,$query);

while($row=mysqli_fetch_assoc($result))
{
    $name = $row['name'];
    $surname = $row['surname'];
    $email = $row['email'];
    $phone = $row['phone'];
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

                    <form action="editcustomer.php?GetID=<?php echo $email ?>" method="post">
                        <input type="text" class="form-control mb-2" placeholder="Name" name="name" value="<?php echo $name ?>">
                        <input type="text" class="form-control mb-2" placeholder="Surname" name="surname" value="<?php echo $surname ?>">
                        <input type="text" class="form-control mb-2" placeholder="Email" name="email" value="<?php echo $email ?>">
                        <input type="text" class="form-control mb-2" placeholder="Phone" name="phone" value="<?php echo $phone ?>">
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

    $emailold = $_GET['GetID'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $update = " update user set name = '".$name."', surname = '".$surname."', email = '".$email."',phone='".$phone."' where email='".$emailold."'";

    $res = mysqli_query($db,$update);

    if($res)
    {
        header("location:customers.php");
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}
else
{
    //header("location:customers.php");
}


?>
</body>
</html>