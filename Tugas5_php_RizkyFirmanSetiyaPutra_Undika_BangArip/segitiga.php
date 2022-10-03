<?php
require_once 'bentuk2D.php';

class segitiga extends bentuk2D
{
    public $alas;
    public $tinggi;
    public $sisi2;

    public function __construct($alas, $tinggi, $sisi2)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisi2;
    }

    public function namaBidang()
    {
        echo "Segitiga";
    }
    public function luasBidang()
    {
        $luas = 0.5 * $this->alas * $this->tinggi . ' Cm';
        return $luas;
    }

    public function  kelilingBidang()
    {
        $keliling = $this->sisi + $this->sisi + $this->sisi . ' Cm';
        return $keliling;
    }

    public function keterangan()
    {
        echo ' Alas = ' . $this->alas . ' Cm';
        echo '<br/>  Tinggi = ' . $this->tinggi . ' Cm';
        echo '<br/>  Sisi Miring =' . $this->sisi . ' Cm';
    }
}
