<?php 
$conn = mysqli_connect("localhost", "root", "", "tokobaju");

if(!$conn) {
    die('Database Gagal');
}

// function query
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

// ambil data dari table product
$getProduk = mysqli_query($conn, "SELECT * FROM product");

?>