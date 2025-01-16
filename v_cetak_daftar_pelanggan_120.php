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
        <h1 align="left"><strong> DAFTAR PELANGGAN </strong></h1>

        <table border="1" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th> KODE PELANGGAN </th>
                    <th> NAMA PELANGGAN </th>
                    <th> ALAMAT </th>
                    <th> KEGIATAN BISNIS </th>
                    <th> FREKUENSI PENAWARAN </th>
                </tr>
            <thead>
                
            <tbody>
                <?php foreach ($data['pelanggan'] as $miw =>$isi) : ?>
                    <tr class="text-center">
                            <td><?= $isi['kode_pelanggan']; ?></td>
                            <td><?= $isi['nama_pelanggan']; ?></td>
                            <td><?= $isi['alamat']; ?></td>
                            <td align="center"><?= $isi['kegiatan_bisnis']; ?></td>
                            <td align="center"><?= $isi['frekuensi_penawaran']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
             </table>
</body>
</html>