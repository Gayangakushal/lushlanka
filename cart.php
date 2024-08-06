<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | LushLanka</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style2.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" />
    <link rel="icon" href="img\favicon.png" />
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include "header2.php"; ?>

            <div class="col-12 pt-2" style="background-color: dark;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><b>Home</b></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><b>Cart</b></li>
                    </ol>
                </nav>
            </div>

            <div class="col-12 border border-2 border-info rounded mb-3">
                <div class="row">

                    <div class="col-12">
                        <label class="form-label fs-1 fw-bold">Cart <i class="bi bi-cart4 fs-1 text-info"></i></label>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="offset-lg-2 col-12 col-lg-6 mb-3">
                                <input type="text" class="form-control" placeholder="Search in Cart..." />
                            </div>
                            <div class="col-12 col-lg-2 mb-3 d-grid">
                                <button class="btn btn-outline-info">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr />
                    </div>

                    <!-- Empty View -->

                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 emptycart"></div>
                            <div class="col-12 text-center mb-2">
                                <label class="form-label fs-1 fw-bold">
                                    Your cart is currently empty. </label>
                            </div>
                            <div class="offset-lg-4 col-12 col-lg-4 mb-4 d-grid">

                                <a href="index.php" class="btn btn-info text-black">
                                    <b>SHOP NOW</b>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Empty View -->

                    <!-- products -->
                    <div class="card mb-3 mx-0 col-12">
                        <div class="row g-0">
                            <div class="col-md-12 mt-3 mb-3">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fw-bold text-white-50 fs-5">Seller :</span>&nbsp;
                                        <span class="fw-bold text-white fs-5"></span>&nbsp;
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="col-md-4">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="<?php echo $product_data["description"]; ?>" title="Product Description">
                                    <img src="Resources\productimg\oppo_a95.png" class="img-fluid rounded-start" style="max-width: 200px;">
                                </span>
                            </div>

                            <div class="col-md-5">
                                <div class="card-body">

                                    <h3 class="card_title"></h3>
                                    <span class="fw-bold text-white-50">Colour : black</span> &nbsp; |

                                    &nbsp; <span class="fw-bold text-white-50">Condition : Used</span>
                                    <br>
                                    <span class="fw-bold text-white-50 fs-5">Price :</span>&nbsp;
                                    <span class="fw-bold text-white fs-5">Rs. 100000 .00</span>
                                    <br>
                                    <span class="fw-bold text-white-50 fs-5">Quantity :</span>&nbsp;
                                    <input type="number" class="mt-3 border border-2 border-secondary fs-4 fw-bold px-3 cardqtytext" value="30">
                                    <br><br>
                                    <span class="fw-bold text-white-50 fs-5">Delivery Fee :</span>&nbsp;
                                    <span class="fw-bold text-white fs-5">Rs.300.00</span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card-body d-grid">
                                    <a class="btn btn-outline-info mb-2">Buy Now</a>
                                    <a class="btn btn-outline-warning mb-2" onclick="deleteFromCart(<?php echo $cart_data['id']; ?>);">Remove</a>
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-12 mt-3 mb-3">
                                <div class="row">
                                    <div class="col-6 col-md-6">
                                        <span class="fw-bold fs-5 text-white-50">Requested Total <i class="bi bi-info-circle"></i></span>
                                    </div>
                                    <div class="col-6 col-md-6 text-end">
                                        <span class="fw-bold fs-5 text-white-50">Rs.105000.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- products -->
                    <!-- summary -->
                    <div class="col-12 col-lg-3">
                        <div class="row">

                            <div class="col-12">
                                <label class="form-label fs-3 fw-bold">Summary</label>
                            </div>
                            <div class="col-12">
                                <hr />
                            </div>
                            <div class="col-6 mb-3">
                                    <span class="fs-6 fw-bold">items</span>
                                </div>

                                <div class="col-6 text-end mb-3">
                                    <span class="fs-6 fw-bold">Rs.100.00</span>
                                </div>

                                <div class="col-6">
                                    <span class="fs-6 fw-bold">Shipping</span>
                                </div>

                                <div class="col-6 text-end">
                                    <span class="fs-6 fw-bold">Rs.100.00</span>
                                </div>

                                <div class="col-12 mt-3">
                                    <hr />
                                </div>

                                <div class="col-6 mt-2">
                                    <span class="fs-4 fw-bold">Total</span>
                                </div>

                                <div class="col-6 mt-2 text-end">
                                    <span class="fs-4 fw-bold">Rs.100.00</span>
                                </div>

                                <div class="col-12 mt-3 mb-3 d-grid">
                                    <button class="btn btn-info fs-5 fw-bold">CHECKOUT</button>
                                </div>

                        </div>
                    </div>
                    <!-- summary -->

                </div>
            </div>
           
            <?php include "footer.php"; ?>

        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="script.js"></script>

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
</body>

</html>