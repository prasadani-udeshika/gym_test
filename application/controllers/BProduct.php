<?php


class BProduct extends CI_Controller
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
        $data['title'] = "Manage Seasonal Products | Art OF Fit Gym";
        $data['content'] = "Backend/SeasonalProducts/manageSeasonal";

        $this->load->view('Backend/Template/template', $data);
    }

    public function addSeasonalProduct(){

        $rand_name = $this->genRandomString()."_".session_id()."_".time();

        $config['upload_path'] = './assets/img/Seasonal/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 3000;
        $config['max_width'] = 2500;
        $config['max_height'] = 2500;
        $config['file_name'] = $rand_name;

        $response = array();

        $this->load->library('upload', $config);

        if($this->ProductModel->isExistSProduct($this->input->post('txtProductName'))){

            if (!$this->upload->do_upload('txtProductImage')) {

                $error = $this->upload->display_errors();
                $response['error'] = $error;
                $master_data['sp_image'] = null;

            }else{
                $img = $this->upload->data();
                $master_data['sp_image'] = $img["file_name"];
            }

            if (!$this->upload->do_upload('txtProductCoverImage')) {

                $error = $this->upload->display_errors();
                $response['error'] = $error;
                $master_data['sp_cover_image'] = null;

            }else{
                $img = $this->upload->data();
                $master_data['sp_cover_image'] = $img["file_name"];
            }

            $master_data['sp_name'] = $this->input->post('txtProductName');
            $master_data['sp_description'] = $this->input->post('txtProductDescription');
            $master_data['sp_price'] = $this->input->post('txtProductPrice');
            $master_data['sp_active_status'] = 0;


            $result = $this->ProductModel->addSProduct($master_data);
            if($result){
                $response['status'] = 200;
                $response['message'] = 'Product has inserted successfully.!';

            }else{
                $response['status'] = 500;
                $response['message'] = 'Operation Failed.!';
            }

        }else{
            $response['status'] = 500;
            $response['message'] = 'Product name is already exits.!';
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

    function getSProductsForTable(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $param['draw'] = $this->input->get('draw');
        $param['length'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['columns'] = $this->input->get('columns');
        $param['search'] = $this->input->get('search[value]');
        $param['order'] = $this->input->get('order');

        echo json_encode($this->ProductModel->getSProducts($param));
    }

    function deleteSProduct(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

        $imgData = $this->ProductModel->getSProduct($this->input->post('ID'));

        if($imgData[0]->sp_image != null){
            unlink('assets/img/Seasonal/'.$imgData[0]->sp_image);
        }

        if($imgData[0]->sp_cover_image != null){
            unlink('assets/img/Seasonal/'.$imgData[0]->sp_cover_image);
        }

        $response['result'] = $this->ProductModel->deleteSProduct($this->input->post('ID'));

        echo json_encode($response);
    }

    function getSProductData(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $result = $this->ProductModel->getSProduct($this->input->post('ID'));

        if($result != null){
            $response['status'] = 200;
            $response['data'] = $result;
        }else{
            $response['status'] = 500;
            $response['message'] = 'No fetching error.!';
        }

        echo json_encode($response);
    }

    function updateSProduct(){
        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

        $result = $this->ProductModel->updateSProduct(
            $this->input->post('txtUProductID'),
            $this->input->post('txtUProductName'),
            $this->input->post('txtUProductDescription'),
            $this->input->post('txtUProductPrice'),
            $this->input->post('cmbVisibility')
        );

        if ($result) {
            $response['status'] = 200;
            $response['message'] = 'Product updated successfully.!';
        } else {
            $response['status'] = 500;
            $response['message'] = 'Operation failed.!';
        }

        echo json_encode($response);
    }

}