<?php
class TP extends Controller 
{
    public function index()
    {
        $data['judul'] = "TP";
        // $data['kuliner'] = $this->model("Blog_model")->getAllBlog();
        $this->view('template/header', $data);
        $this->view('tp/index', $data);
        $this->view('template/footer');


    }
}