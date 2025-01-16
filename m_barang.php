<?php
class m_barang
{
	private $dataku;
	private $x = "SELECT barang.*, 
	IFNULL(dataku.harga_penawaran,0) AS harga_penawaran,
	IFNULL(vany.kuantitas,0) AS kuantitas
	FROM barang
		LEFT JOIN (
			SELECT detail_penawaran.id_barang, ROUND(AVG(detail_penawaran.harga_barang)) AS harga_penawaran
			FROM detail_penawaran
			GROUP BY detail_penawaran.id_barang)
			dataku ON barang.id=dataku.id_barang
			LEFT JOIN (
				SELECT detail_pesanan.id_barang, SUM(detail_pesanan.kuantitas) AS kuantitas
				FROM barang
				LEFT JOIN detail_pesanan
				ON barang.id=detail_pesanan.id_barang
				GROUP BY detail_pesanan.id_barang)
				vany ON barang.id=vany.id_barang";

	public function __construct()
	{
		$this->dataku  = new database;
	}

	public function all_data()
	{
		$sql = $this->x . '';
		$this->dataku->isi_sql($sql);
		$vany = $this->dataku->ambil_banyak_baris();
		return $vany;
	}

	public function based_id($nilai)
	{
		$sql = $this->x . ' WHERE id= :x ';
		$this->dataku->isi_sql($sql);
		$this->dataku->isi_parameter("x", $nilai);

		$vany = $this->dataku->ambil_satu_baris();
		return $vany;
	}


	public function save($nilaiku)
	{
		$sql = "INSERT INTO barang(kode_barang, nama_barang, satuan, harga_estimasi, merek, sheet) VALUES (:a, :b, :c, :d, :e, :f)";
		$this->dataku->isi_sql($sql);

		$this->dataku->isi_parameter("a", $nilaiku['kode_barang']);
		$this->dataku->isi_parameter("b", $nilaiku['nama_barang']);
		$this->dataku->isi_parameter("c", $nilaiku['satuan']);
		$this->dataku->isi_parameter("d", $nilaiku['harga_estimasi']);
		$this->dataku->isi_parameter("e", $nilaiku['merek']);
		$this->dataku->isi_parameter("f", $nilaiku['sheet']);

		$this->dataku->jalankan_sql();
	}

	public function edit($nilaiku)
	{
		$sql = "UPDATE barang SET kode_barang= :a, nama_barang= :b, satuan= :c, harga_estimasi= :d, merek= :e, sheet= :f WHERE id= :x";
		$this->dataku->isi_sql($sql);

		$this->dataku->isi_parameter("a", $nilaiku['kode_barang']);
		$this->dataku->isi_parameter("b", $nilaiku['nama_barang']);
		$this->dataku->isi_parameter("c", $nilaiku['satuan']);
		$this->dataku->isi_parameter("d", $nilaiku['harga_estimasi']);
		$this->dataku->isi_parameter("e", $nilaiku['merek']);
		$this->dataku->isi_parameter("f", $nilaiku['sheet']);
		$this->dataku->isi_parameter("x", $nilaiku['id_barang']);

		$this->dataku->jalankan_sql();
	}

	public function delete($nilaiku)
	{
		$sql = "DELETE FROM  barang WHERE id= :x";
		$this->dataku->isi_sql($sql);

		$this->dataku->isi_parameter("x", $nilaiku['id_barang']);

		$this->dataku->jalankan_sql();
	}

	public function select_data_kode_barang($cari_kode_barang)
	{
		$sql = $this->x . 'WHERE barang.kode_barang= :x ';
		$this->dataku->isi_sql($sql);
		$this->dataku->isi_parameter("x", $cari_kode_barang);

		$vany = $this->dataku->ambil_satu_baris();
		return $vany;
	}
}
