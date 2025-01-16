<?php
class m_detail_terima
{
    private $dataku;

    private $x = " SELECT pesanan_modifikasi.*, pesanan_modifikasi.kuantitas*pesanan_modifikasi.harga_barang AS jumlah,
    penawaran_modifikasi.harga_barang AS harga_penawaran, penawaran_modifikasi.id_barang, nana.kode_barang, nana.harga_estimasi
    
    FROM (
        SELECT detail_pesanan.*, master_pesanan.id_master_penawaran
        FROM detail_pesanan
        LEFT JOIN master_pesanan ON detail_pesanan.id_master_pesanan=master_pesanan.id)
        pesanan_modifikasi
        
        LEFT JOIN (
            SELECT id, kode_barang, harga_estimasi
            FROM barang)
            nana ON pesanan_modifikasi.id_barang=nana.id
            
            LEFT JOIN (
                SELECT id_barang, id_master_penawaran, harga_barang 
                FROM detail_penawaran)
                penawaran_modifikasi
                ON pesanan_modifikasi.id_master_penawaran=penawaran_modifikasi.id_master_penawaran
                AND pesanan_modifikasi.id_barang=penawaran_modifikasi.id_barang";

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
        $sql = $this->x . " WHERE pesanan_modifikasi.id_master_pesanan = :x ";
        $this->dataku->isi_sql($sql);
        $this->dataku->isi_parameter("x", $data);

        $vany = $this->dataku->ambil_banyak_baris();
        return $vany;
    }

    public function save($nilaiku)
    {
        $sql = "INSERT INTO detail_pesanan(id_master_pesanan, id_barang,kuantitas, harga_barang) VALUES (:a, :b, :c, :d)";
        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("a", $nilaiku['mterima']);
        $this->dataku->isi_parameter("b", $nilaiku['idbarang']);
        $this->dataku->isi_parameter("c", $nilaiku['kuan']);
        $this->dataku->isi_parameter("d", $nilaiku['harga']);


        $this->dataku->jalankan_sql();
    }

    public function edit($nilaiku)
    {
        $sql = "UPDATE detail_pesanan SET kuantitas=:a,harga_barang=:b WHERE id=:x";

        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("a", $nilaiku['qty']);
        $this->dataku->isi_parameter("b", $nilaiku['harga']);
        $this->dataku->isi_parameter("x", $nilaiku['idnya_detail']);

        $this->dataku->jalankan_sql();
    }

    public function delete($nilaiku)
    {
        $sql = "DELETE FROM detail_pesanan WHERE id_master_pesanan= :x";
        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("x", $nilaiku['id_pesanan']);

        $this->dataku->jalankan_sql();
    }

}
