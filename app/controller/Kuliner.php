<?php
class Kuliner extends Controller 
{
    public function index()
    {
        $data['judul'] = "Kuliner";
        // $data['kuliner'] = $this->model("Blog_model")->getAllBlog();
        $this->view('template/header', $data);
        $this->view('kuliner/index', $data);
        $this->view('template/footer');


    }
}