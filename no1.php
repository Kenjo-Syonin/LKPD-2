<html>
	  <head>
	    <title>LKPD NO 1</title>
	  </head>
	  <body>   	

	<form method="post">
		<label for="teks">Masukkan Teks</label><br/>
		<input type="text" name="teks" id="teks"><br/>
		<input type="submit" value="cek">
	</form>
	<?php
	$teks = $_POST['teks'] ?? ''; 
	$onlyNumbers = preg_replace('/[^0-9]/', '', $teks);

	if ($onlyNumbers) {
		echo "Teks mengandung angka: " . $onlyNumbers;
	} else {
		echo "Teks tidak mengandung angka.";
	}  
	?>
	</body>
	</html>
	