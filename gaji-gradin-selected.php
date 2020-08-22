<html>
	<body>
		<form method="POST" action="gaji-gradin-selected.php">
			Nama Karyawan <select name="nama" onchange="getNama(this)">
				<option value="0">pilih</option> 
				<option value="1">anton</option>
				<option value="2">andi</option>
				<option value="3">budi</option>
				<option value="4">nita</option>
				<option value="5">bagus</option>
			</select>
			<input type="submit" name="hitung" value="Hitung"/>
		</form>
		<?php
			
			$na ='';
			if(isset($_POST['nama'])){
				$na=$_POST['nama'];	
			}
			switch ($na) 
			{
				case 1 :$gaji = 8000000;break;
				case 2 :$gaji = 5000000;break;
				case 3 :$gaji = 11000000;break;
				case 4 :$gaji = 10000000;break;
				case 5 :$gaji = 2000000;break;
				default;
			}
			
			
			//bonus tambahan
			if ($na == 1)
				$tambahan = $gaji * 0.1; 
			 else if($na == 2)
				$tambahan = $gaji * 0.2 ;
			 else if($na == 3)
				$tambahan = $gaji * 0.1 ; 
			 else if($na == 4)
				$tambahan = $gaji * 0.1;
			 else if($na == 5)
				$tambahan = $gaji * 0.4;
			else{
				$tambahan =0;
			}
			
			
			//bonus level
			if ($na == 1)
				$bonus_level = 200000;
			else if($na == 2)
				$bonus_level = 500000;
			else if($na == 3)
				$bonus_level = 200000;
			else if($na == 4)
				$bonus_level = 1000000;
			else if($na == 5)
				$bonus_level = 500000;
			else{
				$bonus_level =0;
			}
			
			
			//potongan
			if($na == 1)
				$potongan = (($gaji + $tambahan) + $bonus_level) * 0.02;
			else if($na == 2)
				$potongan = (($gaji + $tambahan) + $bonus_level) * 0.025;
			else if($na == 3)
				$potongan = (($gaji + $tambahan) + $bonus_level) * 0.02;
			else if($na == 4)
				$potongan = (($gaji + $tambahan) + $bonus_level) * 0.03;
			else if($na == 5)
				$potongan = (($gaji + $tambahan) + $bonus_level) * 0.025;
			else{
				$potongan =0;
			}
			//nama pegawai
			
			if ($na == 1)
				$nama = 'Anton';
			else if ($na == 2)
				$nama = 'Andi';
			else if ($na == 3)
				$nama = 'Budi';
			else if ($na == 4)
				$nama = 'Nita';
			else if ($na == 5) 
				$nama = 'Bagus';
			else{
				$nama='';
			}
			
			//hitung gaji total
			
			switch ($na)
			{
				case 1 : $total_gaji = (($gaji + $tambahan) + $bonus_level) - $potongan; break;
				case 2 : $total_gaji = (($gaji + $tambahan) + $bonus_level) - $potongan; break;
				case 3 : $total_gaji = (($gaji + $tambahan) + $bonus_level) - $potongan; break;
				case 4 : $total_gaji = (($gaji + $tambahan) + $bonus_level) - $potongan; break;
				case 5 : $total_gaji = (($gaji + $tambahan) + $bonus_level) - $potongan; break;
			}
			
			if ($na != 0){
				echo "Nama $nama <br/> Total Gaji =  " .number_format($total_gaji);
				
			}else{
				echo "kosong <br/>";

				
			}
				
			
		?>
	<script type="text/javascript">
		function getNama(selectNama) {
			var value = selectNama.value;
			window.location.href = window.location.href.split("?")[0]+"nama"=+value;
		}
	</script>
	</body>

</html>