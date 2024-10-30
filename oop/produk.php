<?php 

// Jual Produk
// Komik
// Game
class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga =0;    
}

$produk1 = new Produk();
$produk1 -> judul = "Naruto";
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Uncharted";
$produk2->tambahProperty = "hahaha";
var_dump($produk2);
