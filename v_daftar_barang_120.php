<html lang="en"><head>
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
                        <div class="card-header bg-info text-white">

                            <h2 align="center"><strong></i>DAFTAR BARANG</i> </strong></h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered bg-black">
                                <thead class="table-info text-center">
                                    <tr>
                                        <th scope="col">
                                            Kode Barang
                                        </th>
                                        <th scope="col">
                                            Nama Barang
                                        </th>
                                        <th scope="col">
                                            Satuan
                                        </th>
                                        <th scope="col">
                                            Harga Estimasi
                                        </th>
                                        <th scope="col">
                                            merek
                                        </th>
                                        <th scope="col">
                                            sheet
                                        </th>
                                        <th scope="col">
                                            Id User
                                        </th>
                                        <th scope="col">
                                            Rata Harga Tawaran
                                        </th>
                                        <th scope="col">
                                            Total Qty yang dipesan
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
                                            Cetak
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['barang'] as $miw=>$isi) : ?>
                                        <tr>
                                            <th scope="row"><?= $isi['kode_barang']; ?></th>
                                            <td><?= $isi['nama_barang']; ?></td>
                                            <td><?= $isi['satuan']; ?></td>
                                            <td><?= $isi['harga_estimasi']; ?></td>
                                            <td><?= $isi['merek']; ?></td>
                                            <td><?= $isi['sheet']; ?></td>
                                            <td><?= $isi['id_user']; ?></td>
                                            <td><?= $isi['harga_penawaran']; ?></td>
                                            <td><?= $isi['kuantitas']; ?></td>
                                            <td>
                                                <a href="<?= APLIKASI; ?>/barang/tampil/<?= $isi["id"]; ?>" button class="btn btn-light tombol-lihat btn-sm"> LIHAT </button> </a>
                                            </td>
                                            <td>
                                                <a href="<?= APLIKASI; ?>/barang/edit/<?= $isi["id"]; ?>" button class=" btn btn-warning btn-sm"> EDIT </button> </a>
                                            </td>
                                            <td>
                                                <a href="<?= APLIKASI; ?>/barang/hapus/<?= $isi["id"]; ?>" button class=" btn btn-danger btn-sm"> DELETE </button> </a>
                                            </td>
                                            <td>
                                                <a href="<?= APLIKASI; ?>/barang/cetak_satu/<?= $isi["id"]; ?>" button class=" btn btn-danger btn-sm"> CETAK </button> </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>


                        <div class="card-footer">
                            <a href="<?= APLIKASI; ?>/barang/input" button class="btn btn-dark btn-sm"> TAMBAH </button> </a>
                            <a href="<?= APLIKASI; ?>/barang/input" button class="btn btn-dark btn-sm"> CETAK </button> </a>
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


<div class="modal fade" id="modal-lihat" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <strong>SILAHKAN LIHAT</strong>
            </div>

            <div class="modal-body">

                <div class="form-group mb-4">
                    <label for="" style="color:coral"><strong>Kode Pelanggan</strong></label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label for="" style="color:coral"><strong>Nama Pelanggan</strong></label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label for="" style="color:coral"><strong>Alamat</strong></label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label for="" style="color:coral"><strong>No Telp Pelanggan</strong></label>
                    <input type="text" class="form-control">
                </div>


            </div>

            <div class="modal-footer">
                <button data-bs-dismiss="modal">SELESAI</button>
            </div>
        </div>
    </div>

</div>

<script>
    $(".tombol-lihat").click(function() {

        tombol_diklik = $(this)
        abc = tombol_diklik.attr("datanya")

        $.ajax({
            url: "http://localhst/46121120/P02_46121120/barang/lihat" + abc,

            dataType: "json",

            successs: function(x) {
                console.log(x)

                $("kode").val(x.barang.kode_pelanggan)
            }
        })
        $("#modal-lihat").modal("show")

    })
</script>