<?php
class DosenWali {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function konsultasi() {
        return "Sedang berkonsultasi dengan Dosen Wali " . $this->nama . "\n";
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

    public function konsultasi() {
        return "Sedang berkonsultasi dengan Dosen Wali " . $this->nama . " untuk mengurus KRS oleh Mahasiswa bernama " . $this->namaMahasiswa . "\n";
    }
}

$dosenWali = new DosenWali("Pak Indra");
$mahasiswa = new Mahasiswa("Ahmad Rayhan", "082111633084", "Pak Indra");

echo $dosenWali->konsultasi();
echo $mahasiswa->konsultasi();
