<?php 
require '../functions/functions.php';

$id = $_GET["id"];

$gp = query("SELECT * FROM product WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Menu</title>
    <link rel="stylesheet" href="../src/css/cart.css">
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
                            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart">
            <div class="cart-wrapper">
                <div class="cart-structur">
                    <div class="cart-image">
                        <img src="<?= $gp["gambar"]; ?>" alt="cant load">
                    </div>
                    <form action="" method="post" class="cart-stats">
                        <div class="buyer">
                            <input type="text" placeholder="Nama Pembeli">
                        </div>
                        <div class="date">
                            <input type="text" readonly value="<?= date('l, d-M-Y'); ?>">
                        </div>
                        <div class="name">
                            <input type="text" readonly value="<?= $gp["baju"]; ?>">
                        </div>
                        <div class="price">
                            <input type="text" id="harga" name="harga" readonly value="<?= $gp["harga"]; ?>">                           
                        </div>

                        <div class="total">
                            <input type="number" id="total" name="total" value="1" min="1" max="1000" placeholder="total barang">
                        </div>
                        <div class="row-button">
                            <div class="hitung">
                                <button type="button" id="hitung" name="hitung" onclick="kali()">Hitung Total Harga</button>
                            </div>
                            <div class="simpan">
                                <button type="button" id="hitung" name="hitung">Hitung Total Harga</button>
                            </div>
                        </div>    
                        <div class="totalHarga">
                            <input type="number" id="totalHarga" name="TotalHarga" placeholder="Total Harga">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../src/javascripts/cart.js"></script>
</body>
</html>