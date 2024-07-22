<?php
$hari = date("l");
echo "<h3>Seleksi Kondisi dengan switch</h3>";
echo "Nilai variabel hari: ".$hari."<br>";
switch ($hari) {
case "Monday":
echo "Hari ini adalah Senin.";
break;
case "Tuesday":
echo "Hari ini adalah Selasa.";
break;
case "Wednesday":
echo "Hari ini adalah Rabu.";
break;
case "Thursday":
echo "Hari ini adalah Kamis.";
break;
case "Friday":
echo "Hari ini adalah Jumat.";
break;
case "Saturday":
echo "Hari ini adalah Sabtu.";
break;
case "Sunday":
echo "Hari ini adalah Minggu.";
break;
default:
echo "Hari tidak diketahui.";
}
?>