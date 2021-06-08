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
<div style="padding: 20px;border: 1px solid;margin: 21px">
    <div class="row">
        <div class="col-4">
            <div class="row" style="padding-right:300px;padding-top: 120px;margin-left: 60px">
                <label for="dateInp1" class="form-label">Check-in Date</label>
                <input type="date" class="form-control" id="dateInp1" placeholder="15.06.2021">
            </div>
            <div class="row" style="padding: 60px" >
                <p style="font-size:24px">VIP Room</p>
                <img width="100px" height="250px" src="hotel%20room.jpg">
            </div>
            <div class="row" style="padding: 60px" >
                <p style="font-size:24px">Family Room</p>
                <img width="100px" height="250px" src="hotel%20room.jpg">
            </div>
        </div>
        <div class="col-4">
        <div class="row" style="padding-right:370px;padding-top: 120px">
                <label for="dateInp2" class="form-label">Check-out Date</label>
                <input type="date" class="form-control" id="dateInp2" placeholder="20.06.2021">
            </div>
            <div class="row" style="padding-top:220px;padding-right:95px;">
                <p style="font-size:20px">1000TRY/Day</p>
                <a href="booking.php">
                    <button type="button" class="btn btn-dark ">Book Now</button>
                </a>
            </div>
            <div class="row" style="padding-top:220px;padding-right:95px;margin-top:130px">
                <p style="font-size:20px">700TRY/Day</p>
                <a href="booking.php">
                    <button type="button" class="btn btn-dark ">Book Now</button>
                </a>
            </div>

        </div>
        <div class="col-4">
            <div class="row" style="padding-top:145px">

                <a href="search.php">
                    <button type="button" class="btn btn-primary ">Search</button>
                </a>
            </div>
        </div>


    </div>

</div>
</body>
</html>