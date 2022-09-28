<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 2 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <form action="" method="POST">
        <p class="h4 p-4 text-center">Form Input Data Pegawai</p>
        <div class="container px-5 my-5">
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="form-floating mb-3">
                    <input class="form-control" name="namaLengkap" id="namaLengkap" type="text" placeholder="Nama Lengkap" data-sb-validations="required" />
                    <label for="namaLengkap">Nama Lengkap</label>
                    <div class="invalid-feedback" data-sb-feedback="namaLengkap:required">Nama Lengkap is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" name="agama" id="agama" aria-label="Agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                    <label for="agama">Agama</label>
                </div>
                <div class="mb-3">
                    <label class="form-label d-block">Jabatan</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="manager" type="radio" value="Manager" name="jabatan" data-sb-validations="required" />
                        <label class="form-check-label" for="manager">Manager</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="asisten" type="radio" value="Asisten" name="jabatan" data-sb-validations="required" />
                        <label class="form-check-label" for="asisten">Asisten</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="kabag" type="radio" value="Kabag" name="jabatan" data-sb-validations="required" />
                        <label class="form-check-label" for="kabag">Kabag</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="staff" type="radio" value="Staff" name="jabatan" data-sb-validations="required" />
                        <label class="form-check-label" for="staff">Staff</label>
                    </div>
                    <div class="invalid-feedback" data-sb-feedback="jabatan:required">One option is required.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label d-block">Status Menikah</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="menikah" value="Menikah" type="radio" name="statusMenikah" data-sb-validations="required" />
                        <label class="form-check-label" for="menikah">Menikah</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="belum" type="radio" value="Belum" name="statusMenikah" data-sb-validations="required" />
                        <label class="form-check-label" for="belum">Belum</label>
                    </div>
                    <div class="invalid-feedback" data-sb-feedback="statusMenikah:required">One option is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="jumlahAnak" id="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" />
                    <label for="jumlahAnak">Jumlah Anak</label>
                    <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-info btn-lg" id="submitButton" type="submit" name="simpan">Simpan</button>
                </div>
                <?php
                error_reporting(0);
                $namaLengkap = $_POST['namaLengkap'];
                $agama = $_POST['agama'];
                $jabatan = $_POST['jabatan'];
                $statusMenikah = $_POST['statusMenikah'];
                $jumlahAnak = $_POST['jumlahAnak'];

                switch ($jabatan) {
                    case 'Manager':
                        $gapok = 20000000;
                        break;
                    case 'Asisten':
                        $gapok = 15000000;
                        break;
                    case 'Kabag':
                        $gapok = 10000000;
                        break;
                    case 'Staff':
                        $gapok = 4000000;
                        break;
                    default:
                        $gapok = 0;
                }

                $tunjanganJabatan = $gapok * 0.2;

                if ($statusMenikah == 'Menikah' && $jumlahAnak <= 2) {
                    $tunjanganKeluarga = $gapok * 0.05;
                } else if ($statusMenikah == 'Menikah' && $jumlahAnak >= 3 && $jumlahAnak <= 5) {
                    $tunjanganKeluarga = $gapok * 0.1;
                } else if ($statusMenikah == 'Menikah' && $jumlahAnak >= 5) {
                    $tunjanganKeluarga = $gapok * 0.15;
                } else if ($statusMenikah == 'Belum') {
                    $tunjanganKeluarga = 0;
                }

                $gajiKotor = $gapok + $tunjanganJabatan + $tunjanganKeluarga;

                if ($agama == "Islam" && $gajiKotor >= 6000000) $zakatProfesi = 0.025 * $gajiKotor;
                else $zakatProfesi = 0;

                $takeHomePay = $gajiKotor - $zakatProfesi;
                ?>
            </form>
            <div class="container p-5">
                <div class="row">
                    <h1 class="text-center mb-3">Data Pegawai</h1>
                    <div class="col">
                        <table class="table text-center table-striped">

                            <thead class="table-info">
                                <th>Nama Lengkap</th>
                                <th>Agama</th>
                                <th>Jabatan</th>
                                <th>Status Menikah</th>
                                <th>Jumlah Anak</th>
                                <th>Gaji Pokok</th>
                                <th>Tunjangan Jabatan</th>
                                <th>Tunjangan Keluarga</th>
                                <th>Gaji Kotor</th>
                                <th>Zakat Profesi</th>
                                <th>Take Home Pay</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $namaLengkap ?></td>
                                    <td><?= $agama ?></td>
                                    <td><?= $jabatan ?></td>
                                    <td><?= $statusMenikah ?></td>
                                    <td><?= $jumlahAnak ?></td>
                                    <td><?= number_format($gapok, 2)  ?></td>
                                    <td><?= number_format($tunjanganJabatan, 2)  ?></td>
                                    <td><?= number_format($tunjanganKeluarga, 2)  ?></td>
                                    <td><?= number_format($gajiKotor, 2) ?></td>
                                    <td><?= number_format($zakatProfesi, 2) ?></td>
                                    <td><?= number_format($takeHomePay, 2) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>