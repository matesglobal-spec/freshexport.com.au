<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    function account_opening_email($email = '', $password = '')
	{
		$system_name	=	$this->db->get_where('settings' , array('type' => 'system_name'))->row()->description;

		$email_msg		=	"Welcome to ".$system_name."<br />";
		$email_msg		.=	"Your login password : ". $password ."<br />";
		$email_msg		.=	"Login Here : ".base_url()."<br />";

		$email_sub		=	"Account opening email";
		$email_to		=	$email;

		$this->do_email($email_msg , $email_sub , $email_to);
	}

	function password_reset_email($new_password = '' , $email = '') {

		$query			=	$this->db->get_where('user' , array('email' => $email));

		if($query->num_rows() > 0) {
			$email_msg	=	"Your request for password reset was successfull. <br />";
			$email_msg	.=	"Your password is : ".$new_password."<br />";

			$email_sub	=	"Password reset request";
			$email_to	=	$email;
			$this->do_email($email_msg , $email_sub , $email_to);
			return true;
		} else {
			return false;
		}
	}

   /***custom email sender****/
	function do_email($msg=NULL, $sub=NULL, $to=NULL, $from=NULL, $attachment_url=NULL)
	{

        $config = array();
        $config['useragent']		= "CodeIgniter";
        $config['mailpath']		= "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']		= "smtp";
        $config['smtp_host']		= "localhost";
        $config['smtp_port']		= "25";
        $config['mailtype']		= 'html';
        $config['charset']		= 'utf-8';
        $config['newline']		= "\r\n";
        $config['wordwrap']		= TRUE;

        $this->load->library('email');

        $this->email->initialize($config);

		$system_name	=	$this->db->get_where('settings' , array('type' => 'system_name'))->row()->description;
		if ($from == NULL)
			$from		=	$this->db->get_where('settings' , array('type' => 'system_email'))->row()->description;

		// attachment
		if ($attachment_url != NULL)
			$this->email->attach( $attachment_url );

		$this->email->from($from, $system_name);
		$this->email->from($from, $system_name);
		$this->email->to($to);
		$this->email->subject($sub);

		$this->email->message($msg);

		$this->email->send();

		//echo $this->email->print_debugger();
	}
}
