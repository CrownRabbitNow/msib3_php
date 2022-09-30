<?php
//array scalar (1 dimensi)
$m1 = ['nim' => '001', 'nama' => 'Rizky Firman', 'nilai' => 90];
$m2 = ['nim' => '002', 'nama' => 'Anggun Sani', 'nilai' => 100];
$m3 = ['nim' => '003', 'nama' => 'Sonia Kila', 'nilai' => 70];
$m4 = ['nim' => '004', 'nama' => 'Bagia Jila', 'nilai' => 50];
$m5 = ['nim' => '005', 'nama' => 'Lopio Bul', 'nilai' => 20];
$m6 = ['nim' => '006', 'nama' => 'Pomia Dani', 'nilai' => 30];
$m7 = ['nim' => '007', 'nama' => 'Dani Pedro', 'nilai' => 80];
$m8 = ['nim' => '008', 'nama' => 'Mina Gina', 'nilai' => 10];
$m9 = ['nim' => '009', 'nama' => 'Kita Bina', 'nilai' => 75];
$m10 = ['nim' => '0010', 'nama' => 'Ikuna Misu', 'nilai' => 88];

$ar_judul = [
    'No', 'Nim', 'Nama', 'Nilai', 'Keterangan',
    'Grade', 'Predikat'
];

//array assosiative (> 1 dimensi)
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

//aggregate function in array
$jumlah_siswa = count($mahasiswa);
$jml_nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($jml_nilai);
$max_nilai = max($jml_nilai);
$min_nilai = min($jml_nilai);
$rata2 = $total_nilai / $jumlah_siswa;
//keterangan
$keterangan = [
    'Jumlah Mahasiswa' => $jumlah_siswa,
    'Nilai Tertinggi' => $max_nilai,
    'Nilai Terendah' => $min_nilai,
    'Nilai Rata2' => $rata2
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 3 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <h3 class="text-center">Daftar Nilai Mahasiswa</h3>
    <div class="container">
        <div class="row">
            <div class="col p-3">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <?php
                            foreach ($ar_judul as $jdl) {
                            ?>
                                <th><?= $jdl ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($mahasiswa as $m) {
                            //rumus2
                            //keterangan lulus
                            $keterangan_lulus = ($m['nilai'] >= 60) ? 'lulus' : 'tidak lulus';

                            //grade
                            if ($m['nilai'] >= 90 && $m['nilai'] <= 100) {
                                $grade = 'A';
                            } else if ($m['nilai'] >= 80 && $m['nilai'] <= 89) {
                                $grade = 'B';
                            } else if ($m['nilai'] >= 70 && $m['nilai'] <= 79) {
                                $grade = 'C';
                            } else if ($m['nilai'] >= 60 && $m['nilai'] <= 69) {
                                $grade = 'D';
                            } else {
                                $grade = 'E';
                            }

                            //predikat
                            switch ($grade) {
                                case 'A':
                                    $predikat = 'Sangat Baik';
                                    break;
                                case 'B':
                                    $predikat = 'Baik';
                                    break;
                                case 'C':
                                    $predikat = 'Cukup';
                                    break;
                                case 'D':
                                    $predikat = 'Kurang';
                                    break;
                                case 'E':
                                    $predikat = 'Sangat Kurang';
                                    break;
                            }
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $m['nim'] ?></td>
                                <td><?= $m['nama'] ?></td>
                                <td><?= $m['nilai'] ?></td>
                                <td><?= $keterangan_lulus ?></td>
                                <td><?= $grade ?></td>
                                <td><?= $predikat ?></td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                    <tfoot>
                        <?php
                        foreach ($keterangan as $ket => $hasil) {
                        ?>
                            <tr>
                                <th><?= $ket ?></th>
                                <th><?= $hasil ?></th>
                            <?php } ?>
                            </tr>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>