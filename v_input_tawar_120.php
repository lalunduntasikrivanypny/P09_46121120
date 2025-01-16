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
                <form action="<?= APLIKASI ?>/tawar/proses_input" method="post">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header bg-dark text-info">
                            <h1 align="left"><strong>INPUT PENAWARAN</strong></h1>
                        </div>
                        <div class="card-body bg-white text-dark bg-opacity-25">
                            <input type="hidden" value="<?= $data["tawarid"]["id"]; ?>" name="mtawar">

                            <div class="row mt-4">
                                <label for="" class="col-2" style="color:black"> <strong>NOMOR PENAWARAN</strong></label>
                                <div class="col-3">
                                    <input type="text" class="form-control" name="penawaran">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <label for="" class="col-2" style="color:black"> <strong>KODE/NAMA PELANGGAN</strong></label>
                                <div class="col-6">
                                    <select class="form-select" id="kdp" name="pelanggan">
                                        <?php foreach ($data['[pelanggan'] as $miw => $isi) : ?>
                                            <option value="<?= $isi['id']; ?>"><?= $isi['kode_pelanggan']; ?>/<?= $isi['nama_pelanggan']; ?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <label for="" class="col-2" style="color:black"> <strong>ALAMAT</strong></label>
                                <div class="col-3">
                                    <input type="text" class="form-control" id="alt" name="alm">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <label for="" class="col-2" style="color:black"> <strong>TANGGAL PENAWARAN</strong></label>
                                <div class="col-3">
                                    <input type="date" class="form-control" name="tgl">
                                </div>

                                <div class="col-7">
                                    <button type="button" class="button float-end btn-sm" data-bs-dismiss="modal" id="tombol-input">CARI</button>
                                </div>
                            </div>
                        </div>



                        <div class="row-mt-5">

                        </div>
                        <div class="card-body">
                            <table class="table table-bordered mt-4">
                                <thead class="table-dark text-center">
                                    <tr>

                                        <th>

                                            <h5>Barang</h5>

                                        </th>

                                        <th>

                                            <h5>Harga</h5>

                                        </th>
                                    </tr>
                                </thead>

                                <tbody id="tbody-input-tawar">
                                </tbody>
                            </table>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <a href="<?= APLIKASI; ?>/tawar/index" button class="btn btn-outline-dark float-end mt-3"> KEMBALI </button> </a>
                                        <table class="table table=bordered table-striped" border="10" width="75%">
                                    </div>
                                    <div class="col-1" align="right"> 
                                        <button type="submit" class="btn btn-outline-dark mt-3"> TAMBAH </button> </a>
                                        <table class="table table-bordered table-striped" border="10" width="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

<div class="modal fade" id="inputnya_tawar" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header bg-dark text-info">
                                <h1 align="left"><strong>DAFTAR BARANG></strong></h1>
                            </div>
                            <div class="card-body">

                                <table class="table table-bordered  mb-0">
                                    <thead class="text-center">
                                        <tr>

                                            <th>
                                                Kode Barang
                                            </th>

                                            <th>
                                                Nama Barang
                                            </th>

                                            <th>
                                                Satuan
                                            </th>


                                            <th>
                                                Harga Estimasi
                                            </th>


                                            <th>
                                                Pilih
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($data['barang'] as $miw => $isi) : ?>
                                            <tr>
                                                <td scope="row"><?= $isi['kode_barang']; ?></td>
                                                <td scope="row"><?= $isi['nama_barang']; ?></th>
                                                <td scope="row"><?= $isi['satuan']; ?></th>
                                                <td scope="row"><?= $isi['harga_estimasi']; ?></th>
                                                <td class="text-center">
                                                    <button class="btn btn-primary btn-sm tb-pilih" id-brg="<?= $isi['id']; ?>" kd-brg="<?= $isi['kode_barang']; ?>" hrg-brg="<?= $isi['harga_estimasi']; ?>" data-bs-dismiss="modal"> PILIH </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>

                                <div class=" modal-footer">
                                    <button>
                                        <type="button" class="button btn-sm" data-bs-dismiss="modal"> <b>TUTUP</b>
                                    </button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        $("#tombol-input").click(function() {
            $("#inputnya_tawar").modal("show")

        })

        // saat tombol pilih di klik 
        $(".tb-pilih").click(function() {

            meov = $(this)

            id_brg = meov.attr("id-brg")
            kd_brg = meov.attr("kd-brg")
            hrg_brg = meov.attr("hrg-brg")

            // alert(id_brg);
            // alert(kd_brg);
            // alert(hrg_brg);

            tr_new = `
            <tr>

            <td>${kd_brg}
            <input type ="hidden" class="form-control form-control-sm idbarang" value="${id_brg}" name="detail[${id_brg}][idbarang]">
            </td>

            <td>
                <input type="text" class="form-control harga" name="detail[${id_brg}][harga]">
            </td>
            
            </tr>`


            $("#tbody-input-tawar").append(tr_new)
        })


        // saat kode pelanggan di ganti
        $("#kdp").change(function() {
            // alert("ada masalah apaa? mampir yukkk")

            //deteksi value
            miw = $("#kdp").val();
            // alert(miw)

            //perintah ajax untuk minta data
            $.ajax({
                url: "<?= APLIKASI; ?>/tawar/ask_data/" + miw,
                dataType: "json",
                success: function(miw) {
                    // console.log(miw);

                    $("#alt").val(tae.pelanggan.alamat)
                }
            })
            $("#form").submit(
                function() {
                    $("tbody-input-tawar tr").each(function(index) {
                        tombol_diklik = $(this)
                        $(".idbarang, tombol_diklik").attr("name", 'tombol_diklik[' + index + '][idbarang]')
                        $(".harga, tombol_diklik").attr("name", 'tombol_diklik[' + index + '][harga]')
                    })

                }
            )
        })

        $("#form-inputtawar").submit(function(){
            x = "false"

            $("#penaw").removeClass("is-invalid")
            $("#alt").removeClass("is-invalid")
            $("#tgl").removeClass("is-invalid")

            // proses memeriksa
            if ($("#penaw").val() == '') {
                x = "not false"
                // alert ("yahhhhh")
                $("#penaw").addClass("is-invalid")
            }

            if ($("#alt").val() == '') {
                x = "not false"
                $("#alt").addClass("is-invalid")
            }

            if ($("#tgl").val() == '') {
                x = "not false"
                $("#tgl").addClass("is-invalid")
            }

           if (x == 'not fals') {
            return false
           }
        })
    })
</script>