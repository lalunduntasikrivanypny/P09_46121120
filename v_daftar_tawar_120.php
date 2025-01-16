<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?=ASET;?>/images/favicon-32x32.png" type="image/png">
	<!--plugins-->
	<link href="<?=ASET;?>/plugins/simplebar/css/simplebar.css" rel="stylesheet">
	<link href="<?=ASET;?>/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
	<link href="<?=ASET;?>/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="<?=ASET;?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=ASET;?>/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="<?=ASET;?>/css/app.css" rel="stylesheet">
	<link href="<?=ASET;?>/css/icons.css" rel="stylesheet">

	<title>Dashtreme - Multipurpose Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme1">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<?php include("aplikasi/views/bagian/bagian_samping_kiri.php");?>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php include("aplikasi/views/bagian/bagian_atas.php");?>
		<!--end header -->
		<!--start page wrapper -->

		<!--start content-->
        <main class="page-content">
            <!--breadcrumb-->
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header bg-secondary text-white">
                            <h2 align="center"><strong>DAFTAR PENAWARAN</strong></h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered mb-0">
                                <thead class="table-danger">
                                    <tr class="text-center">
                                        <th scope="col ">
                                            Nomor Penawaran
                                        </th>
                                        <th scope="col">
                                            Tanggal Penawaran
                                        </th>
                                        <th scope="col">
                                            Pelanggan
                                        </th>
                                        <th scope="col">
                                            Jml Jenis Barang
                                        </th>
                                        <th scope="col">
                                            Rata-Rata Harga
                                        </th>
                                        <th scope="col">
                                            Lihat
                                        </th>
                                        <th scope="col">
                                            Edit
                                        </th>
                                        <th scope="col">
                                            Delete
                                        </th>
                                        <th scope="col">
                                            Pesanan
                                        </th>
                                        <th scope="col">
                                            Cetak
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['tawar'] as $miw=> $isi) : ?>
                                        <tr>
                                            <th scope="row"><?= $isi['nomor_penawaran']; ?></th>
                                            <td><?= $isi['tgl_penawaran']; ?></td>
                                            <td><?= $isi['id_pelanggan']; ?></td>
                                            <td><?= $isi['jml_jenis_barang']; ?></td>
                                            <td><?= $isi['rata_rata_harga']; ?></td>

                                            <td class="text-center">

                                                <a href="<?= APLIKASI; ?>/tawar/tampil/<?= $isi['id']; ?>" button class="btn btn-light btn-sm"> LIHAT </button> </a>

                                            </td>

                                            <td class="text-center">

                                                <!-- JIKA ID MASTER PESANAN NILAI '_' -->

                                                <a href="<?= APLIKASI; ?>/tawar/edit/<?= $isi['id']; ?>" button class="btn btn-warning btn-sm" id-edit="<?= $isi['id_master_pesanan']; ?>"> EDIT </button> </a>

                                            </td>

                                            <td class="text-center">

                                                <!-- JIKA ID MASTER PESANAN NILAI '_' -->

                                                <a href="<?= APLIKASI; ?>/tawar/hapus/<?= $isi['id']; ?>" button class="btn btn-danger btn-sm" id-edit="<?= $isi['id_master_pesanan']; ?>"> DELETE </button> </a>

                                            </td>

                                            <td>

                                                <!-- JIKA ID MASTER PESANAN NILAI '_' -->

                                                <a href="<?= APLIKASI; ?>/terima/input/<?= $isi['id']; ?>" button class="btn btn-danger btn-sm" id-edit="<?= $isi['id_master_pesanan']; ?>"> PESANAN </button> </a>

                                            </td>

                                            <td class="text-center">
                                                <a targeet="_blank" href="<?= APLIKASI; ?>/tawar/cetak_satu/<?= $isi['id']; ?>" button class="btn btn-danger btn-sm edit" id-edit="<?= $isi['id_master_pesanan']; ?>"> CETAK </button> </a>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer">
                            <a href="<?= APLIKASI; ?>/tawar/input" button class="btn btn-dark btn-sm"> TAMBAH </button> </a>
                            <a href="<?= APLIKASI; ?>/tawar/cetak" button class="btn btn-dark btn-sm"> CETAK </button> </a>
                            <table class="table table-bordered table-striped" border="10" width="75%">
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-6">

            </div>

    </div>


    <!--end breadcrumb-->



    </main>
    <!--end page main-->

    
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
		<!--End Back To Top Button-->
		<?php include("aplikasi/views/bagian/bagian_bawah.php");?>
	<!--end wrapper-->
	<!--start switcher-->
	<?php include("aplikasi/views/bagian/bagian_samping_kanan.php");?>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="<?=ASET;?>/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="<?=ASET;?>/js/jquery.min.js"></script>
	<script src="<?=ASET;?>/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="<?=ASET;?>/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="<?=ASET;?>/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="<?=ASET;?>/js/app.js"></script>


</body>

</html>

<script>
    $(document).ready(function(){

        $(".edit").click(function(){
            status = $(this).attr("id-edit")

            if (status != '_') {
                alert("sudah diperiksami guys")
                return false
            }
        })

        $(".delete").click(function(){
            status = $(this).attr("id-delete")

            if (status != '_') {
                alert("sudah diperiksami guys")
                return false
            }
        })


        $(".periksa").click(function(){
            status = $(this).attr("id-periksa")

            if (status != '_') {
                alert("sudah diperiksami guys")
                return false
            }
        })
    })
</script>