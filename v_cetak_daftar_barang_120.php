<!doctype html>
<html lang="en">

<head>
    <!--required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= ASET; ?>/image/favison-32x32.png" type="image/png" />

    <tittle> dashtrans - Boosstrap 5 admin templete</title>
</head>

<body>

    <!--start content-->
    <main class="page-content">
        <h1 align="left"><strong> DAFTAR BARANG </strong></h1>

        <table border="1" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th> KODE BARANG </th>
                    <th> BNAMA BARANG </th>
                    <th> SATUAN </th>
                    <th> HARGA ESIMASI </th>
                    <th> MEREK </th>
                    <th> SHEET </th>
                    <th> ID USER </th>
                    <th> RATA HARGA TAWAR </th>
                    <th> TOTAL QTY YANG DIPESAN </th>
                </tr>
                <tbody>
                    <?php foreach ($data['barang'] as $miw =>$isi) : ?>
                        <tr>
                            <th scope="roe"><?= $isi['kode_barang']; ?></th>
                            <td><?= $isi['nama_barang']; ?></td>
                            <td><?= $isi['satuan']; ?></td>
                            <td><?= $isi['harga_estimasi']; ?></td>
                            <td><?= $isi['merek']; ?></td>
                            <td><?= $isi['sheet']; ?></td>
                            <td><?= $isi['id_user']; ?></td>
                            <td><?= $isi['harga_penawaran']; ?></td>
                            <td><?= $isi['kuantias']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
</body>
</html>
