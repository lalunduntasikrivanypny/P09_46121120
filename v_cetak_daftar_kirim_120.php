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
        <h1 align="left"><strong> DAFTAR PENGIRIMAN </strong></h1>

        <table border="1" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th> NOMOR PENAWARAN </th>
                    <th> TANGGAL KIRIM </th>
                    <th> TANGGAL PESANAN </th>
                    <th> TANGGAL PENAWARAN </th>
                    <th> PELANGGAN </th>
                    <th> TOTAL PEMBAYARAN </th>
                </tr>
            <thead>
                
            <tbody>
                <?php foreach ($data['kirim'] as $miw =>$isi) : ?>
                    <tr>
                        <th scope="roe"><?= $isi['nomor_penawaran']; ?></th>
                            <td><?= $isi['tgl_pengiriman']; ?></td>
                            <td><?= $isi['tgl_pesanan']; ?></td>
                            <td><?= $isi['tgl_penawaran']; ?></td>
                            <td><?= $isi['nama_pelanggan']; ?></td>
                            <td><?= $isi['total_pembayaran']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
</body>
</html>