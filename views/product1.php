<?php 
require '../functions/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kami</title>
    <link rel="stylesheet" href="../src/css/product1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Import Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    </style>
</head>
<body>
    <div class="container">
        <!-- NavBar -->
        <div class="navbar">
            <div class="navbar-wrapper">
                <div class="navbar-content">
                    <div class="navbar-brand">
                        <div class="firstname">Toko</div>
                        <div class="lastname">Baju</div>
                    </div>
                    <div class="navbar-service">
                        <ul class="list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <ul class="product-list">
                <?php foreach($getProduk as $gp) : ?>
                <li class="product-wrapper">
                    <div class="image">
                        <img src="<?= $gp["gambar"] ?>" alt="product unavailable">
                    </div>
                    <div class="info-product">
                        <div class="product-name">
                            <?= $gp["baju"]; ?>
                        </div>
                        <div class="product-price">
                            <?= $gp["harga"]; ?>
                        </div>
                        <div class="product-button">
                            <ul class="button-wrapper">
                                <li><a href="cart.php?id=<?= $gp["id"]; ?>"><i class="fa-solid fa-cart-shopping"></i>Add to Cart</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</body>
</html>