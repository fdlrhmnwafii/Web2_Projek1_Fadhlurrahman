<?php
class Mahasiswa{
    public $nama;
    public $alamat;
    public $jurusan;

    function CekNama (){
        echo "Nama saya adalah : " . $this->nama; //panggil variabel di class
    }
    function __construct($datanama, $dataalamat, $datajurusan){
        $this->nama = $datanama;
        $this->alamat = $dataalamat;
        $this->jurusan = $datajurusan;

    }
} 

//Buat objek
$mahasiswa1 = new Mahasiswa("Fadhlurrahman","Pondok Sukmajaya","Informatika");
$mahasiswa2 = new Mahasiswa("Wafii","Sukmajaya Permai","Sisntem Informasi");

//akses proprety
echo $mahasiswa1->nama; 
echo '<br/>';
echo $mahasiswa2->nama;


// // Cara akses method
// $mahasiswa1->CekNama();


?>