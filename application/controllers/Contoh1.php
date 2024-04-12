<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
    public $hobi;

    function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    function perkenalan() {
        echo "Halo, nama saya {$this->nama}, NIM saya {$this->nim}, dan saya adalah mahasiswa jurusan {$this->jurusan}.<br>";
    }
}

$mahasiswa1 = new Mahasiswa("Budi", "1234567890", "Teknik Informatika");
$mahasiswa1->perkenalan();

$mahasiswa2 = new Mahasiswa("Ani", "0987654321", "Sistem Informasi");
$mahasiswa2->perkenalan();
?>