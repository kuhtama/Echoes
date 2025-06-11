<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once('koneksi.php');

// Fungsi query
function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Ambil ID kategori dari parameter URL dengan validasi
$id_ktg = isset($_GET['id_ktg']) ? $_GET['id_ktg'] : null;

if (!$id_ktg) {
    die("ID Kategori tidak ditemukan.");
}

// Amankan input dari user
$id_ktg = mysqli_real_escape_string($koneksi, $id_ktg);

// Query berdasarkan kategori
$data = query("
    SELECT 
        tb_produk.id_produk, 
        tb_produk.nm_produk, 
        tb_produk.harga, 
        tb_produk.stok, 
        tb_produk.ket AS desk, 
        tb_produk.gambar, 
        tb_ktg.nm_ktg 
    FROM tb_produk
    JOIN tb_ktg ON tb_produk.id_ktg = tb_ktg.id_ktg
    WHERE tb_produk.id_ktg = '$id_ktg'
");

// Buat instance MPDF
$mpdf = new \Mpdf\Mpdf();

// HTML awal
$html = '<html>
<head>
    <title>Laporan Data Produk per Kategori</title>
    <link rel="shortcut icon" href="../../../assets/images/logos/logo-makmur.ico" type="image/x-icon">
    <style>
        h1 {
            color: #262626;
        }
        table {
            max-width: 960px;
            margin: 10px auto;
            border-collapse: collapse;
        }
        thead th {
            font-weight: 400;
            background: #89a7a0;
            color: #FFF;
        }
        tr {
            background: #f4f7f8;
            border-bottom: 1px solid #FFF;
            margin-bottom: 5px;
        }
        tr:nth-child(even) {
            background: #e0eeef;
        }
        th, td {
            text-align: center;
            padding: 15px 13px;
            font-weight: 300;
            border: 1px solid #ccc;
        }
        img {
            width: 100px;
            height: 50px;
        }
    </style>
</head>
<body>
    <h1 align="center">Echoes</h1>
    <hr>
    <h1 align="center">LAPORAN PRODUK BERDASARKAN KATEGORI</h1>
    <table align="center" cellspacing="0">
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>';

// Isi tabel
foreach ($data as $row) {
    $formatted_harga = "Rp " . number_format($row["harga"], 0, ',', '.');
    $html .= '<tbody>
        <tr>
            <td>' . $row["id_produk"] . '</td>
            <td><img src="produk_img/' . $row["gambar"] . '" alt="Gambar"></td>
            <td>' . $row["nm_produk"] . '</td>
            <td>' . $row["nm_ktg"] . '</td>
            <td>' . $row["ket"] . '</td>
            <td>' . $formatted_harga . '</td>
            <td>' . $row["stok"] . '</td>
        </tr>
    </tbody>';
}

// Tutup HTML
$html .= '</table>
</body>
</html>';

// Tampilkan PDF
$mpdf->WriteHTML($html);
$mpdf->Output();
