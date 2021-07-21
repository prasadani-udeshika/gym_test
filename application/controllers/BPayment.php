<?php


class BPayment extends CI_Controller
{

    function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url', 'form');

        $User_Session = $this->session->userdata('User_Session');

        if ($User_Session == null) {
            redirect(base_url('BLogin/notLoggedIn'));
        }

        $this->load->model('payment_model');
    }

    public function index()
    {
        $data['title'] = "Manage Payment | Art Of Fit Gym";
        $data['content'] = "Backend/Payment/managePayment";

        $this->load->view('Backend/Template/template', $data);
    }

    public function addPayment(){

        $rand_name = $this->genRandomString()."_".session_id()."_".time();


        if($this->payment_model->isExistReview($this->input->post('txtPaymentName'), $this->input->post('txtPaymentAmount'))){

    

            $master_data['payment_name'] = $this->input->post('txtPaymentName');
            $master_data['payment_amount'] = $this->input->post('txtPaymentAmount');
            $master_data['payement_duration'] = $this->input->post('txtPaymentDuration');
            $master_data['payment_status'] = 0;


            $result = $this->payment_model->addPayment($master_data);
            if($result){
                $response['status'] = 200;
                $response['message'] = 'Payment has inserted successfully.!';

            }else{
                $response['status'] = 500;
                $response['message'] = 'Operation Failed.!';
            }

        }else{
            $response['status'] = 500;
            $response['message'] = 'payment is already exits.!';
        }

        echo json_encode($response);
    }

    function getPaymentsForTable(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $param['draw'] = $this->input->get('draw');
        $param['length'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['columns'] = $this->input->get('columns');
        $param['search'] = $this->input->get('search[value]');
        $param['order'] = $this->input->get('order');

        echo json_encode($this->payment_model->getPayments($param));
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

    function deletePayment(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

   
        $response['result'] = $this->payment_model->deletePayment($this->input->post('ID'));

        echo json_encode($response);
    }

    function getPaymentData(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $result = $this->payment_model->getPayment($this->input->post('ID'));

        if($result != null){
            $response['status'] = 200;
            $response['data'] = $result;
        }else{
            $response['status'] = 500;
            $response['message'] = 'No fetching error.!';
        }

        echo json_encode($response);
    }

    function updatePayment(){
        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

        $result = $this->payment_model->updatePayment(
            $this->input->post('txtUPaymentID'),
            $this->input->post('txtUPaymentName'),
            $this->input->post('txtUPaymentAmount'),
            $this->input->post('txtUPaymentDuration'),
            $this->input->post('cmbVisibility')
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