<?php 

require_once 'App/init.php';

// $produk1 = new Komik("Putra Si Muda Berkarya", "Sufi Pramesty", "King Publishing", 70000, 100);
// $produk2 = new Game("Technology Now", "Point Cars", "Sports Eys", 460000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser;


?>