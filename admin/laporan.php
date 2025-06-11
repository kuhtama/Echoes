<?php
session_start();
include "koneksi.php";

// Cek apakah sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// Cek apakah status tersedia dan pastikan user adalah admin
if (!isset($_SESSION["sts"]) || $_SESSION["sts"] !== "admin") {
    echo "<script>
    alert('Akses ditolak! Halaman ini hanya untuk Admin.');
    window.location.href='login.php';
  </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Laporan - Echoes Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Echoes</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword" value="<?php echo isset($_GET['query']) ? htmlspecialchars($_GET['query']) : ''; ?>">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/shimarin.jpg" alt="Profile" class="rounded-circle">
                        <!-- profile-img.jpg diganti dengan foto kalian -->
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kukuh Putra</h6>
                            <span>Admin</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php">
                    <i class="bi-house-door"></i>
                    <span>Beranda</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="kategori.php">
                    <i class="bi-grid"></i>
                    <span>Kategori Produk</span>
                </a>
            </li><!-- End Kategori Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="produk.php">
                    <i class="bi-box"></i>
                    <span>Produk</span>
                </a>
            </li><!-- End Produk Page Nav -->

            <li class="nav-item">
                <a class="nav-link" href="keranjang.php">
                    <i class="bi bi-cart4"></i>
                    <span>Keranjang</span>
                </a>
            </li><!-- End Keranjang Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="transaksi.php">
                    <i class="bi bi-cash"></i>
                    <span>Transaksi</span>
                </a>
            </li><!-- End Transaksi Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="laporan.php">
                    <i class="bi-bar-chart"></i>
                    <span>Laporan</span>
                </a>
            </li><!-- End Laporan Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pengguna.php">
                    <i class="bi-person"></i>
                    <span>Pengguna</span>
                </a>
            </li><!-- End pengguna Page Nav -->
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Laporan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                    <li class="breadcrumb-item active">Laporan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="t_produk.php" class="btn btn-primary mt-3">
                            <i class="bi bi-plus-lg"></i> Tambah Data
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        // Hubungkan ke database
        include "koneksi.php";

        // Periksa koneksi
        if ($koneksi->connect_error) {
            die("Koneksi gagal: " . $koneksi->connect_error);
        }

        // Ambil data kategori
        $sqlKategori = "SELECT id_ktg, nm_ktg FROM tb_ktg";
        $resultKategori = $koneksi->query($sqlKategori);

        // Ambil total transaksi dari tb_jual
        $sqlTransaksi = "SELECT COUNT(*) AS total FROM tb_jual";
        $resultTransaksi = $koneksi->query($sqlTransaksi);

        // Ambil hasil dan cek apakah ada transaksi
        $dataTransaksi = $resultTransaksi->fetch_assoc();
        $adaTransaksi = ($dataTransaksi['total'] > 0);

        // Tutup koneksi
        $koneksi->close();
        ?>

        <section class="section">
            <section class="section">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cetak Laporan</h5>

                                <!-- Pilih Laporan -->
                                <div class="mb-3">
                                    <label class="form-label">Pilih Laporan</label>
                                    <select id="laporanSelect" class="form-select" onchange="updateTipeLaporan()">
                                        <option value="" selected disabled>Pilih Laporan</option>
                                        <option value="produk">Produk</option>
                                        <option value="transaksi">Transaksi</option>
                                    </select>
                                </div>

                                <!-- Pilih Tipe Laporan -->
                                <div class="mb-3">
                                    <label class="form-label">Pilih Tipe Laporan</label>
                                    <select id="tipeLaporanSelect" class="form-select">
                                        <option value="" selected disabled>Pilih Tipe Laporan</option>
                                        <option value="">All</option>
                                    </select>
                                </div>

                                <button id="btnCetak" class="btn btn-primary">Cetak PDF</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <script>
                function updateTipeLaporan() {
                    const laporanSelect = document.getElementById("laporanSelect").value;
                    const tipeLaporanSelect = document.getElementById("tipeLaporanSelect");

                    // Kosongkan opsi sebelumnya
                    tipeLaporanSelect.innerHTML = "";

                    if (laporanSelect === "produk") {
                        // Tambah opsi "All"
                        let optionAll = document.createElement("option");
                        optionAll.value = "all";
                        optionAll.textContent = "All";
                        tipeLaporanSelect.appendChild(optionAll);

                        // Tambah opsi kategori dari PHP
                        <?php if ($resultKategori->num_rows > 0): ?>
                            <?php while ($row = $resultKategori->fetch_assoc()): ?>
                                let option<?= $row['id_ktg'] ?> = document.createElement("option");
                                option<?= $row['id_ktg'] ?>.value = "<?= $row['id_ktg'] ?>";
                                option<?= $row['id_ktg'] ?>.textContent = "<?= $row['nm_ktg'] ?>";
                                tipeLaporanSelect.appendChild(option<?= $row['id_ktg'] ?>);
                            <?php endwhile; ?>
                        <?php endif; ?>

                    } else if (laporanSelect === "transaksi") {
                        // Tambah opsi "All" saja untuk transaksi
                        let optionAll = document.createElement("option");
                        optionAll.value = "all";
                        optionAll.textContent = "All";
                        tipeLaporanSelect.appendChild(optionAll);
                    }
                }

                document.getElementById("btnCetak").addEventListener("click", function() {
                    const laporan = document.getElementById("laporanSelect").value;
                    const tipe = document.getElementById("tipeLaporanSelect").value;

                    if (!laporan || !tipe) {
                        alert("Silakan pilih jenis laporan dan tipe laporan terlebih dahulu.");
                        return;
                    }

                    let url = "";

                    if (laporan === "produk") {
                        url = (tipe === "all") ?
                            "pdf_produk_all.php" :
                            "pdf_produk_kategori.php?id_ktg=" + tipe;
                    } else if (laporan === "transaksi") {
                        url = "pdf_transaksi.php";
                    }

                    // Buka PDF di tab baru
                    window.open(url, "_blank");
                });
            </script>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Echoes</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://instagram.com/ku_kuh11?igsh=OXo1MGNkdWI2YnB4">Kukuh Putra</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>