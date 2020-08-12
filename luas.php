<?php
	/**
	 * 
	 */
	class Lingkaran
	{
		const PHI = 3.14;
		var $r;	

		function __contruct($r){
			$this->r = $r; 
		}

		public function luasLingkaran()
		{
			return self::PHI * $this->r * $this->r;
		}

		public function kelilingLingkaran()
		{
			return self::PHI * (2 * $this->r);
		}


	}
		$lingkaran = new Lingkaran();
			echo "Luas Lingkaran adalah : ".$lingkaran->luasLingkaran()."<br/>";
			echo "Keliling Lingakaran adalah : ".$lingkaran->kelilingLingkaran()."<br/>";
?>