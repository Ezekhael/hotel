<?php
session_start();
include("server.php");
?>
<?php
if(isset($_POST['submit'])){

    if(!empty($_POST['startdate']) && !empty($_POST['enddate'])){

        $startdate = $_POST['startdate'];
        $enddate = $_POST['enddate'];
        $revenue = $db->query("SELECT SUM(totprice) AS totprice FROM reservation WHERE checkin BETWEEN '$startdate' and '$enddate'")->fetch_assoc()["totprice"];
        $expense = $db->query("SELECT SUM(salary) * (TIMESTAMPDIFF(MONTH, '$startdate','$enddate') + 1) AS salary FROM staff")->fetch_assoc()["salary"];
        $query = "INSERT INTO report(startdate,enddate,revenue,expense) values('$startdate','$enddate','$revenue','$expense')";

        $run = $db->query($query);

        if($run){

            header("location:reports.php");

        }
        else{
            echo "Report could not be created successfully";
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
                                    <a href="staff.php" class="list-group-item list-group-item-action bg-light" style="color:black">
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
                                    <a href="reports.php" class="list-group-item list-group-item-action bg-light active" style="color:black">
                                        <i class="bi bi-book"></i>    Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a href="comments.php" class="list-group-item list-group-item-action bg-light" style="color:black">
                                        <i class="bi bi-chat-left-text"></i>    Comments</a>
                                </li>

                            </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-9" style="border: 1px solid">
            <div class="row" style="padding-top: 30px">
                <div class="col-2" style="border: 1px solid;padding-top: 30px; margin-left: 50px" align="center">
                    <img src="book.png" height="40px" width="40px">
                    <h4>
                        Total Reports
                    </h4>
                    <p>
                        <?php

                        $sql="SELECT * FROM report";

                        if ($num=mysqli_query($db,$sql))
                        {
                            // Return the number of rows in result set
                            $rowcount=mysqli_num_rows($num);
                            printf(" %d \n",$rowcount);
                            // Free result set
                            mysqli_free_result($num);
                        }
                        ?>
                    </p>
                </div>
            </div>
            <p align="left" style="padding-top:10px"> Create New Report </p>
            <div class="row" style="padding-right: 1400px">

                <!-- Button trigger modal -->
                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-calendar-plus"></i>
                </a>

                <!-- Modal -->

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create New Report</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="reports.php" method="POST">
                            <div class="modal-body">
                                <label for="dateInp2" class="form-label">Starting Date</label>
                                <input type="date" name="startdate" class="form-control" id="dateInp1">
                                <label for="dateInp2" class="form-label">Ending Date</label>
                                <input type="date" name="enddate" class="form-control" id="dateInp2">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" name="submit" class="btn btn-primary" value="Create Report">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row" style="padding-top: 30px;overflow:auto;overflow-x:hidden;max-height: 300px">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Revenue</th>
                        <th scope="col">Expense</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <?php
                    //for view
                    $get = " SELECT * FROM report ";
                    $result = mysqli_query($db,$get);

                    while($row=mysqli_fetch_assoc($result))
                    {
                        $startdate = $row['startdate'];
                        $enddate = $row['enddate'];
                        $revenue = $row['revenue'];
                        $expense = $row['expense'];

                        ?>
                        <tr>
                            <td><?php echo $startdate ?></td>
                            <td><?php echo $enddate ?></td>
                            <td><?php echo $revenue ?></td>
                            <td><?php echo $expense ?></td>
                            <td><a href="deletereport.php?Del=<?php echo $startdate ?>&enddate=<?php echo $enddate?>">Delete</a></td>
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