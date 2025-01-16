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
                        <h2 align="center">DAFTAR PELANGGAN</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th scope="col">Kode Pelanggan</th>
                                    <th scope="col">Nama Pelanggan</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telp Pelanggan</th>
                                    <th scope="col">Frekuensi Penawaran </th>
                                    <th scope="col">Lihat </th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">Cetak</th>
                                </tr>
                            </thead>
                            <tbody id="body">
                                <?php foreach ($data['pelanggan'] as $miw => $isi) : ?>
                                    <tr class=";text-center">
                                        <td scope="row"><?= $isi['kode_pelanggan']; ?></td>
                                        <td><?= $isi['nama_pelanggan']; ?></td>
                                        <td><?= $isi['alamat']; ?></td>
                                        <td><?= $isi['no_telp_pelanggan']; ?></td>
                                        <td><?= $isi['frekuensi_penawaran']; ?></td>
                                        <td class="text-center">
                                            <button class="btn btn-light btn-sm tombol-lihat" datanya=<?= $isi['id'] ?>>LIHAT</button>
                                        </td>

                                        <td class="text-center">
                                            <button class="btn btn-warning btn-sm tombol-edit" datanyi=<?= $isi['id'] ?>>EDIT</button>
                                        </td>

                                        <td class="text-center">
                                            <button class="btn btn-dark btn-sm tombol-delete" datanyu=<?= $isi['id'] ?>>DELETE</button>
                                        </td>

                                        <td class="text-center">
                                            <a href="<?= APLIKASI; ?>/pelanggan/cetak_satu" button class="btn btn-dark btn-sm"> CETAK </button></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-dark btn-sm" id="tombol-tambah">TAMBAH</button>
                        <a href="<?= APLIKASI; ?>/pelanggan/cetak" button class="btn btn-dark btn-sm"> CETAK </button></a>
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

