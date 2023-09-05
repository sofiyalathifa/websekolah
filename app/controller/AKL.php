<?php
class AKL extends Controller 
{
    public function index()
    {
        $data['judul'] = "AKL";
        // $data['kuliner'] = $this->model("Blog_model")->getAllBlog();
        $this->view('template/header', $data);
        $this->view('akl/index', $data);
        $this->view('template/footer');


    }
}