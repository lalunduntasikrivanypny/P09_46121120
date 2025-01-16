<?php
class m_kirim
{
    private $dataku;
    private $x = "SELECT pengiriman.*, 
    master_penawaran.nomor_penawaran,master_penawaran.tgl_penawaran,
	master_pesanan.tgl_pesanan, master_pesanan.id_master_penawaran, 
    pelanggan.alamat,pelanggan.nama_pelanggan,pelanggan.kode_pelanggan,
    nana.total_pembayaran
    IFNULL(master_pesanan.id,'_') AS id_pesanan

    FROM pengiriman
    
    LEFT JOIN master_pesanan
    ON pengiriman.id_master_pesanan=master_pesanan.id
    
    LEFT JOIN master_penawaran
    ON master_pesanan.id_master_penawaran=master_penawaran.id

    LEFT JOIN pelanggan
    ON master_penawaran.id_pelanggan=pelanggan.id

    LEFT JOIN (
    SELECT detail_pesanan.id_master_pesanan,
    SUM(detail_pesanan.kuantitas*detail_pesanan.harga_barang) AS total_pembayaran
    FROM detail_pesanan
    GROUP BY detail_pesanan.id_master_pesanan)
    nana ON pengiriman.id_master_pesanan=nana.id_master_pesanan ";

    public function __construct()
    {
        $this->dataku  = new database;
    }

    public function all_data()
    {
        $sql = $this->x . " GROUP BY pengiriman.id ";
        $this->dataku->isi_sql($sql);
        $vany = $this->dataku->ambil_banyak_baris();
        return $vany;
    }

    public function based_id($data)
    {
        $sql = $this->x . " WHERE pengiriman.id= :x ";
        $this->dataku->isi_sql($sql);
        $this->dataku->isi_parameter("x", $data);

        $vany = $this->dataku->ambil_satu_baris();
        return $vany;
    }

    public function take_based_detail($data)
    {
        $sql = " SELECT pengiriman_modifikasi.*, pengiriman_modifikasi.kuantitas*pengiriman_modifikasi.harga_barang AS jumlah,
           penawaran_modifikasi.harga_barang AS harga_penawaran, penawaran_modifikasi.id_barang, nana.kode_barang, nana.harga_estimasi

           FROM (
            SELECT pengiriman.*, detail_pesanan.id AS id_detail, 
            detail_pesanan.id_barang, detail_pesanan.kuantitas,detail_pesanan.harga_barang,
            master_pesanan.id_master_penawaran
            
            FROM pengiriman
            
            LEFT JOIN detail_pesanan
            ON pengiriman.id_master_pesanan=detail_pesanan.id_master_pesanan
            
            LEFT JOIN master_pesanan
            ON pengiriman.id_master_pesanan=master_pesanan.id)
            pengiriman_modifikasi

            LEFT JOIN (
                SELECT id, kode_barang, harga_estimasi
                FROM barang)
                nana ON pengiriman_modifikasi.id_barang=nana.id

            LEFT JOIN (
                SELECT id_barang, id_master_penawaran, harga_barang 
                FROM detail_penawaran)
            penawaran_modifikasi
            ON pengiriman_modifikasi.id_master_penawaran=penawaran_modifikasi.id_master_penawaran 
            AND pengiriman_modifikasi.id_barang=penawaran_modifikasi.id_barang
        
            WHERE pengiriman_modifikasi.id= :x ";
            
        $this->dataku->isi_sql($sql);
        $this->dataku->isi_parameter("x", $data);

        $vany = $this->dataku->ambil_banyak_baris();
        return $vany;
    }


    public function save($nilaiku)
    {
        $sql = "INSERT INTO pengiriman(tgl_pengiriman, expedisi, id_master_pesanan) VALUES (:a, :b, :c)";
        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("a", $nilaiku['tglpengiriman']);
        $this->dataku->isi_parameter("b", $nilaiku['exp']);
        $this->dataku->isi_parameter("c", $nilaiku['idmasterpesanan']);
        $this->dataku->jalankan_sql();
    }

    public function edit($nilaiku)
    {
        $sql = "UPDATE pengiriman
        SET tgl_pengiriman= :a, expedisi= :b WHERE id= :x";
        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("a", $nilaiku['tglpengiriman']);
        $this->dataku->isi_parameter("b", $nilaiku['exp']);
        $this->dataku->isi_parameter("x", $nilaiku['id_pengiriman']);

        $this->dataku->jalankan_sql();
    }

    public function delete($nilaiku)
    {
        $sql = "DELETE FROM pengiriman WHERE id= :x";
        $this->dataku->isi_sql($sql);

        $this->dataku->isi_parameter("x", $nilaiku['id_pengiriman']);

        $this->dataku->jalankan_sql();
    }  
}
