<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 *  @author     : Illeas
 *  date        : 3 Feb, 2019
 *  Fresh export austrilia
 */

class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2019 05:00:00 GMT");
    }

    //Default function, redirects to logged in user area
    public function index() {
        if ($this->session->userdata('admin_login') == 1){
            redirect(site_url('admin/dashboard'), 'refresh');
        }
        $this->load->view('backend/login');

    }

    public function register(){
    	// Check validation for user input in SignUp form
		$this->form_validation->set_rules('name', 'Full name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|xss_clean|required|matches[password]');
		$this->form_validation->set_rules('type', 'Type', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Something went wrong please try again or contact support!');
            redirect(site_url('home'), 'refresh');
		} else {
			$result = $this->crud_model->registration_insert();
			if ($result ==true){
                $this->session->set_flashdata('success', get_phrase('Registration_successfully'));
                redirect(site_url('home'), 'refresh');
            }else{
            	$this->session->set_flashdata('error', get_phrase('Email_already_exist'));
            	redirect(site_url('home'), 'refresh');
            }
		}
    }
    public function profile_edit(){
    	// Check validation for user input in SignUp form
		$this->form_validation->set_rules('name', 'Full name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Something went wrong please try again or contact support!');
            redirect(site_url('myaccount'), 'refresh');
		} else {
			$result = $this->crud_model->profile_update();
			if ($result ==true){
                $this->session->set_flashdata('success', get_phrase('Update_successfully'));
                redirect(site_url('myaccount'), 'refresh');
            }else{
            	$this->session->set_flashdata('error', get_phrase('Something_went_wrong'));
            	redirect(site_url('myaccount'), 'refresh');
            }
		}
    }
    //Validating login informations from ajax request
    function users_login() {
        $email      =   $this->input->post('email');
        $password   =   $this->input->post('password');
        $credential	=	array(	'email' => $email , 'password' => sha1($password) );

        // Checking login credential for users of the system
        $query = $this->db->get_where('users' , $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();

            //setting the session parameters for admin
            if ($row->type == 1) {
                $this->session->set_userdata('admin_login' , '1');
                $this->session->set_userdata('login_type' , 'admin');
            }

            //setting the session parameters for employees
            if ($row->type == 2) {
                $this->session->set_userdata('editor_login' , '2');
                $this->session->set_userdata('login_type' , 'editor');
            }

            //setting the session parameters for employees
            if ($row->type == 3) {
                $this->session->set_userdata('vendor_login' , '3');
                $this->session->set_userdata('login_type' , 'vendor');
            }

            //setting the session parameters for employees
            if ($row->type == 4) {
                $this->session->set_userdata('visitor_login' , '4');
                $this->session->set_userdata('login_type' , 'visitor');
            }

            //setting the common session parameters for all type of users of the system
            $this->session->set_userdata('user_id' , $row->user_id);
            $this->session->set_flashdata('success', 'Successfully Login');
            redirect(site_url('myaccount'), 'refresh');
        } else {
            $this->session->set_flashdata('login_error', 'Invalid Login');
            redirect(site_url('home'), 'refresh');
        }
    } 

    //Validating login informations from ajax request
    function validate_login() {
        $email      =   $this->input->post('email');
        $password   =   $this->input->post('password');
        $credential	=	array(	'email' => $email , 'password' => sha1($password) );

        // Checking login credential for users of the system
        $query = $this->db->get_where('users' , $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();

            //setting the session parameters for admin
            if ($row->type == 1) {
                $this->session->set_userdata('admin_login' , '1');
                $this->session->set_userdata('login_type' , 'admin');
            }

            //setting the session parameters for employees
            if ($row->type == 2) {
                $this->session->set_userdata('user_login' , '1');
                $this->session->set_userdata('login_type' , 'user');
            }
            //setting the common session parameters for all type of users of the system
            $this->session->set_userdata('user_id' , $row->user_id);
            $this->session->set_flashdata('success', 'Successfully Login');
            redirect(site_url($this->session->userdata('login_type').'/dashboard'), 'refresh');
        } else {
            $this->session->set_flashdata('login_error', 'Invalid Login');
            redirect(site_url('login'), 'refresh');
        }
    }

    function forgot_password() {
        $this->load->view('backend/forgot_password');
    }

    function reset_password() {
        $email = $this->input->post('email');
        $query = $this->db->get_where('user', array('email' => $email));
        if ($query->num_rows() > 0) {
            // create a new password
            $new_password   =   substr( md5( rand(100000000,20000000000) ) , 0,7);
            // update the password in database
            $this->db->where('email', $email);
            $this->db->update('user', array('password' => sha1($new_password)));
            // send an email with the new password
            $this->email_model->password_reset_email($new_password, $email);
            $this->session->set_flashdata('reset_success', get_phrase('check_your_email_for_new_password'));
            redirect(site_url('login/forgot_password'),'refresh');

        } else {
            $this->session->set_flashdata('reset_error', get_phrase('failed_to_reset_password'));
            redirect(site_url('login/forgot_password'),'refresh');
        }
    }


    // logout
    function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login') , 'refresh');
    }
    // logout
    function user_logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('home') , 'refresh');
    }

}
