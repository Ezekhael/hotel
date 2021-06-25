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
                                    <a href="dashboard.php" class="list-group-item list-group-item-action bg-light active" style="color:black">
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
        <div class="col-2" style="border: 1px solid;padding-top: 100px;height:300px" align="center">
            <img src="dollar.png" width="50px" height="50px">
            <h4>
                Revenue
            </h4>
            <p>
                6400
            </p>
        </div>
        <div class="col-2" style="border: 1px solid;padding-top: 100px; margin-left: 20px;height:300px" align="center">
            <img src="dollar.png" width="50px" height="50px">
            <h4>
                Expense
            </h4>
            <p>
                2000
            </p>
        </div>
        <div class="col-2" style="border: 1px solid;padding-top: 100px; margin-left: 20px;height:300px" align="center">
            <img src="customer.png" width="50px" height="50px">
            <h4>
                Customers
            </h4>
            <p>
                <?php

                $sql="SELECT email FROM user";

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
        <div class="col-2" style="border: 1px solid;padding-top: 100px; margin-left: 20px;height:300px" align="center">
            <img src="house.png" width="50px" height="50px">
            <h4>
                Rooms
            </h4>
            <p>
                <?php

                $sql="SELECT doornumber FROM room";

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
</div>



</body>
</html>