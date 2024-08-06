<?php

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Laptop</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" href="resource/logo.svg">
    <link rel="stylesheet" href="main.css">

</head>

<body>
    <!-- Product Card Inside Header -->
    <?php include "header2.php" ?>
    <hr />
    <div class="mt-4 ms-3">
        <a href="javascript:history.back()" class="btn btn-info back-link ">
            <i class="bi bi-arrow-left"></i> <b>Back</b>
        </a>
    </div>
    
    <div class="container mt-4">
    <div class="card mb-4 shadow-sm card-hover" style="width: 14rem;">
       <a href="singleproductview.php?rs=<?php echo $d["stock_id"] ?>"><img src="<?php echo $d["path"]; ?>" class="card-img-top" alt="Laptop Image"></a>
        <div class="card-body text-center p-2">
            <h5 class="card-title" style="font-size: 1rem;"><?php echo $d["name"]; ?></h5>
            <p class="card-text" style="font-size: 0.875rem;"><?php echo $d["description"]; ?></p>
            <div class="d-flex justify-content-center align-items-center">
                <h5 class="mb-0" style="font-size: 1rem;"><?php echo $d["price"]; ?></h5>
            </div>
            <div class="d-flex justify-content-center mt-2">
                <button type="button" class="btn btn-primary btn-sm" style="font-size: 0.875rem;">Add to Cart</button>
                <button type="button" class="btn btn-outline-secondary btn-sm ms-2" style="font-size: 0.875rem;">
                    <i class="bi bi-heart"></i> Wishlist
                </button>
            </div>
        </div>
    </div>
</div>

<?php
}
?>

    <!-- End Product Card Inside Header -->

    <hr />

    <!-- Additional content here -->



    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    <script src="script2.js"></script>

</body>

</html>