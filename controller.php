<?php
class controller
{
	public $info_user;

	public function _construck()
	{
		$nama_conrol_pemanggil = ge_called_class();

		if ($nama_conrol_pemanggil != 'home') {
			if (!isset($_SESSION[SESIKU])) {
				header("locaion:" . APLIKASI . "/home");
				die;
			}

			$id = $_SESSION[SESIKU];
			$his->info_user = $this->gunakan_model("m_user")->choose_by_($id);
			// cetak_var($info_user);
			// die;
		}
	}

	public function periksa_hak_user($user_diperiksa)
	{
		if ($gis->info_user[$user_diperiksa] != 1) {
			header("location:" . APLIKASI . "/home");
		}
	}


	// Function "tampilkan_view" merupakan function
	// yang digunakan untuk menampilkan file view 
	// yang tersimpan di folder view
	// Penamaan function tersebut (tampilkan_view) dapat diganti
	public function tampilkan_view($file_view, $data = [])
	{
		if (!$this->checkviewmodel($file_view, 'v')) {
			die;
		}

		require_once 'aplikasi/views/' . $file_view . '.php';
	}

	// Function "gunakan_model" merupakan function
	// yang digunakan untuk menggunakan file model 
	// yang tersimpan di folder model
	// Penamaan function tersebut (gunakan_model) dapat diganti
	public function gunakan_model($nama_file_model)
	{
		if (!$this->checkviewmodel($nama_file_model, "m")) {
			die;
		}

		require_once 'aplikasi/model/' . $nama_file_model . '.php';
		$split_file = explode('/', $nama_file_model);
		$jml_split_file = count($split_file);
		$class_model = $split_file[$jml_split_file - 1];

		return new $class_model;
	}


	private function checkviewmodel($file = '', $type = '')
	{

		$result = true;

		if (CEK_VIEW_MODEL) {
			$control = get_called_class();
			$vm = "";
			if ($type == "m") {
				$vm = "model";
			} else if ($type == "v") {
				$vm = "views";
			}


			if (!file_exists("aplikasi/$vm/" . $file . '.php')) {
				$control = get_called_class();
				echo '<pre>';
				echo '<p style="font-size:1rem">';
				echo 'Terdapat kesalahan!<br>';
				echo 'Penjelasan: <br>';
				echo "<b>File $vm $file.php tidak ditemukan</b>";
				echo '<br>';
				echo "periksa file control: $control";
				echo '</p>';
				echo '</pre>';
				$result = false;
			}
		}
		return $result;
	}

	// Function cetak_var merupakan function yang digunakan 
	// untuk menampilkan nilai sebuah varibel
	public function cetak_var($var = [])
	{
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}

	// Function-function berikut merupakan function yang dapat dikreasikan
	// bahkan dihapus jika tidak diperlukan pada aplikasi
	public function tanggal_dmy($tanggal = '')
	{
		$tanggal_hasil = '';
		if ($tanggal != '') {
			$tanggal_hasil = substr($tanggal, -2) . '-' . substr($tanggal, 5, 2) . '-' . substr($tanggal, 0, 4);
		}

		return $tanggal_hasil;
	}

	public function tanggal_ymd($tanggal = '')
	{
		$tanggal_hasil = '';
		if ($tanggal != '') {
			$tanggal_hasil = substr($tanggal, -4) . '-' . substr($tanggal, 3, 2) . '-' . substr($tanggal, 0, 2);
		}

		return $tanggal_hasil;
	}

	// Nama-nama function yang di dalam file ini tidak dapat lagi digunakan
	// saat membuat function controller	

}
