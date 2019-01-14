<?php

Class Orang {
	public $nama = 'Anisa' ;
	public $jenisKelamin;

	public function makan()
	{
		return $this->nama.' sedang makan <br>';
	}
}

$saya = new orang;
$saya->nama = 'Anisa';
echo $saya->makan();

$saya->nama = 'Icha';
echo $saya->makan();