<?php


class Contact extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Contact | KingKone';
        $data['content'] = 'contact';

        $this->load->view('Template/template', $data);
    }

}