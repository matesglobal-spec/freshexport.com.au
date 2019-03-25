<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 /*
 *  @author     : Illeas
 *  date        : 3 Feb, 2019
 *  Fresh export austrilia
 */
class Admin extends CI_Controller {

	function  __construct(){
        parent::__construct();
        $this->load->database();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $admin = $this->db->get_where('settings')->result_array();
    }
    
    public function index(){
        if ($this->session->userdata('admin_login') == 1){
        	redirect(site_url('admin/dashboard'),'refresh');
        }else{
        	redirect(site_url('login'),'refresh');
        }
        $this->load->view('backend/admin/index');
    }
    public function dashboard(){
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    		 $this->session->set_userdata('last_page', current_url());
    	}
        $page_data['page_name'] = 'dashboard';
        $page_data['page_title'] = get_phrase('dashboard');
        $this->load->view('backend/index', $page_data);
    }
    public function add_cat($param1='')
    {
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    	}
    	$page_data['page_name'] = 'add_cat';
        $page_data['page_title'] = get_phrase('Add_cat');
        $this->load->view('backend/index', $page_data);
        
        if($param1=="create"){
        	$catname = strtolower($this->input->post('catname'));
        	$name = str_replace(' ','_', $catname).time(). '.jpg';
        	$catadd = $this->crud_model->catadd();
            if ($catadd == 'true'){
            	$lastid = $this->db->insert_id();
            	$data = array('imgpath'=>$name);
            	$this->db->where('id', $lastid);
            	$this->db->update('categories', $data);
            	move_uploaded_file($_FILES['caticon']['tmp_name'], 'uploads/category/'.$name);
                $this->session->set_flashdata('success', get_phrase('data_created_successfully'));
                redirect(site_url('admin/add_cat'), 'refresh');
            }else{
            	$this->session->set_flashdata('error', get_phrase('something_went_wrong!'));
            	redirect(site_url('admin/add_cat'), 'refresh');
            }
        }
    }
    public function view_cat()
    {
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    	}
    	$page_data['page_name'] = 'view_cat';
    	$page_data['categories'] = $this->db->get_where('categories', array('status'=>1))->result_array();
        $page_data['page_title'] = get_phrase('View_cat');
        $this->load->view('backend/index', $page_data);
    }
    public function add_subcat($param1='')
    {
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    	}
    	$page_data['page_name'] = 'add_subcat';
    	$page_data['categories'] = $this->db->get_where('categories', array('status'=>1))->result_array();
        $page_data['page_title'] = get_phrase('Add_subcat');
        $this->load->view('backend/index', $page_data);

        if($param1=="create"){
        	$subcatadd = $this->crud_model->subcatadd();
            if ($subcatadd == 'true'){
                $this->session->set_flashdata('success', get_phrase('data_created_successfully'));
                redirect(site_url('admin/add_subcat'), 'refresh');
            }else{
            	$this->session->set_flashdata('error', get_phrase('something_went_wrong!'));
            	redirect(site_url('admin/add_subcat'), 'refresh');
            }
        }
    }
    public function view_subcat()
    {
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    	}
    	$page_data['subcategories'] = $this->db->get_where('subcategories', array('status'=>1))->result_array();
    	$page_data['page_name'] = 'view_subcat';
        $page_data['page_title'] = get_phrase('View_subcat');
        $this->load->view('backend/index', $page_data);
    }

    public function add_product($param1=''){
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    	}
    	$page_data['categories'] = $this->db->get_where('categories', array('status'=>1))->result_array();
    	$page_data['units'] = $this->db->get_where('productsunits', array('status'=>1))->result_array();
    	$page_data['marketplace'] = $this->db->get_where('marketplace', array('status'=>1))->result_array();
    	$page_data['page_name'] = 'add_product';
        $page_data['page_title'] = get_phrase('Add_product');
        $this->load->view('backend/index', $page_data);
        if($param1=="create"){
        	$addproduct = $this->crud_model->addproduct();
            if ($addproduct == true){
            	$lastid = $this->db->insert_id();
            	$cat = $this->db->get_where('categories', array('status'=>1, 'id'=> $this->input->post('proCat')))->row()->name;
            	$subcat = $this->db->get_where('subcategories', array('status'=>1, 'id'=> $this->input->post('proSubCat')))->row()->name;
            	$title = $this->input->post('title');
            	$date = date("d");
            	//First 2 category 2nd 2 sub category 3rd date 4th 2 title and unique id 
            	$sku = strtoupper($cat{0}.$cat{1}.$subcat{0}.$subcat{1}.$date."-".$title{0}.$title{1}.$lastid);
        		$name = str_replace('-','_', $sku).'.jpg';
        		$name = strtolower($name);
            	$data = array('imgpath'=>$name, 'sku'=>$sku);
            	$this->db->where('id', $lastid);
            	$this->db->update('produtcs', $data);
            	move_uploaded_file($_FILES['proimg']['tmp_name'], 'uploads/products/'.$name);

            	$this->load->library('upload');
			    $files = $_FILES;
			    $cpt = count($_FILES['promultiimg']['name']);
			    for($i=0; $i<$cpt; $i++)
			    {  
					move_uploaded_file($_FILES['promultiimg']['tmp_name'][$i], 'uploads/products/'.$i.$name);
			       	$imgname = $i.$name;
			        $result_set = $this->crud_model->multi_images_upload("proimages",$imgname,$lastid);
		            //print_r($this->upload->display_errors());
			    }
			     
                $this->session->set_flashdata('success', get_phrase('data_created_successfully'));
                redirect(site_url('admin/add_product'), 'refresh');
            }else{
            	$this->session->set_flashdata('error', get_phrase('something_went_wrong!'));
            	redirect(site_url('admin/add_product'), 'refresh');
            }
        }
    }
	private function set_upload_options()
	{   
	    //upload an image options
	    $config = array();
	    $config['upload_path'] = './uploads/products/';
	    $config['allowed_types'] = '*';
	    $config['max_size']      = '258463120';
	    $config['overwrite']     = FALSE;
	    return $config;
	}



    public function getcat(){
    	$cat_id = $this->input->post("id");
    	$subcategories = $this->db->get_where('subcategories', array('status'=>1, 'catId'=>$cat_id))->result_array();
    	foreach ($subcategories as $key => $value) { 
          	echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
        }
    }
    public function getsubcat(){
    	$subcat_id = $this->input->post("id");
    	$subcategories = $this->db->get_where('subsubcategories', array('status'=>1, 'subCat'=>$subcat_id))->result_array();
    	foreach ($subcategories as $key => $value) { 
          	echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
        }
    }
    public function view_product()
    {
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    	}
    	$page_data['products'] = $this->db->get_where('produtcs', array('status'=>1))->result_array();
    	$page_data['page_name'] = 'view_product';
        $page_data['page_title'] = get_phrase('View_product');
        $this->load->view('backend/index', $page_data);
    }

    public function add_grade($param1=null)
    {
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    	}
    	$page_data['products'] = $this->db->get_where('produtcs', array('status'=>1))->result_array();
    	$page_data['page_name'] = 'add_grade';
        $page_data['page_title'] = get_phrase('Add_grade');
        $this->load->view('backend/index', $page_data);
        if($param1=="create"){
        	$addgrade = $this->crud_model->addgrade();
            if ($addgrade == 'true'){
                $this->session->set_flashdata('success', get_phrase('data_created_successfully'));
                redirect(site_url('admin/add_grade'), 'refresh');
            }else{
            	$this->session->set_flashdata('error', get_phrase('something_went_wrong!'));
            	redirect(site_url('admin/add_grade'), 'refresh');
            }
        }
    }

    public function view_grade()
    {
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    	}
    	$page_data['page_name'] = 'view_grade';
        $page_data['page_title'] = get_phrase('view_grade');
        $page_data['grade'] = $this->db->get_where('grade', array('status'=>1))->result_array();
        $this->load->view('backend/index', $page_data);

    }

    public function add_place($param1=null)
    {
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    	}
    	$page_data['products'] = $this->db->get_where('produtcs', array('status'=>1))->result_array();
    	$page_data['page_name'] = 'add_place';
        $page_data['page_title'] = get_phrase('add_place');
        $this->load->view('backend/index', $page_data);
        if($param1=="create"){
        	$addgrade = $this->crud_model->addplace();
            if ($addgrade == 'true'){
                $this->session->set_flashdata('success', get_phrase('data_created_successfully'));
                redirect(site_url('admin/add_place'), 'refresh');
            }else{
            	$this->session->set_flashdata('error', get_phrase('something_went_wrong!'));
            	redirect(site_url('admin/add_place'), 'refresh');
            }
        }
    }

     public function view_place()
    {
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    	}
    	$page_data['page_name'] = 'view_place';
    	$page_data['place'] = $this->db->get_where('marketplace', array('status'=>1))->result_array();
        $page_data['page_title'] = get_phrase('view_grade');
        $this->load->view('backend/index', $page_data);
    }

    public function addBlogs($param1=null)
    {
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    	}
    	$page_data['page_name'] = 'add_blogs';
    	$page_data['categories'] = $this->db->get_where('categories', array('status'=>1))->result_array();
        $page_data['page_title'] = get_phrase('Add_blogs');
        $this->load->view('backend/index', $page_data);

        if($param1=="create"){
        	$addpost = $this->crud_model->addpost();
            if ($addpost == 'true'){
            	$title = $this->input->post('title');
            	$name = str_replace(' ','_', $title).time().'.jpg';
        		$name = strtolower($name);
            	$data = array('imgpath'=>$name);
            	$this->db->where('id', $lastid);
            	$this->db->update('blogs', $data);
            	move_uploaded_file($_FILES['blogimg']['tmp_name'], 'uploads/'.$name);

                $this->session->set_flashdata('success', get_phrase('data_created_successfully'));
                redirect(site_url('admin/addBlogs'), 'refresh');
            }else{
            	$this->session->set_flashdata('error', get_phrase('something_went_wrong!'));
            	redirect(site_url('admin/addBlogs'), 'refresh');
            }
        }
        if($param1=="edit"){
        	//$addpost = $this->crud_model->addpost();
            if ($addpost == 'true'){
                $this->session->set_flashdata('success', get_phrase('data_created_successfully'));
                redirect(site_url('admin/addBlogs'), 'refresh');
            }else{
            	$this->session->set_flashdata('error', get_phrase('something_went_wrong!'));
            	redirect(site_url('admin/addBlogs'), 'refresh');
            }
        }
    }

    public function viewBlogs()
    {
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    	}
    	$page_data['blogs'] = $this->db->get_where('blogs', array('status'=>1))->result_array();
    	$page_data['page_name'] = 'view_blogs';
        $page_data['page_title'] = get_phrase('View_blogs');
        $this->load->view('backend/index', $page_data);
    }
    
    public function addSubSubcat($param1=null)
    {
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    	}
    	$page_data['page_name'] = 'add_sub_subcat';
        $page_data['page_title'] = get_phrase('Add_sub_subcat');
        $page_data['categories'] = $this->db->get_where('categories', array('status'=>1))->result_array();
        $page_data['location'] = $this->db->get_where('marketplace', array('status'=>1))->result_array();
        $this->load->view('backend/index', $page_data);
        if($param1=="create"){
        	$name = strtolower($this->input->post('name'));
        	$imgname = str_replace(' ','_', $name).time().'.jpg';
        	$subsubcatadd = $this->crud_model->subsubcatadd();
            if ($subsubcatadd == 'true'){
            	$lastid = $this->db->insert_id();
            	$data = array('imgpath'=>$imgname);
            	$this->db->where('id', $lastid);
            	$this->db->update('subsubcategories', $data);
            	move_uploaded_file($_FILES['subsubimg']['tmp_name'], 'uploads/products/'.$imgname);
                $this->session->set_flashdata('success', get_phrase('data_created_successfully'));
                redirect(site_url('admin/addSubSubcat'), 'refresh');
            }else{
            	$this->session->set_flashdata('error', get_phrase('something_went_wrong!'));
            	redirect(site_url('admin/addSubSubcat'), 'refresh');
            }
        }
    }

        
    public function viewSubSsubcat()
    {
    	if ($this->session->userdata('admin_login') != 1){
    		redirect(site_url('login'),'refresh');
    	}
    	
    	$page_data['page_name'] = 'view_sub_subcat';
    	$page_data['subsubcategories'] = $this->db->get_where('subsubcategories', array('status'=>1))->result_array();
        $page_data['page_title'] = get_phrase(' ');
        $this->load->view('backend/index', $page_data);
    }

}
