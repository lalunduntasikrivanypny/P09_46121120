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
        <h1 align="left"><strong> DAFTAR PENAWARAN </strong></h1>

        <table border="1" cellspacing="0" width="100%">
                <thead class="table-danger">
                    <tr class="text-center">
                        <th> NOMOR PELANGGAN </th>
                        <th> TANGGAL PENAWARAN </th>
                        <th> PELANGGAN </th>
                        <th> JML JENIS BARANG </th>
                        <th> RATA RATA HARGA </th>
                </tr>
            <thead>
                
            <tbody>
                <?php foreach ($data['tawar'] as $miw =>$isi) : ?>
                    <tr>
                        <td scope="row"><?= $isi['nomor_penawaran']; ?></td>
                            <td><?= $isi['tgl_penawaran']; ?></td>
                            <td align="cener"><?= $isi['id_pelanggan']; ?></td>
                            <td align="cener"><?= $isi['jml_jenis_barang']; ?></td>
                            <td><?= $isi['rata_rata_harga']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
             </table>
</body>
</html>