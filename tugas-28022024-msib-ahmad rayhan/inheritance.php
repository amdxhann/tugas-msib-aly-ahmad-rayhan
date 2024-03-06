<?php
class DosenWali {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function konsultasi() {
        return "sedang berkonsultasi dengan $this->nama selaku Dosen Wali di Universitas Airlangga";
    }
}

class Mahasiswa extends DosenWali {
    protected $namaMahasiswa;
    protected $nim;

    public function __construct($namaMahasiswa, $nim, $namaDosen) {
        parent::__construct($namaDosen);
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
    }

    public function output() {
        return "Mahasiswa bernama $this->namaMahasiswa dengan NIM $this->nim " . $this->konsultasi();
    }
}

$mahasiswa = new Mahasiswa("Ahmad Rayhan", "082111633084", "Pak Indra");
echo $mahasiswa->output();