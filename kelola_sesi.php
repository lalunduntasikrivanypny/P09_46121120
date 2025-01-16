<?php
class kelola_sesi
{
  public static function atur_sesi_pesan($isi_pesan = '', $jenis = '')
  {
    $_SESSION[SESIKU]['pesan'] = [
      'isi_pesan' => $isi_pesan,
      'jenis' => $jenis
    ];
  }

  public static function baca_sesi_pesan()
  {
    $isi = false;
    if (isset($_SESSION[SESIKU]['pesan'])) {
      $isi = $_SESSION[SESIKU]['pesan'];
      unset($_SESSION[SESIKU]['pesan']);
    }
    return $isi;
  }
}
