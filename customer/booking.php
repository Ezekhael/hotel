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
<?php
$name = $surname = $email = $phone = "";
if(isset($_SESSION['email'])) {
    $name = $_SESSION['name'];
    $surname = $_SESSION['surname'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
}
?>
<div style="padding-left: 30px">
    <div style="padding-top: 25px">
    <h3>
        Customer Informations
    </h3>
    </div>
    <div class="row" style="padding-right: 800px">
    <div class="col-4">
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <div class="mb-3">
                <label  class="form-label">Name</label>
                <input type="text" class="form-control" value="<?php echo $name?>">
            </div>
        </div>
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <div class="mb-3">
                <label  class="form-label">Surname</label>
                <input type="text" class="form-control" value="<?php echo $surname?>">
            </div>
        </div>
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <div class="mb-3">
                <label  class="form-label">Name on the Card</label>
                <input type="text" class="form-control" placeholder="Bahadır Enes AY">
            </div>
        </div>
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <div class="mb-3">
                <label  class="form-label">Date</label>
                <input type="month" class="form-control" placeholder="xx/xx">
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <div class="mb-3">
                <label  class="form-label">Phone Number</label>
                <input type="phone" class="form-control" value="<?php echo $phone?>">
            </div>
        </div>
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <div class="mb-3">
                <label  class="form-label">E-mail</label>
                <input type="email" class="form-control" value="<?php echo $email?>">
            </div>
        </div>
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <div class="mb-3">
                <label  class="form-label">Card Number</label>
                <input type="number" class="form-control" placeholder="1234567890">
            </div>
        </div>
        <div class="row" style="padding-right: 100px;padding-top: 30px">
            <div class="mb-3">
                <label  class="form-label">CVC</label>
                <input type="number" class="form-control" placeholder="123">
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class = "row">
            <div class="col-5">
               <img src="profile.png" width="120px" height="100px">
            </div>
            <div class="col-7">
                <p>
                    This room has; city and sea view,
                    fhd tv and premium satellite channels,
                    double bed, single bed, free wifi, shower,
                    bathroom telephone, premium room services,
                    mini bar, balcony, terrace
                </p>
            </div>
        </div>
        <div class="row">
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
                    <td>2021-06-15</td>
                </tr>
                <tr>
                    <th scope="row">Check-out Date</th>
                    <td>2021-06-20</td>
                </tr>
                <tr>
                    <th scope="row">Room Type</th>
                    <td colspan="2">VIP Room</td>
                </tr>
                <tr>
                    <th scope="row">Price</th>
                    <td colspan="2">5000 TRY</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Book Now
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
                            Do you want to continue?
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
</body>
</html>