<?php
// $favcolor = "red";

// 	switch ($favcolor) {
// 		case 'red':
// 			echo "anda telah memilih warna merah";
// 			// break;
// 		case "blue":
// 			echo "anda telah memilih warna biru";
// 			break;
// 		case "green":
// 			echo "anda telah memilih warna hijau";
// 			break;
// 		default:
// 			echo "warna yang aanda masukan tidak terdaftar, coba lagi";
$nama_bulan = date("m");

	switch ($nama_bulan) {
		case "januari":
			echo "januari";
			break;
		case "febuari":
			echo "febuari";
			break;
		case "maret":
			echo "selasa";
			break;
		default:
			echo "Maaf anda salah memasukan data";
		}
?>
