<?php

require "db.php";

$sql ="SELECT * FROM product";
$all_product = $conn->query($sql);





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-card {
            transition: transform 0.3s ease-in-out;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-img {
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
        }
        .product-card:hover .overlay {
            opacity: 1;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<?php

while($row =mysqli_fetch_assoc($all_product)){

?>




    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Featured Products</h2>
            <a href="#" class="btn btn-link text-decoration-none">View All Products &rarr;</a>
        </div>
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border-0 product-card position-relative">
                    <img src="<?php echo $row["product_img"]; ?>" alt="Product Image" class="product-img card-img-top">
                    <div class="overlay">Add To Cart &rarr;</div>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $row["product_name"]; ?></h5>
                        <p class="text-primary fs-5"><?php echo $row["product_price"]; ?></p>
                    </div>
                </div>
            </div>
<?php

}
?>


            <!-- Product 2 -->
            <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border-0 product-card position-relative">
                    <img src="https://via.placeholder.com/250x350" alt="Product Image" class="product-img card-img-top">
                    <div class="overlay">Add To Cart &rarr;</div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Volunteer Half Blue</h5>
                        <p class="text-primary fs-5">Rs.1000</p>
                    </div>
                </div>
            </div> -->
            <!-- Product 3 -->
            <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border-0 product-card position-relative">
                    <img src="https://via.placeholder.com/250x350" alt="Product Image" class="product-img card-img-top">
                    <div class="overlay">Add To Cart &rarr;</div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Double Yellow Shirt</h5>
                        <p class="text-primary fs-5">Rs.2400</p>
                    </div>
                </div>
            </div> -->
            <!-- Product 4 -->
            <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border-0 product-card position-relative">
                    <img src="https://via.placeholder.com/250x350" alt="Product Image" class="product-img card-img-top">
                    <div class="overlay">Add To Cart &rarr;</div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Long Belly Grey Pant</h5>
                        <p class="text-primary fs-5">Rs.1300</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
