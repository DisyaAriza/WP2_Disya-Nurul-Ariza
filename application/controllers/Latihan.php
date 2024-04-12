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
        $this->hobi = $hobi;
    }

    function perkenalan() {
        echo "Halo, nama saya {$this->nama}, NIM saya {$this->nim}, jurusan {$this->jurusan}, Hobi {$this->hobi}.<br>";
    }
}

$mahasiswa1 = new Mahasiswa("Disya Nurul Ariza", "17210641", "Teknik Informatika","Memasak");
$mahasiswa1->perkenalan();
?>