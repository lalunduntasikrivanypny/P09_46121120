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
        <!--breadcrumb-->

        <h1 align="left"><strong> EDIT BARANG </strong></h1>

        <hr>
        <h3>Daftar Barang</h3>

        <table border="1" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <th> KODE BARANG </th>
                    <th> NAMA BARANG</th>
                    <th> SATUAN</th>
                    <th> HARGA ESTIMASI</th>
                    <th> MEREK </th>
                    <th> SHEET </th>
                </tr>

                <tr>
                    <td><?= $data["barang"]["kode_barang"]; ?></td>
                    <td><?= $data["barang"]["nama_pbarang"]; ?></td>
                    <td><?= $data["barang"]["satuan"]; ?></td>
                    <td><?= $data["barang"]["harga_estimasi"]; ?></td>
                    <td><?= $data["barang"]["merek"]; ?></td>
                    <td><?= $data["barang"]["sheet"]; ?></td>
                </tr>
            <tbody>
        </table>

        <input type="hidden" value="<?= $data['barang']['id']; ?>" id="id_barang" name="id_barang">
</body>
</html>