<?php
include "admin/koneksi.php";

if (isset($_POST['update_keranjang'])) {
    $id_pesanan_arr = $_POST['id_pesanan'];
    $qty_arr = $_POST['qty'];

    foreach ($id_pesanan_arr as $index => $id_pesanan) {
        $id_pesanan = trim($id_pesanan); // bersihkan spasi jika ada
        $qty = (int)$qty_arr[$index];

        // Ambil harga produk
        $stmt_harga = $koneksi->prepare("
            SELECT pr.harga
            FROM tb_pesanan p
            JOIN tb_produk pr ON p.id_produk = pr.id_produk
            WHERE p.id_pesanan = ?
            LIMIT 1
        ");
        $stmt_harga->bind_param("s", $id_pesanan); // - gunakan 's' untuk string
        $stmt_harga->execute();
        $result_harga = $stmt_harga->get_result();

        if ($row_harga = $result_harga->fetch_assoc()) {
            $harga = (int)$row_harga['harga'];
            $total_baru = $qty * $harga;

            $stmt_update = $koneksi->prepare("UPDATE tb_pesanan SET qty = ?, total = ? WHERE id_pesanan = ?");
            $stmt_update->bind_param("iis", $qty, $total_baru, $id_pesanan); // ~ 'iis'
            $stmt_update->execute();
            $stmt_update->close();
        }

        $stmt_harga->close();
    }

        echo "<script>alert('Keranjang berhasil diperbarui!'); window.location.href='cart.php';</script>";
} else {
    header("Location: cart.php");
    exit;
}
?>
