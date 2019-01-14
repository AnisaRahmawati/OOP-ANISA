<?php
Class OrangTua {
	protected $nama = 'Anisa' ;
	protected $jenisKelamin = "Perempuan";

	public function setData($nm = 'Anisa', $jk = 'perempuan'){
		$this->nama = $nm;
		$this->jenisKelamin = $jk;
	}

	public function makan() {
		return "{$this->nama} sedang makan <br>";
	}
}

	Class AnakOrang extends OrangTua {
		public function biodata() {
			return "Nama : {$this->nama} <br>".
					"jenisKelamin : {$this->jenisKelamin} <br>".
					"===========================================<p>";
		}
	}

	$anak = new AnakOrang;
	$anak->setData();
	echo $anak->biodata();
	echo $anak->makan();