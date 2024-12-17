

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .profile-container {
            margin-top: 50px;
        }
        .profile-card {
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .profile-card img {
            border: 3px solid #007bff;
        }
        .profile-card .card-body {
            padding: 30px;
        }
        .info-row {
            margin-bottom: 15px;
        }
        .info-row p {
            margin-bottom: 0;
        }
        .info-label {
            font-weight: bold;
            font-size: 15px;
        }
        .btn-custom {
            padding: 10px 20px;
        }
        @media (max-width: 768px) {
            .profile-container {
                margin-top: 30px;
            }
            .col-lg-6, .col-lg-8 {
                max-width: 100%;
                flex: 0 0 100%;
            }
        }
        .leader{
            height: 100vh;
            margin-top: 170px;
        }
        .text{
            font-size: 15px ;
        }
    </style>
</head>
<body>

<?php include("nav.php"); ?>
<div class="leader">


<div class="container profile-container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card profile-card mb-4">
                <div class="card-body text-center">
                    <img src="images/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-4"> <?php
            echo $fname;
            ?></h5>
                    <p class="text mb-1">Full Stack Developer</p>
                    <p class="text mb-4"> <?php
            echo $address;
            ?></p>
                    <div class="d-flex justify-content-center mb-4">
                        <button type="button" class="btn btn-primary btn-custom">Follow</button>
                        <button type="button" class="btn btn-outline-primary btn-custom ms-2">Message</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card profile-card mb-4">
                <div class="card-body">
                    <div class="row info-row">
                        <div class="col-sm-3 info-label">Full Name</div>
                        <div class="col-sm-9">
                            <p class="text"> <?php
            echo $fname;
            ?></p>
                        </div>
                    </div>
                    <div class="row info-row">
                        <div class="col-sm-3 info-label">Email</div>
                        <div class="col-sm-9">
                            <p class="text"> <?php
            echo $email;
            ?></p>
                        </div>
                    </div>
                    <div class="row info-row">
                        <div class="col-sm-3 info-label">Phone</div>
                        <div class="col-sm-9">
                            <p class="text"> <?php
            echo $phone;
            ?></p>
                        </div>
                    </div>
                    <div class="row info-row">
                        <div class="col-sm-3 info-label">Mobile</div>
                        <div class="col-sm-9">
                            <p class="text"> <?php
            echo $phone;
            ?></p>
                        </div>
                    </div>
                    <div class="row info-row">
                        <div class="col-sm-3 info-label">Address</div>
                        <div class="col-sm-9">
                            <p class="text"> <?php
            echo $address;
            ?></p>
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
