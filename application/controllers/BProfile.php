<?php  
class BProfile extends CI_Controller 
{
  public function __construct()
  {
  /*call CodeIgniter's default Constructor*/
  parent::__construct();

  /*load database libray manually*/
  $this->load->database();

  /*load Model*/
  $this->load->model('Profile_model');
  }
    /*Display*/
    public function displaydata()
  {
      $result['data']=$this->Profile_model->display_records();
      $this->load->view('display_records',$result);
  }
  public function index()
    {
        $data['title'] = "Manage Customer | Art OF Fit Gym";
        $data['content'] = "Backend/Users/userProfile";
        $data['data']=$this->Profile_model->display_records();

        $this->load->view('Backend/Template/template', $data);


    }	
}


?>