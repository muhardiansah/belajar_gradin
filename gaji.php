<html>
<body>
	<form method= "post" action="gaji.php">
		Golongan: <select name="golongan">
		<option value="1">I</option>
		<option value="2">II</option>
		<option value="3">III</option>
		</select>
		<br><br>
		<input type="submit" name="hitung" value="HITUNG">
	</form>
<?php
	$gol = $_POST["golongan"];
	//Filter Gaji Pokok menggunakan switch case
	switch ($gol)
	{
		case 1: $gapok = 500000; break;
		case 2: $gapok = 750000; break;
		case 3: $gapok = 1000000; break;
		default;
	}
	//Filter Tunjangan menggunakan if 
	if ($gol == 1)
		$tunjangan = 175000;
	else if ($gol == 2)
		$tunjangan = 155000;
	else
		$tunjangan = 146000;
	//Filter Potongan menggunakan if
	if ($gol == 1)
		$potongan = $gapok * 0.1;
	else if ($gol == 2)
		$potongan = $gapok * 0.075;
	else
		$potongan = $gapok * 0.05;

	//ngitung gaji menggunakan switch case
	switch ($gol)
	{
	case 1: $total=$gapok + $tunjangan + $potongan; break;
	case 2: $total=$gapok + $tunjangan + $potongan; break;
	case 3:	$total=$gapok + $tunjangan + $potongan; break;
		default;
	}
	echo "Gaji Pokok : $gapok <br>
	Tunjangan : $tunjangan <br>
	Potongan : $potongan <br>
	Total Gaji : $total ";
	//yang bikin saya bingung, variable potongan tapi rumusnya malah nambahun gaji
	?>

	</body>
	</html>