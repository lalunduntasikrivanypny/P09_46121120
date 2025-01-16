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

        <h1 align="left"><strong> EDIT PENAWARAN </strong></h1>

        <input type="hidden" value="<?= $data["tawarid"]["id"]; ?>" name="id_mpenawaran">

        <table  width="100%">
            <tbody>
                <tr>
                    <th> NOMOR PENAWARAN </th>
                    <th> NAMA PELANGGAN </th>
                    <th> ALAMAT</th>
                    <th> TANGGAL PENAWARAN</th>
                </tr>

                <tr>
                    <td><?= $data["tawarid"]["nomor_penawaran"]; ?></td>
                    <td><?= $data["tawarid"]["nama_pelanggan"]; ?></td>
                    <td><?= $data["tawarid"]["alamat"]; ?></td>
                    <td><?= $data["tawarid"]["tgl_penawaran"]; ?></td>
                </tr>
            <tbody>
        </table>

        <hr>
        <h3> Daftar Barang </h3>
        <table border="1" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="25%"> BARANG </th>
                    <th width="20%"> HARGA </th>
                </tr>

                <tbody id="tbody-edit">
                    <?php foreach ($data['detail_tawar'] as $miw => $isi) : ?>
                        <tr>
                            <td><?= $isi['kode_barang']; ?></td>
                            <td width="50%"><?= $isi['harga_barang']; ?></th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </hr>
    </table>
</body>
</html>