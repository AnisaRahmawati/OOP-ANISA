<?php

require_once 'App/init.php';

$produk1 = new Novel("Sheiland", "Bayu Permana", "Media Kita", 85000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann",  "Sony Computer", 250000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1);
$cetakProduk->tambahProduk( $produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();