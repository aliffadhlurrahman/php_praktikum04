<?php

class nilaiMahasiswa{
    public $matkul;
    public $nilai;
    public $nim;

    function __construct($matkul, $nilai, $nim)

    {
        $this->matkul = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    function hitungNilai()
    {
        return $this->nilai;
    }

    function predikat($keterangan)
    {
        if ($keterangan > 55) {
            return "Anda Lulus";
        } else {
            return "Anda Tidak Lulus";
        }
    }

    function grade($keterangan)
    {
        if ($keterangan >= 85 && $keterangan <= 100) {
            return "A";
        } elseif ($keterangan >= 70 && $keterangan <= 84) {
            return "B";
        } elseif ($keterangan >= 56 && $keterangan <= 69) {
            return "C";
        } elseif ($keterangan >= 36 && $keterangan <= 55) {
            return "D";
        } elseif ($keterangan >= 0 && $keterangan <= 35) {
            return "E";
        } else {
            return "I";
        }
    }
}
