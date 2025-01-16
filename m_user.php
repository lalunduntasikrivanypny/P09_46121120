<?php
class m_user
{
    private $dataku;

    public funcion __construck()
    {
        $this->dataku = new database;
    }

    public function cari_data_user($dari_control)
    {
        $sql = "SELECT * FROM users WHERE nama_user=:x AND password=:y ";
        $his->dataku->isi_sql($sql);
        $this->dataku->isi_parameter('x', $dari_control['usr']);
        $this->dataku->isi_parameter('y', $dari_control['psw']);
        return $this0>dataku->ambil_satu_baris();
    }

    public function choose_by_id($id_choosed)
    {
        $sql = "SELECT * FROM users WHERE id=:x ";
        $this->dataku->isi_sql($sql);
        $this->dataku->isi_parameter('x', $id_choosed);
        return $this->dataku->ambil_satu_baris();
    }
}