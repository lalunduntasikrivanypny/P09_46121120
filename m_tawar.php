<?php
class m_tawar
{
    private $dataku;
    private $x = "SELECT master_penawaran.*,
    pelanggan.kode_pelanggan, pelanggan.nama_pelanggan, pelanggan.alamat,
    ROUND(AVG(detail_penawaran.harga_barang),0) AS rata_rata_harga,
    COUNT(detail_penawaran.id_barang) AS jml_jenis_barang
    IFNULL (master_pesanan.id,'_') AS id_master_pesanan

     FROM master_penawaran
    LEFT JOIN pelanggan
    ON master_penawaran.id_pelanggan=pelanggan.id
    LEFT JOIN detail_penawaran
    ON master_penawaran.id=detail_penawaran.id_master_penawaran
    LEFT JOIN barang
    ON detail_penawaran.id_barang=barang.id
    LEFT JOIN master_pesanan
    ON master_penawaran.id = master_pesanan.id_master_penawaran";

    public function __construct()
    {
        $this->dataku  = new database;
    }

    public function all_data()
    {
        $sql = $this->x . " GROUP BY master_penawaran.id ";
        $this->dataku->isi_sql($sql);
        $vany = $this->dataku->ambil_banyak_baris();
        return $vany;
    }


    public function based_id($data)
    {
        $sql = $this->x . "  WHERE master_penawaran.id = :x ";
        $this->dataku->isi_sql($sql);
        $this->dataku->isi_parameter("x", $data);

        $vany = $this->dataku->ambil_satu_baris();
        return $vany;
    }

    public function save($nilaiku)
    {
        $sql = "INSERT INTO master_penawaran(nomor_penawaran, tgl_penawaran, id_pelanggan) VALUES (:a, :b, :c)";
        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("a", $nilaiku['penawaran']);
        $this->dataku->isi_parameter("b", $nilaiku['tgl']);
        $this->dataku->isi_parameter("c", $nilaiku['pelanggan']);

        $this->dataku->jalankan_sql();
        $x = $this->dataku->id_terinsert();
        return $x;
    }

    public function edit($nilaiku)
    {
        $sql = "UPDATE master_penawaran 
        SET nomor_penawaran= :a,  tgl_penawaran= :b, id_pelanggan= :c WHERE id= :x";
        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("a", $nilaiku['penawaran']);
        $this->dataku->isi_parameter("b", $nilaiku['tgl']);
        $this->dataku->isi_parameter("c", $nilaiku['pelanggan']);
        $this->dataku->isi_parameter("x", $nilaiku['id_mpenawaran']);

        $this->dataku->jalankan_sql();
    }

    public function delete($nilaiku)
    {
        $sql = "DELETE FROM master_penawaran WHERE id= :x";
        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("x", $nilaiku['hapus']);

        $this->dataku->jalankan_sql();
    }
}
