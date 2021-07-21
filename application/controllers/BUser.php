<?php


class BUser extends CI_Controller
{

    function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url', 'form');

        $User_Session = $this->session->userdata('User_Session');

        if ($User_Session == null) {
            redirect(base_url('BLogin/notLoggedIn'));
        }

        $this->load->model('ProductModel');
    }

    public function index()
    {
        $data['title'] = "Manage Customer | Art OF Fit Gym";
        $data['content'] = "Backend/Users/manageUser";

        $this->load->view('Backend/Template/template', $data);
    }

    public function addUser(){

        $rand_name = $this->genRandomString()."_".session_id()."_".time();

        $config['upload_path'] = './assets/img/User/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 3000;
        $config['max_width'] = 2500;
        $config['max_height'] = 2500;
        $config['file_name'] = $rand_name;

        $response = array();

        $this->load->library('upload', $config);

        if($this->ProductModel->isExistFlavour($this->input->post('txtCustomerName'))){

            if (!$this->upload->do_upload('txtCustomerImage')) {

                $error = $this->upload->display_errors();
                $response['error'] = $error;
                $master_data['customer_img'] = null;

            }else{
                $img = $this->upload->data();
                $master_data['customer_img'] = $img["file_name"];
            }

            $master_data['customer_name'] = $this->input->post('txtCustomerName');
            $master_data['customer_birthday'] = $this->input->post('txtCustomerBirthday');
            $master_data['customer_gender'] = $this->input->post('txtCustomerGender');
            $master_data['customer_nic'] = $this->input->post('txtCustomerNic');
            $master_data['customer_address'] = $this->input->post('txtCustomerAddress');
            $master_data['customer_email'] = $this->input->post('txtCustomerEmail');
            $master_data['customer_phone'] = $this->input->post('txtCustomerPhone');
            $master_data['customer_height'] = $this->input->post('txtCustomerHeight');
            $master_data['customer_weight'] = $this->input->post('txtCustomerWeight');
            $master_data['customer_description'] = $this->input->post('txtCustomerDescription');
            $master_data['customer_status'] = 0;


            $result = $this->ProductModel->addUser($master_data);
            if($result){
                $response['status'] = 200;
                $response['message'] = 'User has inserted successfully.!';

            }else{
                $response['status'] = 500;
                $response['message'] = 'Operation Failed.!';
            }

        }else{
            $response['status'] = 500;
            $response['message'] = 'User name is already exits.!';
        }

        echo json_encode($response);
    }

    function genRandomString()
    {
        $length = 5;
        $characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWZYZ";

        $real_string_length = strlen($characters) ;
        $string="id";

        for ($p = 0; $p < $length; $p++)
        {
            $string .= $characters[mt_rand(0, $real_string_length-1)];
        }

        return strtolower($string);
    }

    function getUsersForTable(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $param['draw'] = $this->input->get('draw');
        $param['length'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['columns'] = $this->input->get('columns');
        $param['search'] = $this->input->get('search[value]');
        $param['order'] = $this->input->get('order');

        echo json_encode($this->ProductModel->getUsers($param));
    }

    function deleteUser(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

        $imgData = $this->ProductModel->getFlavour($this->input->post('ID'));

        if($imgData[0]->customer_img != null){
            unlink('assets/img/User/'.$imgData[0]->customer_img);
        }

        $response['result'] = $this->ProductModel->deleteUser($this->input->post('ID'));

        echo json_encode($response);
    }

    function getUserData(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $result = $this->ProductModel->getFlavour($this->input->post('ID'));

        if($result != null){
            $response['status'] = 200;
            $response['data'] = $result;
        }else{
            $response['status'] = 500;
            $response['message'] = 'No fetching error.!';
        }

        echo json_encode($response);
    }

    function updateUser(){
        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

        $result = $this->ProductModel->updateUser(
            $this->input->post('txtUCustomerID'),
            $this->input->post('txtUCustomerName'),
            $this->input->post('txtUCustomerBirthday'),
            $this->input->post('txtUCustomerGender'),
            $this->input->post('txtUCustomerNic'),
            $this->input->post('txtUCustomerAddress'),
            $this->input->post('txtUCustomerEmail'),
            $this->input->post('txtUCustomerPhone'),
            $this->input->post('txtUCustomerHeight'),
            $this->input->post('txtUCustomerWeight'),
            $this->input->post('txtUCustomerDescription'),
            $this->input->post('cmbVisibility')
        );

        if ($result) {
            $response['status'] = 200;
            $response['message'] = 'User updated successfully.!';
        } else {
            $response['status'] = 500;
            $response['message'] = 'Operation failed.!';
        }

        echo json_encode($response);
    }
    

}