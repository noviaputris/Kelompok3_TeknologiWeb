<?php

class Home extends CI_Controller{
    public function index()
    {
        $data['judul'] = 'Home Side';
        $this->load->view('template/header', $data);
        $this->load->view('value'); 
        $this->load->view('template/footer');
    }
}