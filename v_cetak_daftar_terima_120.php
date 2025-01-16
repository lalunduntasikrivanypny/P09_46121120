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
        <h1 align="left"><strong> DAFTAR PESANAN </strong></h1>

        <table border="1" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th> NOMOR PENAWARAN </th>
                        <th> TANGGAL PESANAN </th>
                        <th> TANGGAL PENAWARAN </th>
                        <th> PELANGGAN </th>
                        <th> TOTAL PESANAN </th>
                </tr>
            <thead>
                
            <tbody>
                <?php foreach ($data['terima'] as $miw =>$isi) : ?>
                    <tr>
                        <td scope="row"><?= $isi['nomor_penawaran']; ?></td>
                            <td><?= $isi['tgl_pesanan']; ?></td>
                            <td><?= $isi['tgl_penawaran']; ?></td>
                            <td><?= $isi['nama_pelanggan']; ?></td>
                            <td align="cener"><?= $isi['total_pesanan']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
             </table>
</body>
</html>