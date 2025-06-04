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

  <title>Keranjang - Echoes Admin</title>
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
      <h1>Keranjang</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
          <li class="breadcrumb-item active">Keranjang</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Filter Kategori</h5>
              
              <?php
              include 'koneksi.php';

              $sql_kategori = "SELECT id_ktg, nm_ktg FROM tb_ktg";
              $result_kategori = $koneksi->query($sql_kategori);

              $filter_kategori = isset($_GET['kategori']) ? $_GET['kategori'] : '';
              ?>

              <form class="d-flex align-items-center mb-3" method="GET" action="">
                <select name="kategori" class="form-select me-2" style="max-width: 250px;">
                  <option value="">-- Semua Kategori --</option>
                  <?php
                  if ($result_kategori->num_rows > 0) {
                    while ($row = $result_kategori->fetch_assoc()) {
                      $selected = ($filter_kategori == $row['id_ktg']) ? "selected" : "";
                      echo "<option value='" . htmlspecialchars($row['id_ktg']) . "' $selected>" . htmlspecialchars($row['nm_ktg']) . "</option>";
                    }
                  }
                  ?>
                </select>
                <button type="submit" class="btn btn-primary">Filter</button>
                <?php if (!empty($filter_kategori)): ?>
                  <a href="keranjang.php" class="btn btn-secondary ms-2">Reset</a>
                <?php endif; ?>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Keranjang Pesanan</h5>
              
              <?php
              $sql = "SELECT p.id_pesanan, p.id_produk, pr.nm_produk, p.qty, p.total, u.username, k.nm_ktg
                      FROM tb_pesanan p
                      JOIN tb_user u ON p.id_user = u.id_user
                      JOIN tb_produk pr ON p.id_produk = pr.id_produk
                      JOIN tb_ktg k ON pr.id_ktg = k.id_ktg";

              // Tambahkan filter kategori jika ada
              if (!empty($filter_kategori)) {
                $filter_kategori_escaped = $koneksi->real_escape_string($filter_kategori);
                $sql .= " WHERE k.id_ktg = '$filter_kategori_escaped'";
              }

              $sql .= " ORDER BY p.id_pesanan DESC";

              // Eksekusi query
              $result = $koneksi->query($sql);

              // Jika query error, tampilkan pesan
              if (!$result) {
                echo "<div class='alert alert-danger'>Query Error: " . $koneksi->error . "</div>";
                exit;
              }
              ?>

              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Pesanan</th>
                      <th>Nama Produk</th>
                      <th>Kategori</th>
                      <th>Qty</th>
                      <th>Total</th>
                      <th>Username</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $total_keseluruhan = 0;
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        $total_keseluruhan += $row['total'];
                        echo "<tr>";
                        echo "<td>{$no}</td>";
                        echo "<td>{$row['id_pesanan']}</td>";
                        echo "<td>{$row['nm_produk']}</td>";
                        echo "<td>{$row['nm_ktg']}</td>";
                        echo "<td>{$row['qty']}</td>";
                        echo "<td>Rp " . number_format($row['total'], 0, ',', '.') . "</td>";
                        echo "<td>{$row['username']}</td>";
                        echo "</tr>";
                        $no++;
                      }
                      echo "<tr class='table-info'>";
                      echo "<td colspan='5'><strong>Total Keseluruhan</strong></td>";
                      echo "<td><strong>Rp " . number_format($total_keseluruhan, 0, ',', '.') . "</strong></td>";
                      echo "<td></td>";
                      echo "</tr>";
                    } else {
                      echo "<tr><td colspan='7' class='text-center'>Belum ada data pesanan</td></tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
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