<?php

function tanggal_dmy($tanggal = '')
{
	$tanggal_hasil = '';
	if ($tanggal != '') {
		$tanggal_hasil = substr($tanggal, -2) . '-' . substr($tanggal, 5, 2) . '-' . substr($tanggal, 0, 4);
	}

	return $tanggal_hasil;
}

function tanggal_ymd($tanggal = '')
{
	$tanggal_hasil = '';
	if ($tanggal != '') {
		$tanggal_hasil = substr($tanggal, -4) . '-' . substr($tanggal, 3, 2) . '-' . substr($tanggal, 0, 2);
	}

	return $tanggal_hasil;
}


function cetak_var($var = [])
{
	echo "<pre>";
	print_r($var);
	echo "</pre>";
}

function acak_string($panjang = 3, $jenis = '')
{
	if ($jenis == "A") {
		$daftar_referensi = '0123456789';
	} else if ($jenis = "H") {
		$daftar_referensi = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	} else {
		$daftar_referensi = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	}

	$panjang_referensi = strlen($daftar_referensi);
	$hasil_acak = '';
	for ($i = 0; $i < $panjang; $i++) {
		$hasil_acak .= $daftar_referensi[rand(0, $panjang_referensi - 1)];
	}
	return $hasil_acak;
}
