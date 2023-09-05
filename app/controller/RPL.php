<?php
class RPL extends Controller 
{
    public function index()
    {
        $data['judul'] = "RPL";
        // $data['kuliner'] = $this->model("Blog_model")->getAllBlog();
        $this->view('template/header', $data);
        $this->view('rpl/index', $data);
        $this->view('template/footer');


    }
}