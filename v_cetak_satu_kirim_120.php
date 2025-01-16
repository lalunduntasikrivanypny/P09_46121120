<!doctype html>
<html lang="en">

$data 

<head>
    <!--required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= ASET; ?>/image/favison-32x32.png" type="image/png" />

    <tittle> dashtrans - Boosstrap 5 admin templete</title>
</head>

<body>

    <!--start wrapper-->

    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->

        <h1 align="left"><strong> EDIT PENGIRIMAN </strong></h1>

        <input type="hidden" value="<?= $data["kirim"]["id"]; ?>" name="id_pengiriman">
        
        <table width="100%">
            <tbody>
                <tr>
                    <th> NOMOR PENAWARAN </th>
                    <th> NAMA PELANGGAN </th>
                    <th> ALAMAT</th>
                    <th> TANGGAL PENAWARAN </th>
                    <th> TANGGAL PESANAN </th>
                </tr>

                <tr>
                    <td><?= $data["kirim"]["nomor_penawaran"]; ?></td>
                    <td><?= $data["kirim"]["nama_pelanggan"]; ?></td>
                    <td><?= $data["kirim"]["alamat"]; ?></td>
                    <td><?= $data["kirim"]["tgl_penawaran"]; ?></td>
                    <td><?= $data["kirim"]["tgl_pesanan"]; ?></td>
                </tr>
            <tbody>
        </table>

        <hr>

        <h3> Daftar pengiriman </h3>
            <table border="1" cellspacing="0" width="100%">
                <thead>
                    <tr class="text-center">
                        <th> Barang </th>
                        <th> Harga Penawaran </th>
                        <th> Kuantitas </th>
                        <th> Harga </th>
                        <th> Jumlah </th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($data['kirimid'] as $miw =>$isi) : ?>
                        <tr>
                            <td> 
                                <?= $isi['kode_barang']; ?>
                            </td>
                            
                            <td>
                                <?= $isi['harga_estimasi']; ?>
                            </td>

                            <td> 
                                <?= $isi['kuantitas']; ?>
                            </td>
                            
                            <td>
                                <?= $isi['harga_barang']; ?>
                            </td>

                            <td>
                                <?= $isi['jumlah']; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <tbody>
            </table>

            <hr>
            <table>
                <tr>
                    <td><b> TANGGAK PENGIRIMAN </b></td>
                    <td><b> EXPEDISI </b></td>
                </tr>

                <tr>
                    <td><?= $data['kirim']['gl_pengiriman']; ?></td>
                    <td><?= $data['kirim']['expedisi']; ?></td>
                </tr>
            </table>
</body>
</html>