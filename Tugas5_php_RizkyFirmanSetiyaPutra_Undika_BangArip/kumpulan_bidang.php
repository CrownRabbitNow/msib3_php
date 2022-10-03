<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 5 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <h1 align="center">Daftar Nama Bidang 2D</h1>
    <?php
    require_once 'lingkaran.php';
    require_once 'pPanjang.php';
    require_once 'segitiga.php';

    $bidang1 = new lingkaran(14);
    $bidang2 = new lingkaran(27);
    $bidang3 = new pPanjang(10, 20);
    $bidang4 = new segitiga(5, 20, 10);
    $bidang5 = new segitiga(10, 15, 5);
    $thead = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];

    $bentukbidang = [$bidang1, $bidang2, $bidang3, $bidang4, $bidang5];
    ?>
    <center>
        <table class="table table-success" style="width: 80%; text-align: center;">
            <thead>
                <tr>
                    <?php
                    foreach ($thead as $th) { ?>
                        <th><?= $th ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($bentukbidang as $bb) { ?>
                    <tr>
                        <th><?= $no++ ?></th>
                        <td><?= $bb->namaBidang(); ?></td>
                        <td><?= $bb->keterangan(); ?></td>
                        <td><?= $bb->luasBidang(); ?></td>
                        <td><?= $bb->kelilingBidang(); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </center>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>