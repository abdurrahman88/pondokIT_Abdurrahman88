<!DOCTYPE html>
<html>
<head>
	<title>belajar while foreach</title>
</head>
<body>
<h3>Belajar while foreach</h3>
<?php
$warna = array(
	"aflksf",
	"mobil",
	"motor",
	"beca",

	);
	

	foreach ($warna as $key =>$value) {
		echo "$key => $value <br>";
	}
?> 
</body>
</html>