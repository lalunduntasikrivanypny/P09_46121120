<?php

class database
{
	private $nama_server = SERVER_DATABASE;
	private $nama_user =  USER_DATABASE;
	private $password_user = PASSWORD_USER;
	private $nama_database = NAMA_DATABASE;


	private $jembatan;
	private $kendaraan;

	private $tabel = '';


	public function __construct($tabel_masukan = "")
	{

		$this->tabel = $tabel_masukan;
		$identitas_koneksi = 'mysql:host=' . $this->nama_server . ';dbname=' . $this->nama_database;

		$option = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		try {
			$this->jembatan = new PDO($identitas_koneksi, $this->nama_user, $this->password_user, $option);
		} catch (PDOException $salahnya) {
			die($this->tampilkan_error($salahnya));
		}
	}

	public function isi_sql($perintah_sql)
	{
		$this->kendaraan = $this->jembatan->prepare($perintah_sql);
	}

	public function isi_parameter($param, $value, $type = null)
	{
		if (is_null($type)) {
			switch (true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}

		$this->kendaraan->bindValue($param, $value, $type);
	}


	public function jalankan_sql($data = null, $multi = false)
	{
		try {
			if ($data == null) {
				$this->kendaraan->execute();
			} else {
				if ($multi) {
					foreach ($data as $row) {
						$this->kendaraan->execute($row);
					}
				} else {
					$this->kendaraan->execute($data);
				}
			}
		} catch (PDOException $kesalahan) {
			//die('Ini kesalahannya: '.$kesalahan->getMessage());
			die($this->tampilkan_error($kesalahan));
		}
	}


	public function tampilkan_error($data = [])
	{
		require_once 'aplikasi/inti/page_error.php';
	}


	public function jumlah_baris_efek()
	{
		return $this->kendaraan->rowCount();
	}

	public function id_terinsert()
	{
		return $this->jembatan->lastInsertId();
	}

	public function ambil_banyak_baris()
	{
		$this->jalankan_sql();
		return $this->kendaraan->fetchAll(PDO::FETCH_ASSOC);
	}

	public function ambil_satu_baris()
	{
		$this->jalankan_sql();
		return $this->kendaraan->fetch(PDO::FETCH_ASSOC);
	}

	//update per tanggal Mei 2022
	public function ambil_semua($order = [])
	{

		if ($this->tabel == '') {
			return [[]];
		} else {
			$sql = "SELECT * FROM " . $this->tabel . ' ';

			$count_order = count($order);

			if ($count_order > 0) {
				$sql .= "ORDER BY ";
				$sql .= implode(", ", $order);
			}
			$this->isi_sql($sql);
			return $this->ambil_banyak_baris();
		}
	}

	//update per tanggal Mei 2022
	public function ambil_by_id($id = "")
	{

		if ($this->tabel == '') {
			return [];
		} else {

			$this->isi_sql("SELECT * FROM " . $this->tabel . " WHERE id= :id");
			$this->isi_parameter("id", $id);
			return $this->ambil_satu_baris();
		}
	}

	//update per tanggal Mei 2022
	public function ambil_satu_baris_tertentu($field, $value)
	{

		if ($this->tabel == '' or $field == '' or $value == '') {
			return [];
		} else {
			$this->isi_sql("SELECT * FROM " . $this->tabel . ' WHERE ' . $field . "= :" . $field);
			$this->isi_parameter($field, $value);
			return $this->ambil_satu_baris();
		}
	}

	//update per tanggal Mei 2022
	public function ambil_banyak_baris_tertentu($field, $value, $order = [])
	{

		if ($this->tabel == '' or $field == '' or $value == '') {
			return [[]];
		} else {

			$sql = "SELECT * FROM " . $this->tabel . " WHERE " . $field . "= :" . $field;

			$count_order = count($order);

			if ($count_order > 0) {
				$sql .= " ORDER BY ";
				$sql .= implode(", ", $order);
			}


			$this->isi_sql($sql);
			$this->isi_parameter($field, $value);
			return $this->ambil_banyak_baris();
		}
	}

	//update per tanggal Mei 2022
	public function jumlah_baris()
	{

		if ($this->tabel == '') {
			return -1;
		} else {
			$this->isi_sql("SELECT COUNT(*) AS jumlah FROM " . $this->tabel);
			return $this->ambil_satu_baris()['jumlah'];
		}
	}

	//update per tanggal Mei 2022
	public function jumlah_baris_tertentu($field = '', $value = '')
	{
		if ($this->tabel == '' or $field == '' or $value == '') {
			return -1;
		} else {

			$this->isi_sql("SELECT COUNT(*) AS jumlah FROM " . $this->tabel . " WHERE $field = :value");
			$this->isi_parameter("value", $value);
			return $this->ambil_satu_baris()['jumlah'];
		}
	}

	//update per tanggal Mei 2022
	public function tambah($fields_values = [], $getid = false)
	{
		if ($fields_values == []) {
			return -1;
		}

		$arr_field = array_keys($fields_values);
		$sql = "INSERT INTO " . $this->tabel . '( ' . implode(", ", $arr_field) . ') ';
		$sql .= 'VALUES (:' . implode(", :", $arr_field) . ')';

		$this->isi_sql($sql);

		foreach ($fields_values as $field => $value) {
			$this->isi_parameter($field, $value);
		}


		$this->jalankan_sql();

		if ($getid == false) {
			return $this->jumlah_baris_efek();
		} else {

			$efek_dan_id['status'] = $this->jumlah_baris_efek();
			$efek_dan_id['id'] = $this->id_terinsert();
			return $efek_dan_id;
		}
	}



	//update per tanggal Mei 2022
	public function update($fields_values = [], $fieldx = '', $valuex = '')
	{

		// isi array terakhir merupakan kriteria data yang akan diupdate
		if ($fields_values == []) {
			return -1;
		}

		$arr_field = array_keys($fields_values);
		$field_count = count($arr_field);
		$sql = "UPDATE " . $this->tabel . ' SET ';

		foreach ($arr_field as $jml => $field) {
			$sql .= $field . ' = :' . $field;
			if ($jml < ($field_count - 1)) $sql .= ', ';
		}

		if ($fieldx != '' && $valuex != "") {
			$sql .= " WHERE " . $fieldx . "= :" . $fieldx;
		}


		$this->isi_sql($sql);

		foreach ($fields_values as $field => $value) {
			$this->isi_parameter($field, $value);
		}

		if ($fieldx != '' && $valuex != "") {
			$this->isi_parameter($fieldx, $valuex);
		}

		$this->jalankan_sql();

		return $this->jumlah_baris_efek();
	}


	public function hapus($field = "", $value = "")
	{
		$sql = "DELETE FROM " . $this->tabel . " WHERE " . $field . "= :" . $field;

		$this->isi_sql($sql);
		$this->isi_parameter($field, $value);
		$this->jalankan_sql();

		return $this->jumlah_baris_efek();
	}
}
