<?php
class m_detail_tawar
{
    private $dataku;

    private $x = "SELECT detail_penawaran.*,barang.kode_barang,barang.harga_estimasi
        FROM detail_penawaran
        INNER JOIN barang
        ON detail_penawaran.id_barang=barang.id";

    public function __construct()
    {
        $this->dataku  = new database;
    }

    public function all_data()
    {
        $sql = $this->x . " ";
        $this->dataku->isi_sql($sql);
        $vany = $this->dataku->ambil_banyak_baris();
        return $vany;
    }

    public function based_id($data)
    {
        $sql = $this->x. " WHERE detail_penawaran.id_master_penawaran= :x ";

        $this->dataku->isi_sql($sql);
        $this->dataku->isi_parameter("x", $data);

        $vany = $this->dataku->ambil_banyak_baris();
        return $vany;
    }

    public function save ($nilaiku)
    {
        $sql = "INSERT INTO detail_penawaran(id_master_penawaran, id_barang, harga_barang) VALUES (:a, :b, :c)";
        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("a", $nilaiku['mtawar']);
        $this->dataku->isi_parameter("b", $nilaiku['idbarang']);
        $this->dataku->isi_parameter("c", $nilaiku['harga']);

        $this->dataku->jalankan_sql();
    }

    public function edit ($nilaiku)
    {
        $sql = "UPDATE detail_penawaran
        SET id_barang= :b , harga_barang= :c WHERE id= :x";
        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("a", $nilaiku['id_brg']);
        $this->dataku->isi_parameter("b", $nilaiku['hrg_brg']);
        $this->dataku->isi_parameter("x", $nilaiku['id_penawaran']);

        $this->dataku->jalankan_sql();
    }

    public function delete ($nilaiku)
    {
        $sql = "DELETE FROM detail_penawaran WHERE id_master_penawaran= :x";
        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("x", $nilaiku['id_penawaran']);
        
        $this->dataku->jalankan_sql();
    }
}
