<?php

echo "Animal <br>";
echo " <hr>";

class Kucing {
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$kucing = new Kucing;
$kucing->nama = "Chiki";
$kucing->jumlah_kaki = "4";
$kucing->bisa_terbang = "Tidak bisa";
$kucing->suara = "Meeooong";


echo "Kucing <br>";
echo "Yang Bernama : ".$kucing->nama;
echo "<br>";
echo "Jumlah Kaki Sebanyak : ".$kucing->jumlah_kaki;
echo "<br>"; 
echo "Apakah Bisa Terbang ? ".$kucing->bisa_terbang;
echo "<br>"; 
echo "Suaranya : ".$kucing->suara;
echo "<br>";  
echo "<hr>";