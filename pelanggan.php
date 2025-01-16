<?php

class pelanggan extends controller
{
  public function daftar()
  {
    $this->periksa_hak_user('pelanggan_daftar');

    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
    $this->tampilkan_view("f_pelanggan/v_pelanggan_120", $jung);
  }

  public function tampil($ciaw)
  {
    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->based_data($ciaw);

    echo json_encode($jung);
    // $this->tampilkan_view("f_pelanggan/v_pelanggan_120", $jung);
  }

  public function input($ciaw)
  {
    $this->periksa_hak_user('pelanggan_ied');
    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->based_data($ciaw);

    echo json_encode($jung);
    // $this->tampilkan_view("f_pelanggan/v_pelanggan_120", $jung);
  }

  public function edit($ciaw)
  {
    $this->periksa_hak_user('pelanggan_ied');
    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->based_data($ciaw);

    echo json_encode($jung);
    // $this->tampilkan_view("f_pelanggan/v_pelanggan_120", $jung);
  }

  public function hapus($ciaw)
  {
    $this->periksa_hak_user('pelanggan_ied');
    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->based_data($ciaw);

    echo json_encode($jung);
    // $this->tampilkan_view("f_pelanggan/v_pelanggan_120", $jung);
  }

  public function proses_input()
  {
    // cetak_var($_POST);

    $this->gunakan_model("m_pelanggan")->save($_POST);
    
    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();

    echo json_encode($jung);
  }

  public function proses_edit()
  {
    $this->gunakan_model("m_pelanggan")->edit($_POST);

    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();

    echo json_encode($jung);
  }

  public function proses_delete()
  {
    $this->gunakan_model("m_pelanggan")->delete($_POST);

    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();

    echo json_encode($jung);
  }

  public function track_data($ciaw)
  {
    $jung = $this->gunakan_model("m_pelanggan")->select_data_kode_pelanggan($ciaw);
    echo json_encode($jung);
  }

  public function cetak()
  {
      $jung['pelanggan'] = $his->gunakan_model("m_pelanggan")->all_daa();
      // cetak_var($jung);

      // mengalihkan view (isi browser) ke dalam memory
      ob_start();

      $this->tampilkan_view("f_pelanggan/v_cetak_daftar_pelanggan_120", $jung);

      // memindahkan isi memory ke sebuah variabel (contoh variabel $x)
      $x = ob_get_contents();

      // menormalkan kembali agar browser dapat menghasilkan tampilkan
      ob_end_clean();

      // memanggil tools mpdf
      require_once '../../mpdf_8/vendor/autoload.php';

      //membuat sebuah file pdf
      $pdfku = new /Mpdf/Mpdf();

      // membuat sebuah file halaman dalam file pdf
      $pdfku->AddPage('L','','','','',5,5,5,5,0,0);

      // membuat isi file yang akan dimasukkan ke halaman yang telah disiapkan
      $isi_file = mb_convert_endcoding($x, 'UTF-8', 'UTF-8');

      // memasukkann isi file yang telah dibuat ke halaman yang telag disiapkan
      $pdfku->WrieHTML($isi_file);

      // menampilkan file pdf ke browser
      $pdfku->Output('daftar_pelanggan_file.pdf', /Mpdf/Output/Destination::INLINE);
  }

  public function cetak_satu($ciaw = " ")
  {
      $jung['palanggan'] = $this->gunakan_model("m_pelanggan")->based_id($ciaw);
      
      // echo json_encode($jung);
      $his->tampilkan_view("f_pelanggan/v_cetak_satu_pelanggan_120", $jung);
  }
}
