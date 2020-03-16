<?php
$file="beranda.json";

$anggota=file_get_contents($file);

$data=json_decode($anggota,true);

foreach ($data as $key=>$d) {
	if($d['tanggal']===11){
		$data[$key]['bulan']='Anjay';
	}
}
$jsonfile=json_encode($data,JSON_PRETTY_PRINT);
$anggota=file_put_contents($file, $jsonfile);
?>
