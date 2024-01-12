<?php 

class Produk {
  public $judul = "judul ", 
         $penulis = "penulis", 
         $penerbit = "penerbit", 
         $harga = 0;
  
  public function sayHello() {
    return "Hello World";
  }

}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// $produk1->penulis = "Masashi Kishimoto";
// $produk1->penerbit = "Shonen Jump";
// $produk1->harga = 30000;

// echo "Komik : $produk1->judul, $produk1->penulis";


$produk2 = new Produk();
$produk2->judul = "Boboiboy";
$produk2->penerbit = "Monsta";
echo "Komik : $produk2->judul, $produk2->penerbit";


echo "<br>";

$produk3 = new Produk();
echo $produk3->sayHello();





?>


<!-- public = data/property -->
<!-- function = -->




<!-- property = variable yang ada di dalam object === data -->
<!-- method = function yang ada di dalam object === perilaku -->


<!-- Contoh kasus adalah MOBIL === object -->

<!-- property = nama, merk, warna, kecepatan, jumlah kursi -->
<!-- method = tambahkecepatan, kurangi kecepatan, ganti transmisi, belokkiri, belokkanan -->