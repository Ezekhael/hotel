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
    <div class="col-2">
        <div class="row" style="padding: 60px" >
                <img width="100px" height="80px" src="hotel%20room.jpg">
        </div>
        <div class="row" style="padding: 60px" >
            <img width="100px" height="80px" src="hotel%20room.jpg">
        </div>
        <div class="row" style="padding: 60px" >
            <img width="100px" height="80px" src="hotel%20room.jpg">
        </div>
        <div class="row" style="padding: 60px" >
            <img width="100px" height="80px" src="hotel%20room.jpg">
        </div>

    </div>

        <div class="col-4" style="padding-left: 40px"; align="left">
            <div class="row" style="padding-top: 75px; padding-right: 400px">
                <div class="row">
                    <a href="rooms.php">
                        <button type="button" class="btn btn-primary">VIP Room</button>
                    </a>
                </div>
                <div class="row">
                    <div class="col">
                        <p>
                            1000 TRY/Day
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 120px; padding-right: 350px">
                <div class="row">
                    <a href="rooms.php">
                        <button type="button" class="btn btn-primary">Family Room</button>
                    </a>
                </div>
                <div class="row">
                    <div class="col">
                        <p>
                            700 TRY/Day
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 120px; padding-right: 350px">
                <div class="row">
                    <a href="rooms.php">
                        <button type="button" class="btn btn-primary">Double Room</button>
                    </a>
                </div>
                <div class="row">
                    <div class="col">
                        <p>
                            500 TRY/Day
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 120px; padding-right: 400px">
                <div class="row">
                    <a href="rooms.php">
                        <button type="button" class="btn btn-primary">Single Room</button>
                    </a>
                </div>
                <div class="row">
                    <div class="col">
                        <p>
                            300 TRY/Day
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3" align="center">
            <div class="row" style="padding-top:120px;padding-right: 230px">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Room Type</option>
                    <option value="1">VIP Room</option>
                    <option value="2">Family Room</option>
                    <option value="3">Double Room</option>
                    <option value="4">Single Room</option>
                </select>
            </div>
            <div class="row" style="padding-right:230px;padding-top: 120px">
                <label for="dateInp1" class="form-label">Check-in Date</label>
                <input type="date" class="form-control" id="dateInp1">
            </div>
        </div>
        <div class="col-3" align="center">
            <div class="row" style="padding-top:120px;padding-right: 230px">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Number of Person</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                </select>
            </div>
            <div class="row" style="padding-right:230px;padding-top: 120px">
                <label for="dateInp2" class="form-label">Check-out Date</label>
                <input type="date" class="form-control" id="dateInp2">
            </div>
            <div class="row" style="padding-top:220px;padding-right:95px">
                <a href="search.php">
                    <button type="button" class="btn btn-dark ">Book Now</button>
                </a>
            </div>
        </div>
    </div>

</div>
</body>
</html>