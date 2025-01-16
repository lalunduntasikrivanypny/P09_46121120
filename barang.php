<?php

class barang extends controller
{

    public function index()
    {

        $this->periksa_hak_user('barang_daftar');

        $jimm['barang'] = $this->gunakan_model("m_barang")->all_data();
        $this->tampilkan_view("f_barang/v_daftar_barang_118", $jimm);
    }


    public function input()
    {

        $this->periksa_hak_user('barang_ied');

        $this->tampilkan_view("f_barang/v_input_barang_118");
    }

    public function tampil($ciaw)
    {
        $jimm['barang'] = $this->gunakan_model("m_barang")->based_id($ciaw);
        $this->tampilkan_view("f_barang/v_tampil_barang_118", $jimm);
    }

    public function edit($ciaw)
    {

        $this->periksa_hak_user('barang_ied');

        $jimm['barang'] = $this->gunakan_model("m_barang")->based_id($ciaw);
        $this->tampilkan_view("f_barang/v_edit_barang_118", $jimm);
    }

    public function hapus($ciaw)
    {
        $this->periksa_hak_user('barang_ied');

        $jimm['barang'] = $this->gunakan_model("m_barang")->based_id($ciaw);
        $this->tampilkan_view("f_barang/v_hapus_barang_118", $jimm);
    }

    // buat metode baru
    public function proses_input()
    {
        // cetak_var($_POST);

        // jika di $_POST ada index kosong 
        // memeriksa isi di $_POST
        if ($_POST['kode_barang'] == "") {
            // mengalihkan ke halam eror
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['nama_barang'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['satuan'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['harga_estimasi'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['berat_bersih'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['kode_produksi'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        // periksa key 
        // jika data yang dicari di $_POST ada dalam tabel maka nilai $jimm adalah not false dan sebaliknya 
        $jimm = $this->gunakan_model("m_barang")->select_data_kode_barang($_POST['kode_barang']);
        if ($jimm != false) {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        // menyerahkan data ke model
        $this->gunakan_model("m_barang")->save($_POST);
        header("location:" . APLIKASI . "/barang");
    }

    public function proses_edit()
    {
        $jimm = $this->gunakan_model("m_barang")->edit($_POST);
        // cetak_var($yuno);

        header("location:" . APLIKASI . "/barang");
    }

    public function proses_delete()
    {
        $jimm = $this->gunakan_model("m_barang")->delete($_POST);
        // cetak_var($yuno);

        header("location:" . APLIKASI . "/barang");
    }

    public function track_data($ciaw)
    {
        $jimm = $this->gunakan_model("m_barang")->select_data_kode_barang($ciaw);
        echo json_encode($jimm);
    }

    public function cetak()
    {

        $jimm['barang'] = $this->gunakan_model("m_barang")->all_data();

        // mengalihkan view (isi browser) ke dalam memory
        ob_start();
        
        $this->tampilkan_view("f_barang/v_cetak_daftar_barang_118", $jimm);

        // memimdahkan isi memory ke sebuah variabel (contoh variabel $x)
        $x = ob_get_contents();

        // menormalkan kembali agar browser dapat menghasilkan tampilkan 
        ob_end_clean();

        // memanggil tools mpdf
        require_once '../../mpdf_8/vendor/autoload.php';

        // membuat sebuah file pdf
        $pdfku = new \Mpdf\Mpdf();

        // membuat sebuah file halaman dalam file pdf
        $pdfku->AddPage('L', '', '', '', '', 5, 5, 5, 5, 0, 0);

        // membuat isi file yg akan dimasukkan he kalaman yg telah disiapkan
        $isi_file = mb_convert_encoding($x, 'UTF-8', 'UTF-8');

        // memasukkan isi file yg telah dibuat ke halaman yang telah disiapkan
        $pdfku->WriteHTML($isi_file);

        // menampilkan file pdf ke browser
        $pdfku->Output('daftar_barang_file.pdf', \Mpdf\Output\Destination::INLINE);
    }

    public function cetak_satu($ciaw)
    {

        $jimm['barang'] = $this->gunakan_model("m_barang")->based_id($ciaw);

        // mengalihkan view (isi browser) ke dalam memory
        ob_start();

        $this->tampilkan_view("f_barang/v_cetak_satu_barang_118", $jimm);

        // memimdahkan isi memory ke sebuah variabel (contoh variabel $x)
        $x = ob_get_contents();

        // menormalkan kembali agar browser dapat menghasilkan tampilkan 
        ob_end_clean();

        // memanggil tools mpdf
        require_once '../../mpdf_8/vendor/autoload.php';

        // membuat sebuah file pdf
        $pdfku = new \Mpdf\Mpdf();

        // membuat sebuah file halaman dalam file pdf
        $pdfku->AddPage('L', '', '', '', '', 5, 5, 5, 5, 0, 0);

        // membuat isi file yg akan dimasukkan he kalaman yg telah disiapkan
        $isi_file = mb_convert_encoding($x, 'UTF-8', 'UTF-8');

        // memasukkan isi file yg telah dibuat ke halaman yang telah disiapkan
        $pdfku->WriteHTML($isi_file);

        // menampilkan file pdf ke browser
        $pdfku->Output('edit_barang_file.pdf', \Mpdf\Output\Destination::INLINE);
    }
}
