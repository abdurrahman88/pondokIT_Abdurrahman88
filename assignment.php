<?php


$nilai= $_POST["nilai"];
if ($nilai>=0 && $nilai <= 29) {
	echo "anda mendapatkan nilai E";
} 
elseif ($nilai >= 30 && $nilai <= 59) {
	echo "anda mendapatkan nilai D";	
} 
elseif ($nilai >= 60 && $nilai <= 69) {
	echo "anda mendapatkan nilai C";	
} 
elseif ($nilai >= 70 && $nilai <= 79) {
	echo "anda mendapatkan nilai B";	
} 
elseif ($nilai >= 80 && $nilai <= 100) {
	echo "anda mendapatkan nilai A";	
} 
else {
	echo "nilai yang anda masukan tidak terdaftar";
}
echo <br><a href=""

?>