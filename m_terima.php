<?php
class m_terima
{
    private $dataku;
    private $x = "SELECT master_pesanan.*,
    pelanggan.kode_pelanggan, pelanggan.nama_pelanggan, pelanggan.alamat,
    master_penawaran.nomor_penawaran,master_penawaran.tgl_penawaran,SUM(IFNULL(detail_pesanan.kuantitas,0)) AS total_pesanan,
     IFNULL(detail_pesanan.kuantitas * detail_pesanan.harga_barang,0) AS jumlah
     IFNULL(pengiriman.id,'_') AS id_master_pengiriman
     
   FROM master_pesanan
    LEFT JOIN master_penawaran
    ON master_pesanan.id_master_penawaran=master_penawaran.id
    LEFT JOIN pelanggan
    ON master_penawaran.id_pelanggan=pelanggan.id
    LEFT JOIN detail_pesanan
    ON master_pesanan.id=detail_pesanan.id_master_pesanan
    LEFT JOIN pengiriman
    ON master_pesanan.id=pengiriman.id_master_pesanan";

    public function __construct()
    {
        $this->dataku  = new database;
    }

    public function all_data()
    {
        $sql = $this->x . ' GROUP BY master_pesanan.id ';
        $this->dataku->isi_sql($sql);
        $vany = $this->dataku->ambil_banyak_baris();
        return $vany;
    }

    public function based_id($data)
    {
        $sql = $this->x . ' WHERE master_pesanan.id=:x  GROUP BY master_pesanan.id ';
        $this->dataku->isi_sql($sql);
        $this->dataku->isi_parameter("x", $data);
        $vany = $this->dataku->ambil_satu_baris();
        return $vany;
    }

    public function save($nilaiku)
    {
        $sql = "INSERT INTO master_pesanan(id_master_penawaran, tgl_pesanan) VALUES (:a, :b)";
        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("a", $nilaiku['master_penawaran']);
        $this->dataku->isi_parameter("b", $nilaiku['tglpesanan']);

        $this->dataku->jalankan_sql();
        $x = $this->dataku->id_terinsert();
        return $x;
    }

    public function edit($nilaiku)
    {
        $sql = "UPDATE master_pesanan 
        SET tgl_pesanan= :a WHERE id= :x";
        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("a", $nilaiku['tglpesanan']);
        $this->dataku->isi_parameter("x", $nilaiku['id_pesanan']);

        $this->dataku->jalankan_sql();
    }

    public function delete($nilaiku)
    {
        $sql = "DELETE FROM master_pesanan WHERE id= :x";
        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("x", $nilaiku['id_pesanan']);

        $this->dataku->jalankan_sql();
    }     
}
