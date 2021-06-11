<?php
session_start();
include("server.php");
?>
<?php
$staffid = $_GET['GetID'];
$query = " select * from staff where staffid='".$staffid."'";
$result = mysqli_query($db,$query);

while($row=mysqli_fetch_assoc($result))
{
    $staffid = $row['staffid'];
    $staffname = $row['staffname'];
    $staffsurname = $row['staffsurname'];
    $staffphone = $row['staffphone'];
    $salary = $row['salary'];
    $position = $row['position'];
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

                    <form action="edit.php?GetID=<?php echo $staffid ?>" method="post">
                        <input type="text" class="form-control mb-2" placeholder=" Staff Name " name="staffname" value="<?php echo $staffname ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Staff Surname " name="staffsurname" value="<?php echo $staffsurname ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Staff Phone " name="staffphone" value="<?php echo $staffphone ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Salary " name="salary" value="<?php echo $salary ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Position " name="position" value="<?php echo $position ?>">
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

    $staffid = $_GET['GetID'];
    $staffname = $_POST['staffname'];
    $staffsurname = $_POST['staffsurname'];
    $staffphone = $_POST['staffphone'];
    $salary = $_POST['salary'];
    $position = $_POST['position'];

    $update = " update staff set staffname = '".$staffname."', staffsurname = '".$staffsurname."',staffphone='".$staffphone."',
     salary='".$salary."',position='".$position."'where staffid='".$staffid."'";

    $res = mysqli_query($db,$update);

    if($res)
    {
        header("location:staff.php");
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}
else
{
    //header("location:staff.php");
}


?>
</body>
</html>