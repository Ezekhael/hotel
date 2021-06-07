<?php
session_start();
include("server.php");
$name="";
$surname="";
$email="";
$phone="";

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
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">Hotel California</a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservations.php">Reservations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="allcomments.php">Comments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="logout.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="accountdetails.php"><img src="profile.png" width="30px" height="30px"></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div style="padding-left: 30px">

</div>
<div style="padding-left: 30px">
    <div style="padding-top: 70px">
        <h3 style="text-align:center;">
            Account Details
        </h3>
    </div>
    <div class="row">
        <div class="col-6" style="width:840px;padding-right: 600px;padding-bottom: 60px">
            <div class="list-group">
                <a href="accountdetails.php" class="list-group-item list-group-item-action active" aria-current="true">
                    Account Details
                </a>
                <a href="change%20password.php" class="list-group-item list-group-item-action">Change Password</a>
                <a href="reservations.php" class="list-group-item list-group-item-action">Reservations</a>
                <a href="review.php" class="list-group-item list-group-item-action">Reviews</a>
            </div>
        </div>

        <div class="col-6" align="left" style="padding-right: 500px">
            <form action="" method="POST">
                <div class="row" style="padding-right: 200px">
                    <div class="mb-3">
                        <label  class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo($_SESSION['name'])?>">
                    </div>
                </div>
                <div class="row" style="padding-right: 200px">
                    <div class="mb-3">
                        <label  class="form-label">Surname</label>
                        <input type="text" class="form-control" name="surname" value="<?php echo($_SESSION['surname'])?>">
                    </div>
                </div>
                <div class="row" style="padding-right: 200px;">
                    <div class="mb-3">
                        <label  class="form-label">E-mail</label>
                        <input type="text" class="form-control" name="email" value="<?php echo($_SESSION['email'])?>">
                    </div>
                </div>
                <div class="row" style="padding-right: 200px">
                    <div class="mb-3">
                        <label  class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo($_SESSION['phone'])?>">
                    </div>
                </div>
                <div class="row" style="padding-right: 100px;padding-top: 30px">
                    <div class="mb-3">
                        <button type="submit" name = "save" class="btn btn-success">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <?php
    if(isset($_POST['save']))
    {
        //echo '<script type="text/javascript">alert("Update Clicked")</script>';
        if($_POST['name']=="" || $_POST['surname']=="" || $_POST['email']=="" || $_POST['phone']=="")
        {
            echo '<script type="text/javascript">alert("Enter Data in All fields")</script>';
        }
        else
        {
            $name=$_POST['name'];
            $surname=$_POST['surname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];

            $query = "UPDATE user
							SET name='$name',surname='$surname',email='$email',phone='$phone' 
                            where email='$email'
							";

            $query_run = mysqli_query($db,$query);
            $get = $query_run -> fetch_assoc();

            if($get)
            {
                echo '<script type="text/javascript">alert("User information is updated successfully")</script>';
            }
            else{
                echo '<script type="text/javascript">alert("User information could not be updated successfully")</script>';
            }

        }
    }
    ?>

</div>
</body>
</html>