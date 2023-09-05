<?php
class DPIB extends Controller 
{
    public function index()
    {
        $data['judul'] = "DPIB";
        // $data['kuliner'] = $this->model("Blog_model")->getAllBlog();
        $this->view('template/header', $data);
        $this->view('dpib/index', $data);
        $this->view('template/footer');


    }
}