<?php 

class Mahasiswa{
    public $nama;
    public $berat;


    public function __construct($nama, $berat) {
        $this->nama = $nama;
        $this->berat = $berat;

    }

    public function getNama() {
       return $this->nama;
    }

    public function getberat() {
        return $this->berat;
    }

    public function hasilTimbangan() {
        return $this->berat >= 60 ? 'obesitas' : 'normal';

    }

    public function predikat() {
        if ($this->berat >= 85) {
            return 'sangat tidak baik';
        } elseif ($this->berat >= 70) {
            return 'tidak baik';
        } elseif ($this->berat >= 60) {
            return 'mendekati';
        } else {
            return 'baik';
        }

    }
}

?>