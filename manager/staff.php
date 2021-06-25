<?php
session_start();
include("server.php");
?>
<?php
if(isset($_POST['submit'])){

    if(!empty($_POST['staffname']) && !empty($_POST['staffsurname']) && !empty($_POST['staffphone']) && !empty($_POST['salary']) && !empty($_POST['position'])){

        $staffname = $_POST['staffname'];
        $staffsurname = $_POST['staffsurname'];
        $staffphone = $_POST['staffphone'];
        $salary = $_POST['salary'];
        $position = $_POST['position'];

        $query = "INSERT INTO staff(staffname,staffsurname,staffphone,salary,position) values('$staffname','$staffsurname','$staffphone','$salary','$position')";

        $run = mysqli_query($db,$query) or die(mysqli_error());

        if($run){
            echo "Staff created successfully";
        }
        else{
            echo "Staff could not be created successfully";
        }
    }
    else{
        echo "All fields required";
    }
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
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Hotel California</a>
            <ul class="nav justify-content-end">

                <li class="nav-item">
                    <a class="nav-link" href="profile.html"> <img src="profile.png" width="30px" height="30px"></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="container-flex">
    <!--This is for content-->
    <div class="row">
        <div class="col-2">
            <div class="sidenav">
                <script src="subMenuOpening.js"></script>
                <div class="d-flex" id="wrapper">
                    <link rel="stylesheet" href="nobullets.css">

                    <!-- Sidebar -->
                    <div class="bg-light border-right" id="sidebar-wrapper">


                        <div class="sidebar-heading"  align="center">
                            <img src="profile.png" width="50px" height="50px">

                            <h5 style="padding-top: 10px"><strong>Enes AY</strong></h5>
                        </div>
                        <li class="list-group " >

                            <ul class="no-bullets">
                                <li class="nav-item" >
                                    <a href="dashboard.php" class="list-group-item list-group-item-action bg-light" style="color:black">
                                        <i class="bi bi-bar-chart"></i>    Dashboard</a>
                                </li>

                                <li class="nav-item">
                                    <a href="staff.php" class="list-group-item list-group-item-action bg-light active" style="color:black">
                                        <i class="bi bi-person"></i>    Staff</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="list-group-item list-group-item-action bg-light" style="color:black">
                                        <i class="bi bi-bar-chart-steps"></i>  <span>Hotel Management</span>

                                        <span style="padding-left: 57px">
                                            <i id="icon" class="bi bi-chevron-double-right" ></i>
                                        </span>
                                    </a>

                                    <ul class="sub-menu" id="subMenu" style="display: block">
                                        <li class="nav-item">
                                            <a href="room.php" class="list-group-item list-group-item-action bg-light" style="color:black">
                                                <i class="bi bi-house-fill"></i>    Rooms</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="customers.php" class="list-group-item list-group-item-action bg-light" style="color:black">
                                                <i class="bi bi-person"></i>    Customers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="reservations.php" class="list-group-item list-group-item-action bg-light" style="color:black" style="color:black">
                                                <i class="bi bi-receipt"></i>    Reservations</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="reports.php" class="list-group-item list-group-item-action bg-light" style="color:black">
                                        <i class="bi bi-book"></i>    Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a href="comments.php" class="list-group-item list-group-item-action bg-light" style="color:black">
                                        <i class="bi bi-chat-left-text"></i>    Comments</a>
                                </li>
                                <li class="nav-item">
                                    <a href="messages.php" class="list-group-item list-group-item-action bg-light" style="color:black">
                                        <i class="bi bi-chat-left-text"></i>    Messages</a>
                                </li>

                            </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-9" style="border: 1px solid;padding-top: 10px">
            <div class="row">
                <div class="col-2" style="padding-top: 30px; margin-left: 100px" align="center">
                </div>
                <div class="col-2" style="border: 1px solid;padding-top: 30px; margin-left: 200px" align="center">
                    <img src="house.png" height="40px" width="40px">
                    <h4>
                        Total Staff
                    </h4>
                    <p>
                        <?php

                        $sql="SELECT staffid FROM staff";

                        if ($num=mysqli_query($db,$sql))
                        {
                            // Return the number of rows in result set
                            $rowcount=mysqli_num_rows($num);
                            printf("There is %d staff.\n",$rowcount);
                            // Free result set
                            mysqli_free_result($num);
                        }
                        ?>
                    </p>
                </div>
                <div class="col-2" style="padding-top: 30px; margin-left: 100px" align="center">
                </div>
                <div class="col-2" style="padding-top: 30px; margin-left: 100px" align="center">
                </div>
            </div>
            <p align="left" style="padding-top:10px">Add New Staff</p>
            <div class="row" style="padding-right: 1400px">

                <!-- Button trigger modal -->
                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-plus-circle"></i>
                </a>

                <!-- Modal -->
                <form action="staff.php" method="POST">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Staff</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label style="padding-top: 10px" class="form-label">Enter Staff Name</label>
                                <input type="text" name="staffname" class="form-control" placeholder="Name">

                                <label  class="form-label">Enter Staff Surname</label>
                                <input type="text" name="staffsurname" class="form-control" placeholder="Surname">

                                <label style="padding-top: 10px" class="form-label">Enter Staff Phone Number</label>
                                <input type="text" name="staffphone" class="form-control" placeholder="5555555555">

                                <label style="padding-top: 10px" class="form-label">Enter Staff Salary</label>
                                <input type="text" name="salary" class="form-control" placeholder="1000">

                                <label  class="form-label">Enter Staff Position</label>
                                <input type="text" name="position" class="form-control" placeholder="Position">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary" >Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="row" style="padding-top: 30px;overflow:auto;overflow-x:hidden;max-height: 300px">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Staff ID</th>
                        <th scope="col">Staff Name</th>
                        <th scope="col">Staff Surname</th>
                        <th scope="col">Staff Phone Number</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Position</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <?php
                    //for view
                    $get = " SELECT * FROM staff ";
                    $result = mysqli_query($db,$get);

                    while($row=mysqli_fetch_assoc($result))
                    {
                        $staffid = $row['staffid'];
                        $staffname = $row['staffname'];
                        $staffsurname = $row['staffsurname'];
                        $staffphone = $row['staffphone'];
                        $salary = $row['salary'];
                        $position = $row['position'];

                        ?>
                        <tr>
                            <td><?php echo $staffid ?></td>
                            <td><?php echo $staffname ?></td>
                            <td><?php echo $staffsurname ?></td>
                            <td><?php echo $staffphone ?></td>
                            <td><?php echo $salary ?></td>
                            <td><?php echo $position ?></td>
                            <td><a href="edit.php?GetID=<?php echo $staffid ?>">Edit</a></td>
                            <td><a href="delete.php?Del=<?php echo $staffid ?>">Delete</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>

    </div>
</div>
</div>



</body>
</html>
