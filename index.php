<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style3.css" />
    <link rel="stylesheet" href="style2.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" />
    <link rel="icon" href="img/favicon.png" />
</head>

<body onload="loadProduct(0);">
    <?php include "header.php"; ?>

    <!-- carousel -->
    <div class="container">
        <div class="text-center mt-4">
            <h2 class="mb-2">LATEST LAPTOPS IN SRI LANKA</h2>
            <div class="text-box">
                PRICE NEGOTIABLE | මිල ගණන් සාකච්ඡා කල හැක
            </div>
        </div>
    </div>

    <div class="offset-lg-1 col-12 col-lg-10">
        <div class="row">
            <div class="col-12">
                <div class="row g-2 d-flex justify-content-center align-items-center h-100 text-info">
                    <hr class="mt-5" />
                    <h3 class="">Shop By Category</h3>
                    <hr class="" />

                    <!-- First row of cards -->
                    <div class="card animated-card col-lg-1 mt-5 mb-1 m-1" style="width: 15rem;" onclick="window.location='laptop.php'">
                        <img src="img/categories/1 (1).jpg" class="card-img-top" alt="Laptop Image" />
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold fs-6 text-transition"><b>Laptop</b></h3>
                        </div>
                    </div>
                    <div class="card animated-card col-lg-1 mt-5 mb-1 m-1" style="width: 14rem;" onclick="window.location='tire.php'">
                        <img src="img/2.jpg" class="card-img-top" alt="Laptop Image" />
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold fs-6 text-transition"><b>ALL Laptop Accessories</b></h3>
                        </div>
                    </div>
                    <div class="card animated-card col-lg-1 mt-5 mb-1 m-1" style="width: 14rem;" onclick="window.location='tire.php'">
                        <img src="img/3.jpg" class="card-img-top" alt="Laptop Image" />
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold fs-6 text-transition"><b>ALL Desktop & Accessories</b></h3>
                        </div>
                    </div>
                    <div class="card animated-card col-lg-1 mt-5 mb-1 m-1" style="width: 14rem;" onclick="window.location='tire.php'">
                        <img src="img/4.jpg" class="card-img-top" alt="Laptop Image" />
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold fs-6 text-transition"><b>ALL Workstation & Gaming Desktop</b></h3>
                        </div>
                    </div>
                    <div class="card animated-card col-lg-1 mt-5 mb-1 m-1" style="width: 14rem;" onclick="window.location='tire.php'">
                        <img src="img/5.jpg" class="card-img-top" alt="Laptop Image" />
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold fs-6 text-transition"><b>ALL Monitors, TV , Mic & Subwoofer</b></h3>
                        </div>
                    </div>

                    <!-- Second row of cards (same as the first row) -->
                    <div class="card animated-card col-lg-1 mt-5 mb-1 m-1" style="width: 15rem;" onclick="window.location='laptop.php'">
                        <img src="img/6.jpg" class="card-img-top" alt="Laptop Image" />
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold fs-6 text-transition"><b>ALL Printers</b></h3>
                        </div>
                    </div>
                    <div class="card animated-card col-lg-1 mt-5 mb-1 m-1" style="width: 14rem;" onclick="window.location='tire.php'">
                        <img src="img/7.jpg" class="card-img-top" alt="Laptop Image" />
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold fs-6 text-transition"><b>ALL Toners & Cartridge</b></h3>
                        </div>
                    </div>
                    <div class="card animated-card col-lg-1 mt-5 mb-1 m-1" style="width: 14rem;" onclick="window.location='tire.php'">
                        <img src="img/8.jpg" class="card-img-top" alt="Laptop Image" />
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold fs-6 text-transition"><b>ALL UPS & Network Items</b></h3>
                        </div>
                    </div>
                    <div class="card animated-card col-lg-1 mt-5 mb-1 m-1" style="width: 14rem;" onclick="window.location='tire.php'">
                        <img src="img/9.jpg" class="card-img-top" alt="Laptop Image" />
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold fs-6 text-transition"><b>ALL aCTION cAMERA,</b></h3>
                        </div>
                    </div>
                    <div class="card animated-card col-lg-1 mt-5 mb-1 m-1" style="width: 15rem;" onclick="window.location='tire.php'">
                        <img src="img/10.jpg" class="card-img-top" alt="Laptop Image" />
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold fs-6 text-transition"><b>ALL GAMING CHAIR</b></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center p-3">
            &copy; 2024 NovoNex Software Solutions || All Rights Reserved
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7HbiX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="bootstrap/js/bootstrap.bundle.js"></script>
        <script src="script.js"></script>
    </body>
</html>
