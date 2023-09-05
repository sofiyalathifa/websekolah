<?php
class TKP extends Controller 
{
    public function index()
    {
        $data['judul'] = "TKP";
        // $data['kuliner'] = $this->model("Blog_model")->getAllBlog();
        $this->view('template/header', $data);
        $this->view('tkp/index', $data);
        $this->view('template/footer');


    }
}