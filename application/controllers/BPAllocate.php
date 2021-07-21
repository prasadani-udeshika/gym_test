<?php


class BPAllocate extends CI_Controller
{

    function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url', 'form');

        $User_Session = $this->session->userdata('User_Session');

        if ($User_Session == null) {
            redirect(base_url('BLogin/notLoggedIn'));
        }

        $this->load->model('PAllocate_model');
    }

    public function index()
    {
        $this->load->model('payment_model'); # <- add this
        $this->payment_model->select_payment();
        $data['data1']=$this->payment_model->select_payment();

         $this->load->model('ProductModel'); # <- add this
        $this->ProductModel->select_customer();
        $data['data2']=$this->ProductModel->select_customer();

        // $data['payment']=$this->payment_model->getReview();
        $data['title'] = "Manage Payment | Art Of Fit Gym";
        $data['content'] = "Backend/Payment/paymentAllocate";

        $this->load->view('Backend/Template/template', $data);
    }

    public function addPAllocate(){

        $rand_name = $this->genRandomString()."_".session_id()."_".time();


        if($this->PAllocate_model->isExistReview($this->input->post('slpayment'), $this->input->post('txtname'))){

    

            $master_data['payment_id'] = $this->input->post('slpayment');
            $master_data['customer_id'] = $this->input->post('txtname');


            $result = $this->PAllocate_model->addPAllocate($master_data);
            if($result){
                $response['status'] = 200;
                $response['message'] = 'Payment has inserted successfully.!';

            }else{
                $response['status'] = 500;
                $response['message'] = 'Operation Failed.!';
            }

        }
        else{
            $response['status'] = 500;
            $response['message'] = 'payment is already exits.!';
        }

        echo json_encode($response);
    }

    function getPAllocateForTable(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $param['draw'] = $this->input->get('draw');
        $param['length'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['columns'] = $this->input->get('columns');
        $param['search'] = $this->input->get('search[value]');
        $param['order'] = $this->input->get('order');

        echo json_encode($this->PAllocate_model->getPAllocates($param));
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

    function deletePAllocate(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

   
        $response['result'] = $this->PAllocate_model->deletePAllocate($this->input->post('ID'));

        echo json_encode($response);
    }

    function getPAllocateData(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $result = $this->PAllocate_model->getPAllocate($this->input->post('ID'));

        if($result != null){
            $response['status'] = 200;
            $response['data'] = $result;
        }else{
            $response['status'] = 500;
            $response['message'] = 'No fetching error.!';
        }

        echo json_encode($response);
    }

    function updatePAllocate(){
        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

        $result = $this->PAllocate_model->updatePAllocate(
            $this->input->post('txtUPAID'),
            $this->input->post('Uslpayment'),
            $this->input->post('txtUname')
        );

        if ($result) {
            $response['status'] = 200;
            $response['message'] = 'Payment updated successfully.!';
        } else {
            $response['status'] = 500;
            $response['message'] = 'Operation failed.!';
        }

        echo json_encode($response);
    }


}