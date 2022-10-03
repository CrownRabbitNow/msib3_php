<?php
require_once 'bentuk2D.php';

class lingkaran extends bentuk2D
{
    public $jari2;

    public function __construct($jari2)
    {
        $this->jari2 = $jari2;
    }

    public function namaBidang()
    {
        echo "Lingkaran";
    }

    public function luasBidang()
    {
        $luaslgkrn = 3.14 * $this->jari2 * $this->jari2 . ' Cm';
        return $luaslgkrn;
    }

    public function kelilingBidang()
    {
        $kelilinglgkrn = 2 * 3.14 * $this->jari2 . ' Cm';
        return $kelilinglgkrn;
    }

    public function keterangan()
    {
        echo 'Jari-Jari =' . $this->jari2 . ' Cm';
    }
}
