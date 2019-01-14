<?php

Class Produk {
           public $judul,
                  $penulis,
                  $penerbit,
                  $harga,
                  $jmlHalaman,
                  $waktuMain;

public function __construct ( $judul = "judul", $penulis = " penulis", $penerbit ="penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ) {
$this->judul = $judul;
$this->penulis = $penulis;
$this->penerbit = $penerbit;
$this->harga = $harga;
$this->jmlHalaman = $jmlHalaman;
$this->waktuMain = $waktuMain;
}

public function getLabel() {
            return " $this->penulis, $this->penerbit";
      }


public function getInfoProduk(){
$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

return $str;
	}
}


class Novel extends Produk {
	public function getInfoProduk() {
		$str = "Novel : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
		return $str;
	}
}


class CetakInfoProduk {
public function cetak( Produk $produk){
$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
return $str;
}
}

$produk1 = new Produk("Sheiland", "Bayu Permana", " Media Kita", 85000, 100, 0, "Novel");
$produk2 = new Produk("Uncharted", "Neil Druckmann",  "Sony Computer", 250000, 0, 50, " Game");

echo $produk1->getLabel();
echo "<br>";
echo $produk2->getLabel();

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);







