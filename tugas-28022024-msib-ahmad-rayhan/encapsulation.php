<?php
class Mahasiswa {
    private $namaMahasiswa;
    private $nim;

    public function __construct($namaMahasiswa, $nim) {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
    }

    public function output() {
        return "Mahasiswa $this->namaMahasiswa dengan NIM $this->nim";
    }
}

$mahasiswa = new Mahasiswa("Rayhan", "082111633084");
echo $mahasiswa->output();