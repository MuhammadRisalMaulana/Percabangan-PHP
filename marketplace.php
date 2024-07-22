<?php
function hitungHargaAkhir($jumlahProduk, $hargaSatuan) {
    $total = $jumlahProduk * $hargaSatuan;

    if ($jumlahProduk > 20) {
        $total *= 0.80; // Diskon 20%
    } elseif ($jumlahProduk > 10) {
        $total *= 0.90; // Diskon 10%
    }

    $pengirimanGratis = $total > 500000;

    return array('total' => $total, 'pengirimanGratis' => $pengirimanGratis);
}

$jumlahProduk = 25; 
$hargaSatuan = 25000; 
$hasil = hitungHargaAkhir($jumlahProduk, $hargaSatuan);
echo "Total harga setelah diskon: Rp" . number_format($hasil['total'], 0, ',', '.') . ".<br>";
echo "Pengiriman gratis: " . ($hasil['pengirimanGratis'] ? "Ya" : "Tidak") . ".";
?>