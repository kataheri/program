<?php

class produk {
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
    
    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }    
}

class cetakinfoproduk {
    public function cetak($produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp {$produk->harga})";
        return $str;
    }
}

$produk1 = new produk("Phantasy Star Online 2", "SEGA", "SEGA", 0);

$infoproduk = new cetakinfoproduk();
echo $infoproduk->cetak($produk1);