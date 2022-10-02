<?php
class Pegawai
{
    protected $nip;
    public $nama, $jabatan, $agama, $status;
    static $jml = 0;
    const DAFPEG = 'Daftar Pegawai PT ARBA';

    public function __construct($no, $pegawai, $jbtn, $agama, $status)
    {
        $this->nip = $no;
        $this->nama = $pegawai;
        $this->jabatan = $jbtn;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }

    public function setGapok()
    {
        switch ($this->jabatan) {
            case 'Manager':
                $gapok = 15000000;
                break;
            case 'Asisten Manager':
                $gapok = 10000000;
                break;
            case 'Kabag':
                $gapok = 7000000;
                break;
            case 'Staff':
                $gapok = 4000000;
                break;
            default:
                $gapok = 0;
                break;
        }
        return $gapok;
    }

    public function setTunjab()
    {
        $tunjab = $this->setGapok() * 0.2;
        return $tunjab;
    }

    public function setTunkel()
    {
        $tunkel = ($this->status == 'Menikah') ? $this->setGapok() * 0.1 : 0;
        return $tunkel;
    }

    public function setGator()
    {
        $gator = $this->setGapok() + $this->setTunjab() + $this->setTunkel();
        return $gator;
    }

    public function setZakatprof()
    {
        $zakat = ($this->agama == 'Muslim' && $this->setGator() >= 6000000) ? $this->setGapok() * 0.025 : 0;
        return $zakat;
    }

    public function setGajber()
    {
        $gaber = $this->setGator() - $this->setZakatprof();
        return $gaber;
    }

    public function mencetak()
    {
        echo '<h3>' . self::DAFPEG . '</h3>';
        echo ' NIP Pegawai : ' . $this->nip;
        echo '<br/> Nama Pegawai : ' . $this->nama;
        echo '<br/> Jabatan : ' . $this->jabatan;
        echo '<br/> Agama : ' . $this->agama;
        echo '<br/> Status : ' . $this->status;
        echo '<br/> Gaji Pokok : ' . number_format($this->setGapok(), 0, ',', '.');
        echo '<br/> Tunjangan Jabatan : ' . number_format($this->setTunjab(), 0, ',', '.');
        echo '<br/> Tunjangan Keluarga : ' . number_format($this->setTunkel(), 0, ',', '.');
        echo '<br/> Zakat : ' . number_format($this->setZakatprof(), 0, ',', '.');
        echo '<br/> Gaji Bersih : ' . number_format($this->setGajber(), 0, ',', '.');
        echo '<hr/>';
    }
}
