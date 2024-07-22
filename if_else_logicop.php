<?php
// Deklarasi variabel 
$nilai = 50;
$kehadiran = 80; // dalam persen
echo "<h3>Cek status kelulusan berdasar nilai dan kehadiran</h3>";
echo "Nilai: ".$nilai." dan kehadiran: ".$kehadiran."% <br>";
// Menggunakan pernyataan if dengan operator logika
if ($nilai >= 60 && $kehadiran >= 70) {
echo "Status <b>lulus</b>.";
} elseif ($nilai < 60 && $kehadiran > 90) {
echo "Status <b>lulus percobaan</b>.";
} else {
echo "Siswa <b>tidak lulus</b>.";
}
?>