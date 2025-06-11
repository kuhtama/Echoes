<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- molla/product.html  22 Nov 2019 09:54:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>detail produk - Echoes</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <!-- End .container -->
                    </div><!-- End .header-top -->

                    <div class="header-middle sticky-header">
                        <div class="container">
                            <div class="header-left">
                                <button class="mobile-menu-toggler">
                                    <span class="sr-only">Toggle mobile menu</span>
                                    <i class="icon-bars"></i>
                                </button>
                                <a href="index.php" class="logo">
                                    <span style="font-size: 50px; font-weight: bold; font-family: Arial, sans-serif;">Echoes</span>
                                </a>
                            </div><!-- End .header-left -->
                            <nav class="main-nav" style="flex: 1; text-align: center;">
                                <ul class="menu sf-arrows" style="display: inline-flex; gap: 30px; list-style: none; margin: 0; padding: 0;">
                                    <li><a href="index.php" class="sf-with-ul">Beranda</a></li>
                                    <li class="megamenu-container active"><a href="belanja.php" class="sf-with-ul">Belanja</a></li>
                                    <li><a href="contact.php" class="sf-with-ul">Hubungi Kami</a></li>
                                </ul>
                            </nav>
                            <div class="header-right d-flex align-items-center">
                                <div class="dropdown cart-dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="cart-count">2</span>
                                    </a>

                                    <!-- End .dropdown-menu -->
                                </div><!-- End .cart-dropdown -->
                                <div class="dropdown user-dropdown">
                                    <!-- Gunakan satu elemen untuk ikon dan toggle dropdown -->
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="User">
                                        <i class="icon-user"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="logout.php">Logout</a>
                                    </div>
                                </div>
                                </li>
                                </ul><!-- End .menu -->
                                </nav><!-- End .main-nav -->
                            </div><!-- End .header-left -->

                            <div class="header-right">
                                <div class="header-search">
                                    <form action="#" method="get">
                                        <div class="header-search-wrapper">
                                            <label for="q" class="sr-only">Search</label>
                                            <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                                        </div><!-- End .header-search-wrapper -->
                                    </form>
                                </div><!-- End .header-search -->
                                <div class="dropdown compare-dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">

                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="compare-products">
                                            <li class="compare-product">
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                <h4 class="compare-product-title"><a href="product.html">Blue Night Dress</a></h4>
                                            </li>
                                            <li class="compare-product">
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                <h4 class="compare-product-title"><a href="product.html">White Long Skirt</a></h4>
                                            </li>
                                        </ul>

                                        <div class="compare-actions">
                                            <a href="#" class="action-link">Clear All</a>
                                            <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
                                        </div>
                                    </div><!-- End .dropdown-menu -->
                                </div><!-- End .compare-dropdown -->

                                <div class="dropdown cart-dropdown">


                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-cart-products">
                                            <div class="product">
                                                <div class="product-cart-details">
                                                    <h4 class="product-title">
                                                        <a href="product.html">Beige knitted elastic runner shoes</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">1</span>
                                                        x $84.00
                                                    </span>
                                                </div><!-- End .product-cart-details -->

                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                                    </a>
                                                </figure>
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                            </div><!-- End .product -->

                                            <div class="product">
                                                <div class="product-cart-details">
                                                    <h4 class="product-title">
                                                        <a href="product.html">Blue utility pinafore denim dress</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">1</span>
                                                        x $76.00
                                                    </span>
                                                </div><!-- End .product-cart-details -->

                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                                    </a>
                                                </figure>
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                            </div><!-- End .product -->
                                        </div><!-- End .cart-product -->

                                        <div class="dropdown-cart-total">
                                            <span>Total</span>

                                            <span class="cart-total-price">$160.00</span>
                                        </div><!-- End .dropdown-cart-total -->

                                        <div class="dropdown-cart-action">
                                            <a href="cart.html" class="btn btn-primary">View Cart</a>
                                            <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .dropdown-cart-total -->
                                    </div><!-- End .dropdown-menu -->
                                </div><!-- End .cart-dropdown -->
                            </div><!-- End .header-right -->
                        </div><!-- End .container -->
                    </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="#">Prosucts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
                    </ol>

                    <!-- End .pager-nav -->
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                include "admin/koneksi.php";

                                //Ambil id_produk dari parameter GET atau POST
                                $id_produk = isset($_GET['id_produk']) ? $_GET['id_produk'] : 0;

                                //Perikssa apakah id_produk valid
                                if (!$id_produk) {
                                    die("<p>ID produk tidak di temukan. Silahkan cek kembali.</p>");
                                }

                                //Query untuk mendapatkan data produk dan kategori
                                $sql = "SELECT
                        p.id_produk,
                        p.nm_produk,        
                        p.harga,
                        p.stok,
                        p.ket,
                        p.gambar,
                        p.size,
                        k.nm_ktg AS kategori
                    FROM tb_produk p
                    JOIN tb_ktg k ON p.id_ktg =k.id_ktg
                    WHERE p.id_produk = ?";

                                $stmt = $koneksi->prepare($sql);

                                if (!$stmt) {
                                    die("<p>Kesalahan query: " . $koneksi->error . "</p>");
                                }

                                $stmt->bind_param("s", $id_produk);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                if ($result->num_rows > 0) {
                                    // Fetch data produk
                                    $produk = $result->fetch_assoc();
                                    $sizes = explode(",", (string)$produk['size']); // Pisahkan ukuran berdasarkan koma
                                ?>
                                    <div class="product-gallery product-gallery-vertical">
                                        <div class="row">
                                            <figure class="product-main-image">
                                                <img id="product-zoom" src="admin/produk_img/<?php echo htmlspecialchars($produk['gambar']); ?>" alt="product image">
                                            </figure>
                                            </figure><!-- End .product-main-image -->
                                        </div><!-- End .row -->
                                    </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details">
                                    <h1 class="product-title"><?php echo htmlspecialchars($produk['nm_produk']); ?></h1><!-- End .product-title -->

                                    <div class="ratings-container">
                                    </div><!-- End .ranting-container -->

                                    <div class="product-price">Rp. <?php echo number_format($produk['harga'], 0, ',', '.'); ?></div>

                                    <div class="product-content">
                                        <p><?php echo htmlspecialchars($produk['ket']); ?></p>
                                    </div><!-- End .product-content -->
                                    <form method="post">

                                        <div class="details-filter-row details-filter-row-size">
                                            <label for="size">Size:</label>
                                            <div class="select-custom">
                                                <select name="size" id="size" class="form-control">
                                                    <option value="#" selected="selected">Select a size</option>
                                                    <?php foreach ($sizes as $size) { ?>
                                                        <option value="<?php echo htmlspecialchars(strtolower($size)); ?>"><?php echo htmlspecialchars(strtoupper($size)); ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div><!-- End .select-custom -->
                                        </div><!-- End .details-filter-row -->

                                        <div class="details-filter-row details-filter-row-size">
                                            <label for="qty">Qty:</label>
                                            <div class="product-details-quantity">
                                                <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                            </div><!-- End .produk-detail-quantity -->
                                        </div><!-- End .details-filter-row -->


                                        <div class="product-details-action">
                                            <button type="submit" name="add_to_cart" class="btn-product btn-cart"><span>Keranjang</span></button>
                                        </div><!-- End .product-details-action -->
                                    </form>

                                    <?php

                                    if (isset($_POST['add_to_cart'])) {
                                        // Cek apakah user sudah login
                                        if (!isset($_SESSION['id_user'])) {
                                            echo "<script>alert('Anda harus login terlebih dahulu!'); window.location.href='user.php';</script>";
                                            exit;
                                        }

                                        // Ambil data dari form
                                        $qty = isset($_POST['qty']) ? (int)$_POST['qty'] : 1;
                                        $size = isset($_POST['size']) ? $_POST['size'] : '';
                                        $id_user = $_SESSION['id_user'];
                                        $total = $produk['harga'] * $qty;

                                        if ($qty > $produk['stok']) {
                                            echo "<script>alert('Stok tidak mencukupi. Stok tersedia hanya {$produk['stok']}');</script>";
                                        } else {
                                            // Generate ID pesanan baru
                                            $q = mysqli_query($koneksi, "SELECT MAX(id_pesanan) AS max_id FROM tb_pesanan");
                                            $d = mysqli_fetch_assoc($q);
                                            $last_id = $d['max_id'];

                                            if ($last_id) {
                                                $num = (int)substr($last_id, 1) + 1;
                                                $new_id = 'M' . str_pad($num, 3, '0', STR_PAD_LEFT);
                                            } else {
                                                $new_id = 'M001';
                                            }

                                            // Simpan ke tb_pesanan
                                            $stmt = $koneksi->prepare("INSERT INTO tb_pesanan (id_pesanan, id_produk, qty, size, total, id_user) VALUES (?, ?, ?, ?, ?, ?)");
                                            $stmt->bind_param(
                                                "ssisis",
                                                $new_id,
                                                $produk['id_produk'],
                                                $qty,
                                                $size,
                                                $total,
                                                $id_user
                                            );

                                            if ($stmt->execute()) {
                                                echo "<script>alert('Produk berhasil ditambahkan ke keranjang!'); window.location.href='cart.php';</script>";
                                            } else {
                                                echo "<p>Gagal menambahkan ke keranjang: " .
                                                    htmlspecialchars($stmt->error) . "</p>";
                                            }
                                        }
                                    }
                                    ?>

                                    <div calss="product-details-footer">
                                    </div class="product-cat">
                                    <span>Category:</span>
                                    <a href="a"><?php echo htmlspecialchars($produk['ktg']); ?></a>
                                </div><!-- End .product-catt -->
                            </div><!--End .product-dtails-footer -->
                        </div><!-- End .product-details -->
                    <?php
                                } else {
                                }
                                echo "<p>Produk tidak ditemukan di database.</p>"; {
                                }

                                $stmt->close();
                                $koneksi->close();
                    ?>
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->

            <div class="product-details-tab">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-desc-link" data-toggle="tab"
                            href="#product-desc-tab" role="tab" aria-controls="product-desc-tab"
                            aria-selected="true">Deskripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Stok</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                        <div class="product-desc-content">
                            <h3>Tentang Produk</h3>
                            <p><?php echo nl2br(htmlspecialchars($produk['ket'])); ?></p> <!-- Tampilkan deskripsi produk -->
                        </div><!-- End .product-desc-content -->
                    </div><!-- End .tab-pane -->
                    <div class="tab-pane fade" id="product-info-tab" role="tabpanel"
                        aria-labelledby="product-info-link">
                        <div class="product-desc-content">
                            <h3>Informasi Stok Produk</h3>
                            <p>Stok: <strong><?php echo htmlspecialchars($produk['stok']); ?></strong></p>
                            strong></p> <!-- Tampilkan stok produk -->
                        </div><!-- End .product-desc-content -->
                    </div><!-- End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .product-details-tab -->
            <?php
            include "admin/koneksi.php";
            $sql_related = "SELECT 
                    id_produk, 
                    nm_produk, 
                    harga, 
                    gambar 
                FROM tb_produk 
                WHERE id_produk != ? 
                ORDER BY RAND() 
                LIMIT 4";
            $stmt_related = $koneksi->prepare($sql_related);
            $stmt_related->bind_param("s", $id_produk);
            $stmt_related->execute();
            $result_related = $stmt_related->get_result();

            ?>
            <h2 class="title text-center mb-4">Produk Terkait</h2><!-- End .title text-center -->

            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
        "nav": false, 
        "dots": true,
        "margin": 20,
        "loop": false,
        "responsive": {
            "0": {
                "items":1
            },
            "480": {
                "items":2
            },
            "768": {
                "items":3
            },
            "992": {
                "items":4
            },
            "1200": {
                "items":4,
                "nav": true,
                "dots": false
            }
        }
    }'>
                <?php
                // Perulangan untuk menampilkan produk terkait
                if ($result_related->num_rows > 0) {
                    while ($related = $result_related->fetch_assoc()) {
                ?>
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="detail_produk.php?id_produk=<?php echo $related['id_produk']; ?>">
                                    <img src="admin/produk_img/<?php echo $related['gambar']; ?>" alt="<?php echo htmlspecialchars($related['nm_produk']); ?>" class="product-image">
                                </a>
                                <div
                                    class="product-action">
                                    <a href="cart.php?action=add&id_produk=<?php echo $related['id_produk'] ?? ''; ?>" class="btn-product btn-cart">
                                        <span>Keranjang</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Kategori</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title">
                                    <a href="detail_produk.php?id_produk=<?php echo $related['id_produk']; ?>">
                                        <?php echo htmlspecialchars($related['nm_produk']); ?>
                                    </a>
                                </h3><!-- End .product-title -->
                                <div class="product-price">
                                    Rp. <?php echo number_format($related['harga'], 0, ',', '.'); ?>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                <?php
                    }
                } else {
                    echo "<p>Produk terkait tidak tersedia.</p>";
                }
                ?>
            </div><!-- End .owl-carousel -->



            <div class="product-action-vertical">
                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
            </div><!-- End .product-action-vertical -->

            <div class="product-action">
                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
            </div><!-- End .product-action -->
            </figure><!-- End .product-media -->
            <!-- End .product-nav -->
    </div><!-- End .product-body -->
    </div><!-- End .product -->

    <div class="product product-7 text-center">
        <figure class="product-media">
            <span class="product-label label-out">Out of Stock</span>


            <!-- End .product -->
    </div><!-- End .owl-carousel -->
    </div><!-- End .container -->
    </div><!-- End .page-content -->
    </main><!-- End .main -->

    <footer class="footer">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget widget-about">
                            <span style="font-size: 30px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;">Echoes</span>
                            <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>

                            <div class="social-icons">
                                <a href="https://www.instagram.com/p/C6nojjlvDuZ/?igsh=MW04bmpjZ205dnd1eg==" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                                <a href="https://youtube.com/@muhammadilhamarifqi?si=wttshVSdheNGRoHx" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                            </div><!-- End .soial-icons -->
                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <!-- End .col-sm-6 col-lg-3 -->

                    <!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .footer-middle -->

        <div class="footer-bottom">
            <div class="container">
                <p class="footer-copyright">Copyright © 2019 Echoes Store. All Rights Reserved.</p><!-- End .footer-copyright -->
                <figure class="footer-payments">
                    <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
                </figure><!-- End .footer-payments -->
            </div><!-- End .container -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Sticky Bar -->
    <div class="sticky-bar">
        <div class="container">
            <!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .sticky-bar -->

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
            </form>


        </div><!-- End .row -->
    </div><!-- End .form-choice -->
    </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->
    </div><!-- End .form-tab -->
    </div><!-- End .form-box -->
    </div><!-- End .modal-body -->
    </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.elevateZoom.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/product.html  22 Nov 2019 09:55:05 GMT -->

</html>