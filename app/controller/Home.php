<?php
class Home extends Controller {
    public function index() {
        $data['judul'] = "Home";
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
    public function sejarah() {
        $data['judul'] = "sejarah";
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('template/header', $data);
        $this->view('home/sejarah', $data);
        $this->view('template/footer');
    }
    public function visi() {
        $data['judul'] = "visi";
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('template/header', $data);
        $this->view('home/visi', $data);
        $this->view('template/footer');
    }
    public function mpls() {
        $data['judul'] = "mpls";
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('template/header', $data);
        $this->view('home/mlps', $data);
        $this->view('template/footer');
    }
    public function gema() {
        $data['judul'] = "gema";
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('template/header', $data);
        $this->view('home/gema', $data);
        $this->view('template/footer');
    }
   
}