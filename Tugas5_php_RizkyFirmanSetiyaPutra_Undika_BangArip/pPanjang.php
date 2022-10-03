<?php
require_once 'bentuk2D.php';

class pPanjang extends bentuk2D
{
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->pjg = $panjang;
        $this->lbr = $lebar;
    }

    public function namaBidang()
    {
        echo "Persegi Panjang";
    }

    public function luasBidang()
    {
        $luas = $this->pjg * $this->lbr . ' Cm';
        return $luas;
    }

    public function kelilingBidang()
    {
        $keliling = 2 * ($this->pjg + $this->lbr) . ' Cm';
        return $keliling;
    }

    public function keterangan()
    {
        echo 'Panjang = ' . $this->pjg . ' Cm';
        echo '<br> Lebar = ' . $this->lbr . ' Cm';
    }
}
