<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ProductModel');
       
    }

	public function index()
	{
	    $data['title'] = 'Home | Art Of Fit GYM';
	    $data['content'] = 'home';
	    // $data['Special'] = $this->ProductModel->getAllSeasonal();
	    $data['Flavors'] = $this->ProductModel->getAllUsers();

//	    var_dump($this->ReviewModel->getAllReviews()); die;

		$this->load->view('Template/template', $data);
	}
}
