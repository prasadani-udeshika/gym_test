<?php


class BHome extends CI_Controller
{

    function __construct() {
        parent::__construct();

        $this->load->library('session');

        $User_Session = $this->session->userdata('User_Session');

        if ($User_Session == null) {
            redirect(base_url('BLogin/notLoggedIn'));
        }
    }

    public function index()
    {
        $data['title'] = "Dashboard | Art OF Fit Gym";
        $data['content'] = "Backend/Home/dashboard";

        $this->load->view('Backend/Template/template', $data);
    }

}