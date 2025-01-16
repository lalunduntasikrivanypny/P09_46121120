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
                <form action="<?= APLIKASI; ?>/barang/proses_input" method="post" id="form-input">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header bg-secondary text-white">
                            <h2 align="center"><strong><i class="lni lni-pointer-right"></i>INPUT BARANG<i class="lni lni-pointer-left"></i></strong></h2>
                        </div>
                    </div>
                    <div class="card-body bg-warning">
                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>Kode barang</strong></label></h6>
                            <input id="kode_barang" type="text" class="form-control" nama="kode_barang">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong> Nama barang </strong></label></h6>
                            <input id="nama_barang" type="text" class="form-control" nama="nama_barang">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>Satuan</strong></label></h6>
                            <input id="satuan" type="text" class="form-control" nama="satuan">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>Harga Estimasi</strong></label></h6>
                            <input id="harga_estimasi" type="text" class="form-control" nama="harga_estimasi">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>Merek</strong></label></h6>
                            <input id="merek" type="text" class="form-control" nama="merek">
                        </div>

                        <div class="form-group mb-4">
                            <h6 label for="" style="color:black"><strong>Sheet</strong></label></h6>
                            <input id="sheet" type="text" class="form-control" nama="sheet">
                        </div>
                    </div>

                    <div class="card-footer">
                            <input type="submit" value="SIMPAN" button class="btn btn-secondary">
                            <a href="<?= APLIKASI; ?>/barang/index" button class="btn btn-secondary float-end"> BATAL </button> </a>
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
    $(document). ready(function(){

        x = "false"
        $("kode_barang").removeClass("is-invalid")
        $("nama_barang").removeClass("is-invalid")
        $("satuan").removeClass("is-invalid")
        $("harga_estimasi").removeClass("is-invalid")
        $("sheet").removeClass("is-invalid")

        // proses memeriksa
        if ($("#kode_barang").val() == '') {
            x = "not false"
            $("#kode_barang").addClass("is-invalid")
        }

        if ($("#nama_barang").val() == '') {
            x = "not false"
            $("#nama_barang").addClass("is-invalid")
        }

        if ($("#satuan").val() == '') {
            x = "not false"
            $("#satuan").addClass("is-invalid")
        }

        if ($("#harga_estimasi").val() == '') {
            x = "not false"
            $("#harga_estimasi").addClass("is-invalid")
        }

        if ($("#merek").val() == '') {
            x = "not false"
            $("#merek").addClass("is-invalid")
        }

        if ($("#sheet").val() == '') {
            x = "not false"
            $("#sheet").addClass("is-invalid")
        }

        if (x == 'not false') {
            return false
        }

        // periksa key
        kode_dicari = $("kode_barang").val()

        y = $.ajax({

            url: "<?= APLIKASI; ?>/barang/track_data/" + kode_dicari,
            dataType: "json",
            async: false,
            success: function(x) {}
        }).responseJSON

        console.log(y)
        if (y != false) {
            // alert("adami kodenya weh")
            return false
        }
        
        }) 
</script>

<!--balik -->
<!--return false-->