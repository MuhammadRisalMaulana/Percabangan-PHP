<?php
function hitungBiayaFotokopi($jumlahLembar) {
    $biayaPerLembar = 0;

    if ($jumlahLembar <= 100) {
        $biayaPerLembar = 150;
    } elseif ($jumlahLembar <= 500) {
        $biayaPerLembar = 120;
    } else {
        $biayaPerLembar = 100;
    }

    $totalBiaya = $jumlahLembar * $biayaPerLembar;

    if ($totalBiaya > 200000) {
        $totalBiaya *= 0.90; // Diskon 10%
    } elseif ($totalBiaya > 100000) {
        $totalBiaya *= 0.95; // Diskon 5%
    }

    return $totalBiaya;
}

$jumlahLembar = 600; i
$totalBiaya = hitungBiayaFotokopi($jumlahLembar);
echo "Total biaya fotokopi untuk $jumlahLembar lembar adalah Rp" . number_format($totalBiaya, 0, ',', '.') . ".";
?>