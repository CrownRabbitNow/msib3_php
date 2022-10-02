<?php
require 'Pegawai.php';

$dian = new Pegawai('001', 'Dian Nindia', 'Manager', 'Muslim', 'Belum Menikah');
$aji = new Pegawai('002', 'Aji Seno Pati', 'Asisten Manager', 'Muslim', 'Belum Menikah');
$sinta = new Pegawai('003', 'Sinta Jesima', 'Asisten Manager', 'Katholik', 'Menikah');
$mala = new Pegawai('004', 'Mala Yesupa', 'Staff', 'Kristen', 'Menikah');
$dea = new Pegawai('005', 'Dea Minokima', 'Staff', 'Budha', 'Belum Menikah');

echo '<h1 align="center">' . Pegawai::DAFPEG . '</h1>';
$dian->mencetak();
$aji->mencetak();
$sinta->mencetak();
$mala->mencetak();
$dea->mencetak();
echo 'Jumlah Daftar Pegawai: ' . Pegawai::$jml;
