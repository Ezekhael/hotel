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
    <div style="padding-top: 25px">
        <h3 style="text-align:left;">
            Gallery
        </h3>
    </div>
<div class="row">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-right: 400px">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-body">
                <img height="600px" width="900px" src="hotel%20room.jpg">
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <img height="250px" width="50px" src="hotel%20room.jpg" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div>
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <img height="250px" width="50px" src="hotel%20room.jpg" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div>
        <div class="row" style="padding-right: 100px;padding-top: 30px">
             <img height="250px" width="50px" src="hotel%20room.jpg" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div>
    </div>
    <div class="col-4">
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <img height="250px" width="50px" src="hotel%20room.jpg" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div>
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <img height="250px" width="50px" src="hotel%20room.jpg" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div>
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <img height="250px" width="50px" src="hotel%20room.jpg" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div>
    </div>
    <div class="col-4">
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <img height="250px" width="50px" src="hotel%20room.jpg" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div>
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <img height="250px" width="50px" src="hotel%20room.jpg" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div>
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <img height="250px" width="50px" src="hotel%20room.jpg" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div>
    </div>
</div>
</div>
</body>
</html>