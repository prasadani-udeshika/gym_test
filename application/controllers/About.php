<?php


class About extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'About | KingKone';
        $data['content'] = 'about';

        $this->load->view('Template/template', $data);
    }

}