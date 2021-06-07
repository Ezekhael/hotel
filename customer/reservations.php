<?php
session_start();
include("server.php");

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
    <?php
    include("header.php");
    ?>
</header>
<div style="padding-left: 30px">

</div>
<div style="padding-left: 30px">
    <div style="padding-top: 70px">
        <h3 style="text-align:center;">
            Reservations
        </h3>
    </div>
    <div class="row">
        <div class="col-6" style="width:840px;padding-right: 650px">
            <div class="list-group">
                <a href="accountdetails.php" class="list-group-item list-group-item-action">Account Details</a>
                <a href="change%20password.php" class="list-group-item list-group-item-action">Change Password</a>
                <a href="reservations.php" class="list-group-item list-group-item-action active" aria-current="true">
                    Reservations
                </a>
                <a href="review.php" class="list-group-item list-group-item-action">Reviews</a>
            </div>
        </div>
        <div class="col-6" style="padding-right: 500px">
            <div class="col"  style="border: 1px solid;overflow:auto;overflow-x:hidden; height:500px;padding: 10px">
                <div class = "row">
                    <div class="col-5">
                        <img src="hotel%20room.jpg" width="160px" height="200px">
                    </div>
                    <div class="col-7">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Details</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Check-in Date</th>
                                <td>20.04.2021</td>
                            </tr>
                            <tr>
                                <th scope="row">Check-out Date</th>
                                <td>27.04.2021</td>
                            </tr>
                            <tr>
                                <th scope="row">Room Type</th>
                                <td colspan="2">VIP Room</td>
                            </tr>
                            <tr>
                                <th scope="row">Price</th>
                                <td colspan="2">1000 TRY</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Button trigger modal -->
                    <div class="row">
                    <div class="col-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Extend
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Warning!</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <label for="dateInp2" class="form-label">New Check-out Date</label>
                                    <input type="date" class="form-control" id="dateInp2">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <a class="btn btn-primary" href="reservations.php" role="button">Extend </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                        <div class="col">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Cancel
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Warning!</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Do you want to cancel your reservation?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a class="btn btn-primary" href="reservations.php" role="button">Continue</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>