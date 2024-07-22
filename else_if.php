<?php
date_default_timezone_set('Asia/Jakarta');
// Variabel jam
$jam = date("H");
echo "<h3>Contoh Seleksi Kondisi dengan if, else if, dan else</h3>";
echo "Saat ini adalah jam ".$jam."<br>";
if ($jam < 12) {
echo "Selamat Pagi!";
} elseif ($jam < 18) {
echo "Selamat Siang!";
} else {
echo "Selamat Malam!";
}
?>