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
                        <div class="card-header bg-warning text-black">
                            <h2 align="center"><strong>EDIT BARANG</strong></h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>Kode barang</strong></label></h6>
                            <input type="text" class="form-control" value="<?= $data['barang']['kode_barang']; ?>" name="kode_barang">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong> Nama barang </strong></label></h6>
                            <input type="text" class="form-control" value="<?= $data['barang']['nama_barang']; ?>" name="nama_barang">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>Satuan</strong></label></h6>
                            <input type="text" class="form-control" value="<?= $data['barang']['satuan']; ?>" name="satuan">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>Harga Estimasi</strong></label></h6>
                            <input type="text" class="form-control" value="<?= $data['barang']['harga_estimasi']; ?>" name="harga_estimasi">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>merek</strong></label></h6>
                            <input type="text" class="form-control" value="<?= $data['barang']['merek']; ?>" name="merel">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>sheet</strong></label></h6>
                            <input type="text" class="form-control" value="<?= $data['barang']['sheet']; ?>" name="sheet">
                        </div>
                    </div>

                    <div class="card-footer">
                            <input type="hidden" class="form-control" value="<?= $data['barang']['id']; ?>" id="id_barang" name="id_barang">
                            <button type="submit" button class="btn btn-warning" align="left">UPDATE</button>
                            <table class="table table-bordered table-striped" border="10" width="75%">

                                <a href="<?= APLIKASI; ?>/barang/index" button class="btn btn-warning float-end"> TUTUP </button> </a>
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


</body></html>