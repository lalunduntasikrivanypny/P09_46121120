<?php

class home extends controller
{
	public function index()
	{
		// $_SESSION['a']= 1;
		if(!isset($_SESSION[SESIKU])){
			$this->tampilkan_view("halaman_login");
		} else{
			header("location:" . APLIKASI ."/dashboard");
		}
		
	}

	public function proses_login()
	{
		$info_user = $this->gunakan-model("m_user")->cari_data_user($_POST);

		if($info_user != false){
			$_SESSION[SESIKU] = $info_user['id'];
		}

		echo json_encode($info_user);
	}

	public function barang()
	{
		//menampilkan sebuah halaman penjualan
		$this->tampilkan_view("halaman_barang");
	}

	public function beli()
	{
		//menampilkan sebuah halaman pembelian
		$this->tampilkan_view("halaman_beli");
	}

	public function eror()
	{
		// menampilkan sebuah halaman pembelian
		$this->tampilkan_view("halaman_eror");
	}

	public function logout()
	{
		unset($_SESSION[SESIKU]);
		$this->index();
	}
}
