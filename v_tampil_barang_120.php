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
                        <div class="card-header bg-secondary text-white">
                            <h2 align="center"><strong> LIHAT BARANG </strong></h2>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>Kode barang</strong></label></h6>
                            <input type="text" class="form-control"readonly value="<?= $data['barang']['kode_barang']; ?>">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong> Nama barang </strong></label></h6>
                            <input type="text" class="form-control"readonly value="<?= $data['barang']['nama_barang']; ?>">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>Satuan</strong></label></h6>
                            <input type="text" class="form-control"readonly value="<?= $data['barang']['satuan']; ?>">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>Harga Estimasi</strong></label></h6>
                            <input type="text" class="form-control"readonly value="<?= $data['barang']['harga_estimasi']; ?>">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>Merek</strong></label></h6>
                            <input type="text" class="form-control"readonly value="<?= $data['barang']['merek']; ?>">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>Sheet</strong></label></h6>
                            <input type="text" class="form-control"readonly value="<?= $data['barang']['sheet']; ?>">
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="<?= APLIKASI; ?>/barang/index" button class="btn btn-secondary float-end"> TUTUP </button> </a>
                        <table class="table table-bordered table-striped"border="10" width="75%">
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


</body></html>