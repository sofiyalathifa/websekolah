<?php
class TPTU extends Controller 
{
    public function index()
    {
        $data['judul'] = "TPTU";
        // $data['kuliner'] = $this->model("Blog_model")->getAllBlog();
        $this->view('template/header', $data);
        $this->view('tptu/index', $data);
        $this->view('template/footer');


    }
}