<!-- SCRIPT -->
<script>
    // script input
    $(document).ready(function() {
        $("#tombol-tambah").click(function() {
            $("#inputnya_daftarpelanggan").modal("show")
        })

        // script proses input
        $("#form-tambah").submit(function(pengiriman) {

            x = "false"
            $("#kodew").removeClass("is-invalid")
            $("#namaw").removeClass("is-invalid")
            $("#alamaw").removeClass("is-invalid")
            $("#kbw").removeClass("is-invalid")

            // proses memeriksa
            if ($("#kodew").val() == '') {
                x = "not false"
                $("#kodew").addClass("is-invalid")
            }

            if ($("#namaw").val() == '') {
                x = "not false"
                $("#namaw").addClass("is-invalid")
            }

            if ($("#alamaw").val() == '') {
                x = "not false"
                $("#alamaw").addClass("is-invalid")
            }

            if ($("#kbw").val() == '') {
                x = "not false"
                $("#kbw").addClass("is-invalid")
            }

            if (x == 'not false') {
            return false
            }

            // periksa key
            kode_dicari = $("#kodew").val()

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

            pengiriman.preventDefault();

            data_submit = new FormData($(this)[0])


            $.ajax({
                url: "<?= APLIKASI; ?>/pelanggan/proses_input/",
                data: data_submit,
                method: "post",
                dataType: "json",
                processData: false,
                contentType: false,
                success: function(x) {
                    // console.log(x);

                    $("#body").html('')

                    html_text = ''
                    $.each(x.pelanggan, function(miw, isi) {
                        html_text += `
                         <tr class="text-center">
                                        <td scope="row">${isi.kode_pelanggan}</td>
                                        <td>${isi.nama_pelanggan}</td>
                                        <td>${isi.alamat}</td>
                                        <td>${isi.no_telp_pelanggan}</td>
                                        <td>${isi.frekuensi_penawaran}</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-light btn-sm tombol-lihat" datanya=${isi.id}>LIHAT</button>
                                        </td>
                                        <td class="text-center">
                                            <button type="button"  class="btn btn-warning btn-sm tombol-edit" datanye=${isi.id}>EDIT</button>
                                        </td>
                                        <td class="text-center">
                                            <button type="button"  class="btn btn-danger btn-sm tombol-delete" datanyo=${isi.id}>DELETE</button>
                                        </td>
                                    </tr> `
                    })
                    // console.log(html_text);
                    $("#body").html(html_text)
                    // alert('dataaaaaaaaa')
                    $("#inputnya_daftarpelanggan").modal("hide")
                }
            })
        })

        // scipt lihat
        $("#body").on("click", ".tombol-lihat", function() {

            tombol_diklik = $(this)
            abc = tombol_diklik.attr("datanya")

            $.ajax({
                url: "<?= APLIKASI; ?>/pelanggan/tampil" + abc,

                dataType: "json",


                success: function(x) {
                    // console.log(x)

                    $("#kp").val(x.pelanggan.kode_pelanggan)
                    $("#np").val(x.pelanggan.nama_pelanggan)
                    $("#al").val(x.pelanggan.alamat)
                    $("#kb").val(x.pelanggan.no_telp_pelanggan)

                    $("#inputnya_lihatpelanggan").modal("show")
                },
            })

        })


        // script edit
        $("#body").on("click", ".tombol-edit")(function() {
            tombol_diklik = $(this)
            abc = tombol_diklik.attr("datanye")

            $.ajax({
                url: "<?= APLIKASI; ?>/pelanggan/edit" + abc,

                dataType: "json",


                success: function(x) {
                    console.log(x)

                    $("#kpl").val(x.pelanggan.kode_pelanggan)
                    $("#npl").val(x.pelanggan.nama_pelanggan)
                    $("#alm").val(x.pelanggan.alamat)
                    $("#kbs").val(x.pelanggan.no_telp_pelanggan)
                    $("#idp").val(x.pelanggan.id)

                    $("#inputnya_editpelanggan").modal("show")
                },
            })
        })

        // proses edit

        $("#form-edit").submit(function(pengiriman) {

            pengiriman.preventDefault();

            data_submit = new FormData($(this)[0])


            $.ajax({
                url: "<?= APLIKASI; ?>/pelanggan/proses_edit",
                data: data_submit,
                method: "post",
                dataType: "json",
                processData: false,
                contentType: false,
                success: function(x) {
                    console.log(x);

                    $("#body").html('')

                    html_text = ''
                    $.each(x.pelanggan, function(miw, isi) {
                        html_text += `
                         <tr class="text-center">
                                        <td scope="row">${isi.kode_pelanggan}</td>
                                        <td>${isi.nama_pelanggan}</td>
                                        <td>${isi.alamat}</td>
                                        <td>${isi.no_telp_pelanggan}</td>
                                        <td>${isi.frekuensi_penawaran}</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-light btn-sm tombol-lihat" datanya=${isi.id}>LIHAT</button>
                                        </td>
                                        <td class="text-center">
                                            <button type="button"  class="btn btn-warning btn-sm tombol-edit" datanye=${isi.id}>EDIT</button>
                                        </td>
                                        <td class="text-center">
                                            <button type="button"  class="btn btn-danger btn-sm tombol-delete" datanyo=${isi.id}>DELETE</button>
                                        </td>
                                    </tr> `
                    })
                    // console.log(html_text);
                    $("#body").html(html_text)
                    // alert('dataaaaaaaaa')
                    $("#inputnya_editpelanggan").modal("hide")
                }
            })
        })

        // script hapus
        $("#body").on("click", ".tombol-delete") function() {
            tombol_diklik = $(this)
            abc = tombol_diklik.attr("datanyo")

            $.ajax({
                url: "<?= APLIKASI; ?>/pelanggan/hapus" + abc,

                dataType: "json",


                success: function(x) {
                    console.log(x)

                    $("#kode").val(x.pelanggan.kode_pelanggan)
                    $("#nama").val(x.pelanggan.nama_pelanggan)
                    $("#alamat").val(x.pelanggan.alamat)
                    $("#telp").val(x.pelanggan.no_telp_pelanggan)
                    $("#aidi").val(x.pelanggan.id)

                    $("#inputnya_deletepelanggan").modal("show")
                },
            })
        }

        // proses delete

        $("#form-delete").submit(function(pengiriman) {

            pengiriman.preventDefault();

            data_submit = new FormData($(this)[0])


            $.ajax({
                url: "<?= APLIKASI; ?>/pelanggan/proses_delete/",
                data: data_submit,
                method: "post",
                dataType: "json",
                processData: false,
                contentType: false,
                success: function(x) {
                    console.log(x);

                    $("#body").html('')

                    html_text = ''
                    $.each(x.pelanggan, function(miw, isi) {
                        html_text += `
                         <tr class="text-center">
                                        <td scope="row">${isi.kode_pelanggan}</td>
                                        <td>${isi.nama_pelanggan}</td>
                                        <td>${isi.alamat}</td>
                                        <td>${isi.no_telp_pelanggan}</td>
                                        <td>${isi.frekuensi_penawaran}</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-light btn-sm tombol-lihat" rar="$(isi.id)">LIHAT</button>
                                        </td>
                                        <td class="text-center">
                                            <button type="button"  class="btn btn-warning btn-sm tombol-edit" rar="$(isi.id)">EDIT</button>
                                        </td>
                                        <td class="text-center">
                                            <button type="button"  class="btn btn-danger btn-sm tombol-delete" rar="$(isi.id)">DELETE</button>
                                        </td>
                                    </tr> `
                    })
                    // console.log(html_text);
                    $("#body").html(html_text)
                    // alert('dataaaaaaaaa')
                    $("#inputnya_deletepelanggan").modal("hide")
                }
            })
        })
</script>

<!-- ini modal input daftar -->

<div class="modal fade" id="inputnya_daftarpelanggan" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-md">
        <form action="" id="form-tambah">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 align="center" style="color:cyan">SILAHKAN INPUT PELANGGAN</h4>
                </div>

                <div class="modal-body">

                    <div class="form-group mb-4">
                        <label for="" style="color:black"><strong>Kode Pelanggan</strong></label>
                        <input type="text" class="form-control" name="kodew" id="kodew">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:black"><strong>Nama Pelanggan</strong></label>
                        <input type="text" class="form-control" name="namaw" id="namaw">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:black"><strong>Alamat</strong></label>
                        <input type="text" class="form-control" name="alamaw" id="alamaw">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:black"><strong>No Telp Pelanggan</strong></label>
                        <input type="text" class="form-control" name="kbw" id="kbw">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" data-bs-dismiss="modal">TAMBAH</button>
                    <button data-bs-dismiss="modal">TUTUP</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- ini modal lihat -->

<div class="modal fade" id="inputnya_lihatpelanggan" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <strong>SILAHKAN LIHAT^^</strong>
            </div>

            <div class="modal-body">

                <div class="form-group mb-4">
                    <label for="" style="color:coral"><strong>Kode Pelanggan</strong></label>
                    <input type="text" class="form-control" id="kp" readonly>
                </div>

                <div class="form-group mb-4">
                    <label for="" style="color:coral"><strong>Nama Pelanggan</strong></label>
                    <input type="text" class="form-control" id="np" readonly>
                </div>

                <div class="form-group mb-4">
                    <label for="" style="color:coral"><strong>Alamat</strong></label>
                    <input type="text" class="form-control" id="al" readonly>
                </div>

                <div class="form-group mb-4">
                    <label for="" style="color:coral"><strong>No Telp Pelanggan</strong></label>
                    <input type="text" class="form-control" id="kb" readonly>
                </div>


            </div>

            <div class="modal-footer">
                <button data-bs-dismiss="modal">SELESAI</button>
            </div>
        </div>
    </div>

</div>


<!-- ini modal edit -->

<div class="modal fade" id="inputnya_editpelanggan" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-md">
        <form action="" id="form-edit">
            <div class="modal-content">

                <div class="modal-header">
                    <strong>SILAHKAN EDIT^^</strong>
                </div>

                <div class="modal-body">
                    <input type="hidden" value="<?= $data["pelanggan"]["id"]; ?>" id="idp" name="id_pelanggan">

                    <div class="form-group mb-4">
                        <label for="" style="color:indianred"><strong>Kode Pelanggan</strong></label>
                        <input type="text" class="form-control" id="kpl" name="kp">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:indianred"><strong>Nama Pelanggan</strong></label>
                        <input type="text" class="form-control" id="npl" name="np">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:indianred"><strong>Alamat</strong></label>
                        <input type="text" class="form-control" id="alm" name="al">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:indianred"><strong>No Telp Pelanggan</strong></label>
                        <input type="text" class="form-control" id="kbs" name="kb">
                    </div>

                </div>

                <div class="modal-footer">
                    <div class="row">
                        <div class="col">
                            <button type="submit" data-bs-dismiss="modal">EDIT</button>
                        </div>

                        <div class="col">
                            <button data-bs-dismiss="modal">SELESAI</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

</div>

<!-- ini modal delete -->

<div class="modal fade" id="inputnya_deletepelanggan" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-md">
        <form action="" id="form-delete">
            <div class="modal-content">

                <div class="modal-header">
                    <strong> SILAHKAN HAPUS^^</strong>
                </div>

                <div class="modal-body">
                    <input type="hidden" value="<?= $data["pelanggan"]["id"]; ?>" id="aidi" name="id_pelanggan">

                    <div class="form-group mb-4">
                        <label for="" style="color:black"><strong>Kode Pelanggan</strong></label>
                        <input type="text" class="form-control" id="kode">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:black"><strong>Nama Pelanggan</strong></label>
                        <input type="text" class="form-control" id="nama">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:black"><strong>Alamat</strong></label>
                        <input type="text" class="form-control" id="alamat">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:black"><strong>No Telp Pelanggan</strong></label>
                        <input type="text" class="form-control" id="bisnis">
                    </div>


                </div>

                <div class="modal-footer">
                    <div class="row">
                        <div class="col">
                            <button data-bs-dismiss="modal">DELETE</button>
                        </div>

                        <div class="col">
                            <button data-bs-dismiss="modal">SELESAI</button>
                        </div>
                    </div>

                </div>
            </div>

        </form>

    </div>

</div>

<!-- ini script daftar -->
<script>
    // script input
    $(document).ready(function() {
        $("#tombol-tambah").click(function() {
            $("#inputnya_daftarpelanggan").modal("show")
        })

        // scipt lihat
        $(".tombol-lihat").click(function() {

            tombol_diklik = $(this)
            abc = tombol_diklik.attr("datanya")

            $.ajax({
                url: "http://localhost/46121120/P04_46121120/pelanggan/tampil/" + abc,

                dataType: "json",


                success: function(x) {
                    // console.log(x)

                    $("#kp").val(x.pelanggan.kode_pelanggan)
                    $("#np").val(x.pelanggan.nama_pelanggan)
                    $("#al").val(x.pelanggan.alamat)
                    $("#kb").val(x.pelanggan.no_telp_pelanggan)

                    $("#inputnya_lihatpelanggan").modal("show")
                },
            })


        })

        // script edit
        $(".tombol-edit").click(function() {

            tombol_diklik = $(this)
            abc = tombol_diklik.attr("datanye")

            $.ajax({
                url: "http://localhost/46121120/P04_46121120/pelanggan/edit/" + abc,

                dataType: "json",


                success: function(x) {
                    console.log(x)

                    $("#kpl").val(x.pelanggan.kode_pelanggan)
                    $("#npl").val(x.pelanggan.nama_pelanggan)
                    $("#alm").val(x.pelanggan.alamat)
                    $("#kbs").val(x.pelanggan.no_telp_pelanggan)
                    $("#idp").val(x.pelanggan.id)

                    $("#inputnya_editpelanggan").modal("show")
                },
            })


        })

        // script hapus
        $(".tombol-delete").click(function() {

            tombol_diklik = $(this)
            abc = tombol_diklik.attr("datanyu")

            $.ajax({
                url: "http://localhost/46121120/P04_46121120/pelanggan/hapus/" + abc,

                dataType: "json",


                success: function(x) {
                    console.log(x)

                    $("#kode").val(x.pelanggan.kode_pelanggan)
                    $("#nama").val(x.pelanggan.nama_pelanggan)
                    $("#alamat").val(x.pelanggan.alamat)
                    $("#telp").val(x.pelanggan.no_telp_pelanggan)

                    $("#inputnya_deletepelanggan").modal("show")
                },
            })


        })

    })
</script>


<script>
    $("#tombol-selesai").click(function() {
        $("#inputnya_editpelanggan").modal("hide")

    })
</script>


<!-- mkm -->
<div class="modal fade" id="inputnya_lihatpelanggan" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                SILAHKAN LIHAT
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
