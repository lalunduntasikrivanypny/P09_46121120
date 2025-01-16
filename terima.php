<?php

class terima extends controller
{
    public function index()
    {
        $this->periksa_hak_user('terima_daftar');

        $jung['terima'] = $this->gunakan_model("m_terima")->all_data();
        // cetak_var($jung);
        $this->tampilkan_view("f_terima/v_daftar_terima_118", $jung);
    }

    public function input($ciaw)
    {
        $this->periksa_hak_user('terima_ied');

        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        // $jung['barang'] = $this->gunakan_model("m_barang")->all_data();
        $jung['terimaid'] = $this->gunakan_model("m_tawar")->based_id($ciaw);
        $jung['detail_terima'] = $this->gunakan_model("m_detail_tawar")->based_id($ciaw);
        // cetak_var($jung);
        $this->tampilkan_view("f_terima/v_input_terima_120", $jung);
    }

    public function tampil($ciaw)
    {
        // $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        // $jung['barang'] = $this->gunakan_model("m_barang")->all_data();
        $jung['detail_terima'] = $this->gunakan_model("m_detail_terima")->based_id($ciaw);
        $jung['terimaid'] = $this->gunakan_model("m_terima")->based_id($ciaw);
        $this->tampilkan_view("f_terima/v_tampil_terima_120", $jung);
    }

    public function edit($ciaw)
    {
        $this->periksa_hak_user('terima_ied');

        // $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        // $jung['barang'] = $this->gunakan_model("m_barang")->all_data();
        $jung['detail_terima'] = $this->gunakan_model("m_detail_terima")->based_id($ciaw);
        $jung['terimaid'] = $this->gunakan_model("m_terima")->based_id($ciaw);
        // cetak_var($jung);
        $this->tampilkan_view("f_terima/v_edit_terima_120", $jung);
    }

    public function hapus($ciaw = " ")
    {
        $this->periksa_hak_user('terima_ied');

        // $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data($ciaw);
        // $jung['barang'] = $this->gunakan_model("m_barang")->all_data();
        $jung['detail_terima'] = $this->gunakan_model("m_detail_terima")->based_id($ciaw);
        $jung['terimaid'] = $this->gunakan_model("m_terima")->based_id($ciaw);
        $this->tampilkan_view("f_terima/v_hapus_terima_120", $jung);
    }

    public function ask_data($ciaw = " ")
    {
        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->based_data($ciaw);
        echo json_encode($jung);
    }

    // input pesanan
    public function proses_input()
    {
        // simpan master
        $jung = $this->gunakan_model("m_terima")->save($_POST);
        // cetak_var($_POST);

        foreach ($_POST['detail'] as $miw => $isi) :
            // cetak_var($isi);
            $isi['mterima'] = $jung;
            // cetak_var($isi);
            $this->gunakan_model("m_detail_terima")->save($isi);
        // // echo "simpanmi ini<br>";
        endforeach;

        if ($_POST['tglpesanan'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        header("location:" . APLIKASI . "/terima/index");
    
    }

    public function proses_edit()
    {
        // simpan master
        $jung = $this->gunakan_model("m_terima")->edit($_POST);
        // cetak_var($_POST);

        //simpan detail
        foreach ($_POST['detail_terima'] as $urutan => $isi) :
            $this->gunakan_model("m_detail_terima")->edit($isi);
        endforeach;
        header("location:" . APLIKASI . "/terima/index");
    }

    public function proses_delete()
    {
        // simpan master
        $jung = $this->gunakan_model("m_terima")->delete($_POST);
        $jung = $this->gunakan_model("m_detail_terima")->delete($_POST);
        // cetak_var($_POST);

        header("location:" . APLIKASI . "/terima");
    }

    public function cetak()
    {
        $jung['terima'] = $his->gunakan_model("m_terima")->all_daa();
        // cetak_var($jung);

        // mengalihkan view (isi browser) ke dalam memory
        ob_start();

        $this->tampilkan_view("f_terima/v_cetak_daftar_terima_120", $jung);

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
        $pdfku->Output('daftar_terima_file.pdf', /Mpdf/Output/Destination::INLINE);
    }

    public function cetak_satu($ciaw = " ")
    {
        // $jung['pelanggan'] = $this->gunakan_model('m_pelanggan")->all_data();
        // $jung['barang'] = $this->gunakan_model("m_barang")->all_data();
        $jung['detail_terima'] = $this->gunakan_model("m_detail_terimar")->based_id($ciaw);
        $jung['terimaid'] = $this->gunakan_model("m_terima")->based_id($ciaw);
        // cetak_var($jung);

        // mengalihkan view (isi browser) ke dalam memory
        //ob_start();

        $this->tampilkan_view("f_terima/v_cetak_satu_terima_120". $jung);

        // memindahkan isi memory ke sebuah variabel (contoh variavel $x)
        // $x = Ob_get_contents();

        // menormalkan kembali agar browser dapat menghasilkan tampilkan
        // ob_end_clean();

        // memanggil tools mpdf
        // require_once '../..mpdf_8/vendor/autoload.php';

         //membuat sebuah file pdf
         // $pdfku = new /Mpdf/Mpdf();

         // membuat sebuah file halaman dalam file pdf
         // $pdfku->AddPage('L','','','','',5,5,5,5,0,0);
 
         // membuat isi file yang akan dimasukkan ke halaman yang telah disiapkan
         // $isi_file = mb_convert_endcoding($x, 'UTF-8', 'UTF-8');
 
         // memasukkann isi file yang telah dibuat ke halaman yang telag disiapkan
         // $pdfku->WrieHTML($isi_file);
 
         // menampilkan file pdf ke browser
         // $pdfku->Output('daftar_barang_file.pdf', /Mpdf/Output/Destination::INLINE);
    }
}
