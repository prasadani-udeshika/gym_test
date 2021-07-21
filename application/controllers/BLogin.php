<?php


class BLogin extends CI_Controller
{

    function __construct() {
        parent::__construct();

        $this->load->model('AuthModel');
        $this->load->library('session');
    }

    public function index()
    {
        $data['title'] = "Login | Art OF Fit Gym";
        $data['error_message'] = "";

        $this->load->view('Backend/Auth/login', $data);
    }

    public function signIn(){

        $username = $this->input->post('txt_username');
        $password = $this->input->post('txt_password');

        $dbpassword1 = $this->AuthModel->validateUsername($username);

        if ($dbpassword1) {

            $dbpassword = $dbpassword1[0]->password;

            if($this->isValidPassword($password, $dbpassword)) {

                $user = $this->AuthModel->validateUser($username, $dbpassword);

                if($this->isBlocked($user[0]->block_status)) {

                    if($this->isDeactive($user[0]->active_status)) {
                        $Login_User = array(
                            'ID' => $user[0]->account_id,
                            'Username' => $user[0]->username,
                            'Full_Name' => $user[0]->full_name,
                            'Active_Status' => $user[0]->active_status,
                            'Blocked_Status' => $user[0]->block_status,
                            'Account_Type' => $user[0]->account_type,
                        );

                        $this->session->set_userdata('User_Session', $Login_User);
                        redirect(base_url('BHome'));
                    }else{
                        redirect(base_url('BLogin/deactive'));
                    }

                }else{
                    redirect(base_url('BLogin/blocked'));
                }

            } else {
                redirect(base_url('BLogin/invalid'));
            }
        } else {
            redirect(base_url('BLogin/invalid'));
        }
    }

    public function notLoggedIn()
    {
        $data['title'] = "Login | Art OF Fit Gym";
        $data['error_message'] = 'You are not logged in.!';
        $this->session->unset_userdata('User_Session');
        $this->load->view('Backend/Auth/login', $data);
    }

    public function noPermission()
    {
        $data['title'] = "Login | Art OF Fit Gym";
        $data['error_message'] = 'You have no permission.!';
        $this->load->view('Backend/Auth/login', $data);
    }

    public function blocked()
    {
        $data['title'] = "Login | Art OF Fit Gym";
        $data['error_message'] = 'Your account has been blocked, Please inform administrator.!';
        $this->load->view('Backend/Auth/login', $data);
    }

    public function deactive()
    {
        $data['title'] = "Login | Art OF Fit Gym";
        $data['error_message'] = 'Your account has been disabled. Please inform administrator.!';
        $this->load->view('Backend/Auth/login', $data);
    }

    public function invalid()
    {
        $data['title'] = "Login | Art OF Fit Gym";
        $data['error_message'] = 'Invalid username or password.!';
        $this->load->view('Backend/Auth/login', $data);
    }

    public function logOut()
    {
        $this->session->unset_userdata('User_Session');
        $data['title'] = "Login | Art OF Fit Gym";
        $data['error_message'] = 'Please sign in to continue.!';
        $this->load->view('Backend/Auth/login', $data);
    }

    function isValidPassword($password, $dbpassword)
    {

        $hash = hash('sha256', $password);

        return $hash == $dbpassword;
    }

    function isBlocked($blocked_status)
    {

        if($blocked_status == 1)
            return false;
        if($blocked_status == 0)
            return true;
    }

    function isDeactive($active_status)
    {

        if($active_status == 1)
            return true;
        if($active_status == 0)
            return false;
    }

}