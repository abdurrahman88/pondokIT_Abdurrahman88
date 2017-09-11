<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>belajar loops dari bilangan genap</h3>



<?php
		$x = 0; 
		
		while ($x <= 10) {
			echo " ".($x);
			$x+=1;
		}
		echo("<br>");

		$y = 0;

		while ($y <= 10) {
			if ($y%1 == 0)	{
				echo " ".$y;
			}
			$y++;
		}

?>

</body>
</html>