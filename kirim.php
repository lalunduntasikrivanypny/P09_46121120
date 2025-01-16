<?php

class kirim extends controller
{
    public function index()
    {
        $this->periksa_hak_user('kirim_daftar');

        $jung['kirim'] = $this->gunakan_model("m_kirim")->all_data();
        // cetak_var($jung);
        $this->tampilkan_view("f_kirim/v_daftar_kirim_120", $jung);
    }


    public function input($ciaw=" ")
    {
        $this->periksa_hak_user('kirim_ied')

        // $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        // $jung['kirim'] = $this->gunakan_model("m_kirim")->based_id($ciaw);
        $jung['detail_terima'] = $this->gunakan_model("m_detail_terima")->based_id($ciaw);
        $jung['terimaid'] = $this->gunakan_model("m_terima")->based_id($ciaw);
        $this->tampilkan_view("f_kirim/v_input_kirim_120", $jung);
    }

    public function tampil($ciaw=" ")
    {
        $jung['kirim'] = $this->gunakan_model("m_kirim")->based_id($ciaw);
        $jung['kirimid'] = $this->gunakan_model("m_kirim")->take_based_detail($ciaw);
        // cetak_var($jung);
        $this->tampilkan_view("f_kirim/v_tampil_kirim_120", $jung);
    }

    public function edit($ciaw = " ")
    {
        

        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        $jung['kirim'] = $this->gunakan_model("m_kirim")->based_id($ciaw);
        $jung['kirimid'] = $this->gunakan_model("m_detail_terima")->based_id($ciaw);
        // cetak_var($jung);
        $this->tampilkan_view("f_kirim/v_edit_kirim_120", $jung);
    }

    public function hapus($ciaw = " ")
    {
        
        
        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        $jung['kirim'] = $this->gunakan_model("m_kirim")->based_id($ciaw);
        $jung['kirimid'] = $this->gunakan_model("m_detail_terima")->based_id($ciaw);
        // cetak_var($jung);
        $this->tampilkan_view("f_kirim/v_hapus_kirim_120", $jung);
    }

    public function ask_data($ciaw = " ")
    {
        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->based_data($ciaw);
        echo json_encode($jung);
    }

    // input kirim
    public function proses_input()
    {
       cetak_var($_POST);
        // $this->gunakan_model("m_kirim")->save($_POST);

        // header("location:" . APLIKASI . "/kirim");
    }

    public function proses_edit()
    {
        $this->gunakan_model("m_kirim")->edit($_POST);

        header("location:" . APLIKASI . "/kirim");
    }

    public function proses_delete()
    {
        $this->gunakan_model("m_kirim")->delete($_POST);

        header("location:" . APLIKASI . "/kirim");
    }

    public function cetak()
    {
        $jung['kirim'] = $his->gunakan_model("m_kirim")->all_daa();
        // cetak_var($jung);

        // mengalihkan view (isi browser) ke dalam memory
        ob_start();

        $this->tampilkan_view("f_kirim/v_cetak_daftar_kirim_120", $jung);

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
        $pdfku->Output('daftar_barang_file.pdf', /Mpdf/Output/Destination::INLINE);
    }

    public function cetak_satu($ciaw = " ")
    {
        $jung['kirim'] = $this->gunakan_model("m_kirim")->based_id($ciaw);
        $jung['kirimid'] = $this->gunakan_model("m_deail_terima")->based_id($ciaw);
        //cetak_var($jung);
        $his->tampilkan_view("f_kirim/v_cetak_satu_kirim_120", $jung);
    }
}
