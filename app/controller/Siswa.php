<?php
class siswa extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Siswa";
        $data['siswa'] = $this->model("Siswa_model")->getAllSiswa();
        $this->view('template/header',$data);
        $this->view('siswa/index', $data);
        $this->view('template/footer');
    }
    public function detail($id)
    {
        $data['judul'] = "Detail Siswa";
        $data['siswa'] = $this->model("Siswa_model")->getSiswaById($id);
        $this->view('template/header',$data);
        $this->view('siswa/detail', $data);
        $this->view('template/footer');
    }

    public function tambah()
    {
        if($this->model('Siswa_model')->tambahDataSiswa($_POST) > 0) {
            Flasher::setFlash(' berhasil', ' ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash(' gagal', ' ditambahkan', 'danger');
            header('location: ' . BASE_URL . '/siswa');
            exit;
        }
    }
    public function hapus($id)
    {
        if($this->model('Siswa_model')->hapusDataSiswa($id) > 0) {
            Flasher::setFlash(' berhasil', ' dihapus', 'success');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash(' gagal', ' dihapus', 'danger');
            header('location: ' . BASE_URL . '/siswa');
            exit;
        }
    }
    public function getubah()
    {
        echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
    }
    public function ubah()
    {
        if( $this->model('Siswa_model')->ubahDataSiswa($_POST) > 0 ) {
        Flasher::setFlash('berhasil', 'diubah', 'success');
        header('Location: ' . BASE_URL . '/siswa');
        exit;
        } else {
        Flasher::setFlash('gagal', 'diubah', 'danger');
        header('Location: ' . BASE_URL . '/siswa');
        exit;
        } 
    
    }
    public function cari()
    {
        $data['judul'] = "Data Siswa";
        $data['siswa'] = $this->model("Siswa_model")->cariDataSiswa();
        $this->view('template/header',$data);
        $this->view('siswa/index', $data);
        $this->view('template/footer');
    }
}