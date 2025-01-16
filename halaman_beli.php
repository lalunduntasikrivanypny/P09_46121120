<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= ASET; ?>/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="<?= ASET; ?>/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?= ASET; ?>/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?= ASET; ?>/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="<?= ASET; ?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= ASET; ?>/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="<?= ASET; ?>/css/style.css" rel="stylesheet" />
    <link href="<?= ASET; ?>/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="<?= ASET; ?>/css/pace.min.css" rel="stylesheet" />


    <!--Theme Styles-->
    <link href="<?= ASET; ?>/css/dark-theme.css" rel="stylesheet" />
    <link href="<?= ASET; ?>/css/light-theme.css" rel="stylesheet" />
    <link href="<?= ASET; ?>/css/semi-dark.css" rel="stylesheet" />
    <link href="<?= ASET; ?>/css/header-colors.css" rel="stylesheet" />

    <title>Onedash - Bootstrap 5 Admin Template</title>
</head>

<body>


    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        <?php include("aplikasi/views/bagian/bagian_atas.php"); ?>
        <!--end top header-->

        <!--start sidebar -->
        <?php include("aplikasi/views/bagian/bagian_samping_kiri.php"); ?>
        <!--end sidebar -->

        <!--start content-->
        <main class="page-content">
            <!--breadcrumb-->
            <div class="row">

                <div class="col-6">
                    <div class="card">

                        <div class="card-body">

                            <div class="form-group">
                                <label for="">Nomor Penjualan</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group mt-3">
                                <label for="">Tanggal</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="form-group mt-3">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control">
                            </div>

                            <button class="btn-danger mt-3">ini tombol</button>

                        </div>

                    </div>

                </div>

                <div class="col-6">

                </div>

            </div>
            <!--end breadcrumb-->



        </main>
        <!--end page main-->


        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--start footer-->

        </footer>
        <!--end footer-->


        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        <!--start switcher-->
        <?php include("aplikasi/views/bagian/bagian_samping_kanan.php"); ?>
        <!--end switcher-->

    </div>
    <!--end wrapper-->


    <!-- Bootstrap bundle JS -->
    <script src="<?= ASET; ?>/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="<?= ASET; ?>/js/jquery.min.js"></script>
    <script src="<?= ASET; ?>/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="<?= ASET; ?>/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="<?= ASET; ?>/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="<?= ASET; ?>/js/pace.min.js"></script>
    <!--app-->
    <script src="<?= ASET; ?>/js/app.js"></script>


</body>

</html>