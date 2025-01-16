<?php
class model
{
  private $_db_kj;

  public function __call($name, $arguments)
  {
    echo '<pre>';
    echo '<p style="font-size:1rem">';
    echo 'Terdapat kesalahan!<br>';
    echo 'Penjelasan: <br>';

    $my = get_class($this);
    echo "Metode <b>$name() </b>tidak ditemukan dalam model $my";
    $YourBad = new BadMethodCallException();
    $BadFiles = $YourBad->getTrace();
    $BadFileName = $BadFiles[0]['file'];
    $BadFileLine = $BadFiles[0]['line'];

    echo '<br>';
    echo "Silahkan periksa pada file $BadFileName di baris $BadFileLine";
    echo '</p>';
    echo '</pre>';
    die;
  }

  public function atur_db($_db_child)
  {
    $this->_db_kj = $_db_child;
  }

  public function kj_ambil_semua($order = [])
  {
    return $this->_db_kj->ambil_semua($order);
  }

  public function kj_ambil_by_id($id)
  {
    return $this->_db_kj->ambil_by_id($id);
  }

  public function kj_ambil_satu_baris_tertentu($field, $value)
  {
    return $this->_db_kj->ambil_satu_baris_tertentu($field, $value);
  }

  public function kj_ambil_banyak_baris_tertentu($field, $value, $order = [])
  {
    return $this->_db_kj->ambil_banyak_baris_tertentu($field, $value, $order);
  }

  public function kj_jumlah_baris()
  {
    return $this->_db_kj->jumlah_baris();
  }

  public function kj_jumlah_baris_tertentu($field, $value)
  {
    return $this->_db_kj->jumlah_baris_tertentu($field, $value);
  }

  public function kj_tambah($fields_values = [], $getid = false)
  {
    return $this->_db_kj->tambah($fields_values, $getid);
  }

  public function kj_update($fields_values = [], $fieldx = '', $valuex = '')
  {
    return $this->_db_kj->update($fields_values, $fieldx, $valuex);
  }

  public function kj_hapus($field = "", $value = "")
  {
    return $this->_db_kj->hapus($field, $value);
  }
}
