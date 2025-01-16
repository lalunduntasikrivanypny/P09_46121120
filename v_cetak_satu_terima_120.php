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

        <h1 align="left"><strong> EDIT PESANAN </strong></h1>

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
        <h3> Daftar Penerimaan </h3>
        <table border="1" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="25%"> BARANG </th>
                    <th width="20%"> HARGA PENAWARAN </th>
                    <th width="25%"> KUANTITAS </th>
                    <th width="20%"> HARGA </th>
                    <th width="20%"> JUMLAH </th>
                </tr>
            </thead>

                <tbody id="tbody-input-terima">
                    <?php foreach ($data['detail_terima'] as $miw => $isi) : ?>
                        <tr>
                            <td scope="row">
                                <?= $isi['kode_barang']; ?></td>
                            <td class="hre" idnya="<?= $isi['id_barang']; ?>">
                                <?= $isi['harga_estimasi']; ?>
                            </td>

                            <td>
                                <?= $isi['id_barang']; ?>
                            </td>

                            <td class="ttl" idnya="<?= $isi['id_barang']; ?>">
                                <?= $isi['jumlah']; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </thead>
        </table>
</body>
</html>