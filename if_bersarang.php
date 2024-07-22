<?php
// Deklarasi variabel 
$fase_turnamen = "semifinal"; // Nilai bisa berupa "penyisihan grup", "perempat final", "semifinal", atau "final"

$status_pertandingan = "seri" ;  // Nilai bisa berupa "menang", "seri", atau "kalah"

// Menggunakan nested if untuk menentukan rekomendasi tindakan

if ($fase_turnamen == "penyisihan grup") {
if ($status_pertandingan == "menang") {
echo "Menang di penyisihan grup. Lanjutkan!";
} elseif ($status_pertandingan == "seri") {
echo "Seri di penyisihan grup. Semangat!";
} else {
echo "Kalah di penyisihan grup. Evaluasi dan siap untuk 
berikutnya.";
}
} elseif ($fase_turnamen == "perempat final") {
if ($status_pertandingan == "menang") {
echo "Menang di perempat final. Lanjut ke semifinal!";
} elseif ($status_pertandingan == "seri") {
echo "Seri di perempat final. Siapkan adu penalti.";
} else {
echo "Kalah di perempat final. Apresiasi usaha tim.";
}
} elseif ($fase_turnamen == "semifinal") {
if ($status_pertandingan == "menang") {
echo "Menang di semifinal. Lanjut ke final!";
} elseif ($status_pertandingan == "seri") {
echo "Seri di semifinal. Siapkan adu penalti.";
} else {
echo "Kalah di semifinal. Apresiasi tim.";
}
} elseif ($fase_turnamen == "final") {
if ($status_pertandingan == "menang") {
echo "Menang di final. Juara Euro!";
} elseif ($status_pertandingan == "seri") {
echo "Seri di final. Siapkan adu penalti.";
} else {
echo "Kalah di final. Hargai usaha tim.";
}
} else {
echo "Fase turnamen tidak dikenali.";
}

?>