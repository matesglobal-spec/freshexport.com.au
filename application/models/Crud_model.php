<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crud_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    function registration_insert()
    {
        $data['name'] = $this->input->post('name');
        $data['email']     = $this->input->post('email');
        $data['password']     = sha1($this->input->post('password'));
        $data['type']         = $this->input->post('type');
        $data['createDate']         = strtotime(date("m/d/Y H:i:s"));
        $data['updateDate']         = strtotime(date("m/d/Y H:i:s"));

        $result = $this->db->insert('users', $data);
        if($result){
        	return true;
        }
    }
    function profile_update()
    {
    	$user_id = $this->input->post('user_id');
        $data['name'] = $this->input->post('name');
        $data['father_name']     = $this->input->post('father_name');
        $data['phone']     = $this->input->post('phone');
        $data['date_of_birth']     = strtotime($this->input->post('date_of_birth'));
        $data['gender']     = $this->input->post('gender');
        $data['local_address']     = $this->input->post('local_address');
        $data['permanent_address']     = $this->input->post('permanent_address');
        $data['nationality']     = $this->input->post('nationality');
        $data['martial_status']     = $this->input->post('martial_status');
        $data['email']     = $this->input->post('email');
        $data['updateDate']         = strtotime(date("m/d/Y H:i:s"));

        $this->db->where('user_id', $user_id);
        $result = $this->db->update('users', $data);
        if($result){
        	return true;
        }
    }
    function add_complaint($user_code) {
        $data['user_id']    =   $this->db->get_where('user', array('user_code' => $user_code))->row()->user_id;
        $data['title']  =   $this->input->post('title');
        $data['summary']  =   $this->input->post('summary');
        $data['timestamp']  =   strtotime($this->input->post('timestamp'));
        $this->db->insert('complaints', $data);
    }

    function edit_complaint($complaints_id) {
        $data['title']  =   $this->input->post('title');
        $data['summary']  =   $this->input->post('summary');
        $data['timestamp']  =   strtotime($this->input->post('timestamp'));

        $this->db->where('complaints_id', $complaints_id);
        $this->db->update('complaints', $data);

        $user_id = $this->db->get_where('complaints', array('complaints_id' => $complaints_id))->row()->user_id;
        $code = $this->db->get_where('user', array('user_id' => $user_id))->row()->user_code;

        return $code;
    }

    function delete_complaint($complaints_id) {

        $user_id = $this->db->get_where('complaints', array('complaints_id' => $complaints_id))->row()->user_id;
        $code = $this->db->get_where('user', array('user_id' => $user_id))->row()->user_code;

        $this->db->where('complaints_id', $complaints_id);
        $this->db->delete('complaints');

        return $code;
    }

    //CREATE EMPLOYEE//

    function catadd() 
    {
        $data2['name']          = $this->input->post('catname');
        $data2['createDate']          = strtotime(date("m/d/Y H:i:s"));
        $data2['updateDate']          = strtotime(date("m/d/Y H:i:s"));
        $data2['status']             = "1";
        $this->db->insert('categories',$data2);
        return true;
    }
    function addgrade() 
    {
        $data2['name']          = $this->input->post('name');
        $data2['createDate']          = strtotime(date("m/d/Y H:i:s"));
        $data2['updateDate']          = strtotime(date("m/d/Y H:i:s"));
        $data2['status']             = "1";
        $this->db->insert('grade',$data2);
        return true;
    }
    function addplace() 
    {
        $data2['name']          = $this->input->post('name');
        $data2['latitude']          = $this->input->post('latitude');
        $data2['longitude']          = $this->input->post('longitude');
        $data2['createDate']          = strtotime(date("m/d/Y H:i:s"));
        $data2['updateDate']          = strtotime(date("m/d/Y H:i:s"));
        $data2['status']             = "1";
        $this->db->insert('marketplace',$data2);
        return true;
    }
    function subsubcatadd() 
    {
        $data2['catid']          = $this->input->post('cate');
        $data2['subCat']         = $this->input->post('subcat');
        $data2['name']           = $this->input->post('name');
        $data2['descriptions']          = $this->input->post('descriptions');
        $data2['growinglocation']= json_encode($this->input->post('growinglocation'));
        $data2['harvest']        = json_encode($this->input->post('harvest'));
        $data2['availablity']    = json_encode($this->input->post('availablity'));
        $data2['minimum_price']  = $this->input->post('minimum_price');
        $data2['maximum_price']  = $this->input->post('maximum_price');
        $data2['createDate']     = strtotime(date("m/d/Y H:i:s"));
        $data2['updateDate']     = strtotime(date("m/d/Y H:i:s"));
        $data2['status']         = "1";
        $this->db->insert('subsubcategories',$data2);
        return true;
    }

    function subcatadd() 
    {
        $data2['catid']          = $this->input->post('cate');
        $data2['name']          = $this->input->post('subcate');
        $data2['createDate']          = strtotime(date("m/d/Y H:i:s"));
        $data2['updateDate']          = strtotime(date("m/d/Y H:i:s"));
        $data2['status']             = "1";
        $this->db->insert('subcategories',$data2);
        return true;
    }

    function addproduct() 
    {
    	if($this->session->userdata('admin_login')){  $userrole = $this->session->userdata('admin_login'); $status = 1; }else if($this->session->userdata('editor_login')){ $userrole = $this->session->userdata('editor_login'); $status = 1; }else if($this->session->userdata('vendor_login')){ $userrole = $this->session->userdata('vendor_login'); $status = 0; }else if($this->session->userdata('visitor_login')){ $userrole = $this->session->userdata('visitor_login'); $status = 0; }

        $data2['sku']              = "0";
        $data2['userid']           = $this->session->userdata('user_id');
        $data2['userrole']         = $userrole;
        $data2['proCat']           = $this->input->post('proCat');
        $data2['proSubCat']        = $this->input->post('proSubCat');
        $data2['subsubid']            = $this->input->post('subsubid');
        $data2['currentPrice']     = $this->input->post('currentPrice');
        $data2['descriptions']     = $this->input->post('descriptions');
        $data2['quantity']         = $this->input->post('quantity');
        $data2['proUnits']         = $this->input->post('proUnits');
        $data2['size']             = $this->input->post('size');
        $data2['color']            = $this->input->post('color');
        $data2['place']            = $this->input->post('place');
        $data2['expiry_date']      = strtotime($this->input->post('expiry_date'));
        $data2['createDate']       = strtotime(date("m/d/Y H:i:s"));
        $data2['updateDate']       = strtotime(date("m/d/Y H:i:s"));
        $data2['status']        = $status;
        $this->db->insert('produtcs',$data2);
        return true;
    }
    function updateproduct() 
    {
    	if($this->session->userdata('admin_login')){  $userrole = $this->session->userdata('admin_login'); $status = 1; }else if($this->session->userdata('editor_login')){ $userrole = $this->session->userdata('editor_login'); $status = 1; }else if($this->session->userdata('vendor_login')){ $userrole = $this->session->userdata('vendor_login'); $status = 0; }else if($this->session->userdata('visitor_login')){ $userrole = $this->session->userdata('visitor_login'); $status = 0; }

    	if($this->input->post('currentPrice')==$this->input->post('oldPrice')){
    		$oldPrice =0;
    	}else{
    		$oldPrice = $this->input->post('oldPrice');
    	}
    	$biddingStatus = 0;
    	$biddingDetails = 0;
    	$partialBiddingStatus = 0;
    	$biddingMinquantity = 0;
    	$biddTotalQuantity = 0;
    	$singlePrice = 0;
    	$biddingExpiryDate = 0;
    	if($this->input->post('biddingStatus')==1){
    		$biddingStatus = $this->input->post('biddingStatus');
    		$biddingDetails = $this->input->post('biddingDetails');
    		$biddTotalQuantity = $this->input->post('biddTotalQuantity');
    		$biddingExpiryDate = strtotime($this->input->post('biddingExpiryDate'));
    		if($this->input->post('partialBiddingStatus')==1){
    			$partialBiddingStatus = 1;
    			$singlePrice = $this->input->post('singlePrice');
    			$biddingMinquantity = $this->input->post('biddingMinquantity');
    			$biddingBaseprice = $biddingMinquantity*$singlePrice;
    		}
    	}

        $data['userid']            = $this->session->userdata('user_id');
        $data['oldPrice']          = $oldPrice;
        $data['currentPrice']      = $this->input->post('currentPrice');
        $data['descriptions']      = $this->input->post('descriptions');
        $data['quantity']          = $this->input->post('quantity');
        $data['proUnits']          = $this->input->post('proUnits');
        $data['size']              = $this->input->post('size');
        $data['color']             = $this->input->post('color');
        $data['place']             = $this->input->post('place');
        $data['biddingStatus']     = $biddingStatus;
        $data['biddingDetails']    = $biddingDetails;
        $data['partialBiddingStatus']   = $partialBiddingStatus;
        $data['biddingMinquantity']= $biddingMinquantity;
        $data['biddTotalQuantity'] = $biddTotalQuantity;
        $data['biddingBaseprice']  = $biddingBaseprice;
        $data['singlePrice']       = $singlePrice;
        $data['biddingExpiryDate'] = $biddingExpiryDate ;
        $data['updateDate']        = strtotime(date("m/d/Y H:i:s"));
        $id = $this->input->post('proId');
        $this->db->where('id', $id);
   		if($this->db->update('produtcs',$data)){
        	return true;
    	}else{
    		return false;
    	}
    }
    function addpost() 
    {
        $data2['cat']           = $this->input->post('cat');
        $data2['subCat']        = $this->input->post('subCat');
        $data2['title']            = $this->input->post('title');
        $data2['descriptions']     = $this->input->post('descriptions');
        $data2['createDate']       = strtotime(date("m/d/Y H:i:s"));
        $data2['updateDate']       = strtotime(date("m/d/Y H:i:s"));
        $data2['status']        = "1";
        $this->db->insert('blogs',$data2);
        return true;
    }
    function multi_images_upload($table,$imgname,$proid){
    	$data2['proid']          = $proid;
    	$data2['imgpath']          = $imgname;
        $data2['createDate']          = strtotime(date("m/d/Y H:i:s"));
        $data2['updateDate']          = strtotime(date("m/d/Y H:i:s"));
        $data2['status']        = "1";
        $this->db->insert($table,$data2);
        return true;
    }

    function task() 
    {
        $data2['assign_to']          = $this->input->post('employee_id');
        $data2['department']         = $this->input->post('department_id');
        $data2['task_title']         = $this->input->post('task_title');
        $data2['assign_date']        = strtotime($this->input->post('date'));
        $data2['delivery_date']      = strtotime($this->input->post('date'));
        $data2['note']               = $this->input->post('details');
        $data2['status']             = "5";
        $this->db->insert('assigned_task',$data2);
        return true;
    }

    function create_employee() 
    {
        $data2['name']                  = $this->input->post('name');
        $data2['user_code']             = $this->input->post('user_code');
        $data2['date_of_birth']         = strtotime($this->input->post('date_of_birth'));
        $data2['gender']                = $this->input->post('gender');
        $data2['phone']                 = $this->input->post('phone');
        $data2['local_address']         = $this->input->post('local_address');
        $data2['permanent_address']     = $this->input->post('permanent_address');
        $data2['nationality']           = $this->input->post('nationality');
        $data2['email']                 = $this->input->post('email');
        $data2['password']              = sha1($this->input->post('password'));
        $data2['joining_salary']        = $this->input->post('joining_salary');
        $data2['status']                = 1;
        $data2['type']                  = 2;
        $data2['document_id']           = 0;
        
        $this->db->insert('user',$data2);

        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/user_image/' . $this->input->post('user_code') . '.jpg');
        $this->email_model->account_opening_email($this->input->post('email'), $this->input->post('password'));
        return true;
    }
   

    function change_password($user_id) {
        $type                       = $this->session->userdata('login_type');
        $old_password               = $this->input->post('old_password');
        $data = $this->db->get_where($type, array($type.'_id' => $user_id))->result_array();
        foreach ($data as $row) {
            if (sha1($old_password) == $row['password']) {
                $newpassword        = sha1($this->input->post('new_password'));
                $confirmpassword    = sha1($this->input->post('confirm_password'));
                if ($newpassword == $confirmpassword) {
                    $data = array("password" => $newpassword);
                    $this->db->where($type.'_id', $user_id);
                    $this->db->update($type, $data);
                    return true;
                }
            }
            return false;
        }
    }
//verifiy account
    function verify_account($student_id) {
        $data['status']     = 1;
        $this->db->where('student_id' , $student_id);
        $this->db->update('student',$data);
    }

    // AWARD
    function create_award()
    {
        $data['award_code'] = substr(md5(rand(100000000, 20000000000)), 0, 7);
        $data['name']       = $this->input->post('name');
        $data['gift']       = $this->input->post('gift');
        $data['amount']     = $this->input->post('amount');
        $data['user_id']    = $this->input->post('user_id');
        $data['date']       = strtotime($this->input->post('date'));

        $this->db->insert('award',$data);
    }

    function update_award($award_id = '')
    {
        $data['name']       = $this->input->post('name');
        $data['gift']       = $this->input->post('gift');
        $data['amount']     = $this->input->post('amount');
        $data['user_id']    = $this->input->post('user_id');
        $data['date']       = strtotime($this->input->post('date'));

        $this->db->update('award', $data, array('award_id' => $award_id));
    }

    function delete_award($award_id = '')
    {
        $this->db->where('award_id', $award_id);
        $this->db->delete('award');
    }

    // EXPENSE
    function create_expense()
    {
        $data['expense_code'] = substr(md5(rand(100000000, 20000000000)), 0, 7);
        $data['title']          = $this->input->post('title');
        $data['description']    = $this->input->post('description');
        $data['amount']         = $this->input->post('amount');
        $data['date']           = strtotime($this->input->post('date'));

        $this->db->insert('expense',$data);
    }

    function update_expense($expense_id = '')
    {
        $data['title']          = $this->input->post('title');
        $data['description']    = $this->input->post('description');
        $data['amount']         = $this->input->post('amount');
        $data['date']           = strtotime($this->input->post('date'));

        $this->db->update('expense', $data, array('expense_id' => $expense_id));
    }

    function delete_expense($expense_id = '')
    {
        $this->db->where('expense_id', $expense_id);
        $this->db->delete('expense');
    }

    // NOTICEBOARD
    function create_noticeboard()
    {
        $data['noticeboard_code'] = substr(md5(rand(100000000, 20000000000)), 0, 7);
        $data['title']          = $this->input->post('title');
        $data['description']    = $this->input->post('description');
        $data['status']         = $this->input->post('status');
        $data['date']           = strtotime($this->input->post('date'));

        $this->db->insert('noticeboard',$data);
    }

    function update_noticeboard($noticeboard_id = '')
    {
        $data['title']          = $this->input->post('title');
        $data['description']    = $this->input->post('description');
        $data['status']         = $this->input->post('status');
        $data['date']           = strtotime($this->input->post('date'));

        $this->db->update('noticeboard', $data, array('noticeboard_id' => $noticeboard_id));
    }

    function delete_noticeboard($noticeboard_id = '')
    {
        $this->db->where('noticeboard_id', $noticeboard_id);
        $this->db->delete('noticeboard');
    }

    // LEAVE
    function create_leave()
    {
        $data['leave_code']     = substr(md5(rand(100000000, 20000000000)), 0, 7);
        $data['user_id']        = $this->session->userdata('login_user_id');
        $data['start_date']     = strtotime($this->input->post('start_date'));
        $data['end_date']       = strtotime($this->input->post('end_date'));
        $data['reason']         = $this->input->post('reason');

        $this->db->insert('leave',$data);
    }

    function update_leave($leave_id = '')
    {
        $data['start_date']     = strtotime($this->input->post('start_date'));
        $data['end_date']       = strtotime($this->input->post('end_date'));
        $data['reason']         = $this->input->post('reason');

        $this->db->update('leave', $data, array('leave_id' => $leave_id));
    }

    function delete_leave($leave_id = '')
    {
        $this->db->where('leave_id', $leave_id);
        $this->db->delete('leave');
    }

    // PRIVATE MESSAGING
    function send_new_private_message()
    {
        $message = $this->input->post('message');
        $timestamp = strtotime(date("Y-m-d H:i:s"));

        $reciever = $this->input->post('reciever');
        $sender = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');

        //check if the thread between those 2 users exists, if not create new thread
        $num1 = $this->db->get_where('message_thread', array('sender' => $sender, 'reciever' => $reciever))->num_rows();
        $num2 = $this->db->get_where('message_thread', array('sender' => $reciever, 'reciever' => $sender))->num_rows();

        if ($num1 == 0 && $num2 == 0) {
            $message_thread_code = substr(md5(rand(100000000, 20000000000)), 0, 15);
            $data_message_thread['message_thread_code'] = $message_thread_code;
            $data_message_thread['sender'] = $sender;
            $data_message_thread['reciever'] = $reciever;
            $this->db->insert('message_thread', $data_message_thread);
        }
        if ($num1 > 0)
            $message_thread_code = $this->db->get_where('message_thread', array('sender' => $sender, 'reciever' => $reciever))->row()->message_thread_code;
        if ($num2 > 0)
            $message_thread_code = $this->db->get_where('message_thread', array('sender' => $reciever, 'reciever' => $sender))->row()->message_thread_code;


        $data_message['message_thread_code'] = $message_thread_code;
        $data_message['message'] = $message;
        $data_message['sender'] = $sender;
        $data_message['timestamp'] = $timestamp;
        $this->db->insert('message', $data_message);

        // notify email to email reciever
        //$this->email_model->notify_email('new_message_notification', $this->db->insert_id());

        return $message_thread_code;
    }

    function send_reply_message($message_thread_code)
    {
        $message = $this->input->post('message');
        $timestamp = strtotime(date("Y-m-d H:i:s"));
        $sender = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');


        $data_message['message_thread_code'] = $message_thread_code;
        $data_message['message'] = $message;
        $data_message['sender'] = $sender;
        $data_message['timestamp'] = $timestamp;
        $this->db->insert('message', $data_message);

        // notify email to email reciever
        //$this->email_model->notify_email('new_message_notification', $this->db->insert_id());
    }

    function mark_thread_messages_read($message_thread_code)
    {
        // mark read only the oponnent messages of this thread, not currently logged in user's sent messages
        $current_user = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');
        $this->db->where('sender !=', $current_user);
        $this->db->where('message_thread_code', $message_thread_code);
        $this->db->update('message', array('read_status' => 1));
    }

    function count_unread_message_of_thread($message_thread_code)
    {
        $unread_message_counter = 0;
        $current_user = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');
        $messages = $this->db->get_where('message', array('message_thread_code' => $message_thread_code))->result_array();
        foreach ($messages as $row) {
            if ($row['sender'] != $current_user && $row['read_status'] == '0')
                $unread_message_counter++;
        }
        return $unread_message_counter;
    }

    // VACANCY
    function create_vacancy()
    {
        $data['name']                   = $this->input->post('name');
        $data['number_of_vacancies']    = $this->input->post('number_of_vacancies');
        $data['last_date']              = strtotime($this->input->post('last_date'));

        $this->db->insert('vacancy',$data);
    }

    function update_vacancy($vacancy_id = '')
    {
        $data['name']                   = $this->input->post('name');
        $data['number_of_vacancies']    = $this->input->post('number_of_vacancies');
        $data['last_date']              = strtotime($this->input->post('last_date'));

        $this->db->update('vacancy', $data, array('vacancy_id' => $vacancy_id));
    }

    function delete_vacancy($vacancy_id = '')
    {
        $this->db->where('vacancy_id', $vacancy_id);
        $this->db->delete('vacancy');
    }

    // APPLICATION
    function create_application()
    {
        $data['applicant_name'] = $this->input->post('applicant_name');
        $data['vacancy_id']     = $this->input->post('vacancy_id');
        $data['apply_date']     = strtotime($this->input->post('apply_date'));
        $data['status']         = $this->input->post('status');

        $this->db->insert('application', $data);
    }

    function update_application($application_id = '')
    {
        $old_vacancy_id = $this->db->get_where('application', array('application_id' => $application_id))->row()->vacancy_id;

        $data['applicant_name'] = $this->input->post('applicant_name');
        $data['vacancy_id']     = $this->input->post('vacancy_id');
        $data['apply_date']     = strtotime($this->input->post('apply_date'));
        $data['status']         = $this->input->post('status');

        $this->db->update('application', $data, array('application_id' => $application_id));
    }

    function delete_application($application_id = '')
    {
        $this->db->where('application_id', $application_id);
        $this->db->delete('application');
    }
}
