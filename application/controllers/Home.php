<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function  __construct(){
        parent::__construct();
        $this->load->model('Products');
        $this->load->library('form_validation');
    }
	public function index()
	{
		$this->load->library("pagination");
		$where=array('status' => 1 );
		$config["base_url"] = base_url() . "home/index";
	    $config["total_rows"] = $this->Products->record_count($where,"produtcs");
	    $config["per_page"] = 12;
	    $config["uri_segment"] = 3;
	    $choice = $config["total_rows"] / $config["per_page"];
	    $config["num_links"] = round($choice);
	    $config['full_tag_open'] = '<div class=""><nav class="wd-pagination"><ul class="pagination">';
	    $config['full_tag_close'] = '</ul></nav></div>';
	    $config['num_tag_open'] = '<li class="page-link">';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="page-link active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['prev_tag_open'] = '<li class="page-link">';
	    $config['prev_tag_close'] = '</li>';
	    $config['first_tag_open'] = '<li class="page-link">';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li class="page-link">';
	    $config['last_tag_close'] = '</li>';
	    $config['prev_link'] = '<span aria-hidden="true" class="fa fa-angle-left"></span>';
	    $config['prev_tag_open'] = '<li class="page-link">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '<span aria-hidden="true" class="fa fa-angle-right"></span>';
	    $config['last_link'] = '<span aria-hidden="true" class="fa fa-angle-double-right"></span>';
	    $config['next_tag_open'] = '<li class="page-link">';
	    $config['next_tag_close'] = '</li>';
	    $this->pagination->initialize($config);
	    $pages = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
	    $data["products"] = $this->Products
	        ->fetch_products($where,$config["per_page"], $pages,"produtcs");
	    $page = $this->uri->segment(3);
	    if(@$page==null){
	    	$page=0;
	    }
	    $data['page'] = $page;
   		$data['links'] =$this->pagination->create_links();

		$this->db->order_by('id','desc');
		//$data['products'] = $this->db->get_where("produtcs", array('status'=>1))->result_array(); 
		$this->db->order_by('id','desc');
		$data['blogsPost'] = $this->db->get_where("blogs", array('status'=>1))->result_array(); 
		$this->load->view('header',$data);
		$this->load->view('slider');
		$this->load->view('index');
		$this->load->view('footer');
	
	}
	public function categories($param1=null){
		$data['categorypro'] = $this->db->get_where("produtcs", array('status'=>1, 'proCat'=>$param1))->result_array();
		$this->load->view('header');
		$this->load->view('slider');
		$this->load->view('categories', $data);
		$this->load->view('footer');
	}
    public function single($id=null){
    	$data['products'] = $this->db->get_where("produtcs", array('status'=>1, 'id'=>$id))->row(); 
    	$proCat = $this->db->get_where("produtcs", array('status'=>1, 'id'=>$id))->row()->proCat;
    	$proSubCat = $this->db->get_where("produtcs", array('status'=>1, 'id'=>$id))->row()->proSubCat;
    	$data['relatedproducts'] = $this->db->get_where("produtcs", array('status'=>1, 'proCat'=>$proCat, 'proSubCat'=>$proSubCat))->result_array(); 
    	$data['proimages'] = $this->db->get_where("proimages", array('status'=>1, 'proid'=>$id))->result_array(); 
        $this->load->view('header',$data);
		$this->load->view('page_slider');
		$this->load->view('single');
		$this->load->view('footer');
    }
    public function product()
    {
        $this->load->view("header");
        $this->load->view("page_slider");
        $this->load->view("product");
        $this->load->view("footer");
    }
    public function search($param1=null,$param2=null,$param3=null,$param4=null,$param5=null,$param6=null)
    {
	    if($param1=='text'){
	    	$searchtext = $this->input->post('searchtext');
	    	$sql = "SELECT p.id, p.imgpath, s.name, p.subsubid, p.currentPrice 
	    			FROM produtcs p 
	    			JOIN subsubcategories s 
	    			ON s.name like '%$searchtext%' 
	    			WHERE s.id=p.subsubid 
	    			ORDER BY p.id DESC";

			$query = $this->db->query($sql);
			$result = $query->result_array();
	    	$data['searchtext'] = $searchtext;
	    	$data['products'] = $result;
	    	$data['catname'] = $searchtext;
	        $this->load->view("header", $data); 
	        $this->load->view("search");
	        $this->load->view("footer");
	    }else{
	    	if(($param1!=null) && ($param2==null) && ($param3==null) && ($param4==null) && ($param5==null)){
	    		$data['products'] = $this->db->get_where("produtcs", array('status'=>1, 'proCat'=>$param1))->result_array(); 
	    	}elseif (($param1!=null) && ($param2!=null) && ($param3==null) && ($param4==null) && ($param5==null)) {
	    		$data['subcatname'] = $this->db->get_where("subcategories", array('status'=>1, 'id'=>$param2))->row()->name;
	    		$data['products'] = $this->db->get_where("produtcs", array('status'=>1, 'proCat'=>$param1, 'proSubCat'=>$param2))->result_array(); 
	    	}elseif (($param1!=null) && ($param2!=null) && ($param3!=null) && ($param4==null) && ($param5==null)) {
	    		$this->db->select('*');
				$this->db->from('produtcs');
				$this->db->like('subsubid',$param3);
				$query = $this->db->get();
				$result = $query->result_array();
	    		$data['products'] = $result;
	    	}elseif (($param1!=null) && ($param2!=null) && ($param3!=null) && ($param4!=null) && ($param5==null)) {
	    		$this->db->select('*');
				$this->db->from('produtcs');
				$this->db->like('subsubid',$param3);
				$this->db->where('place',$param4);
				$query = $this->db->get();
				$result = $query->result_array();
	    		$data['products'] = $result;
	    	}elseif (($param1!=null) && ($param2!=null) && ($param3!=null) && ($param4!=null) && ($param5!=null)) {
	    		$this->db->select('*');
				$this->db->from('produtcs');
				$this->db->like('subsubid',$param3);
				$this->db->or_like('currentPrice',$param5);
				$this->db->or_like('oldPrice',$param5);
				$this->db->where('place',$param4);
				$query = $this->db->get();
				$result = $query->result_array();
	    		$data['products'] = $result;
	    	}elseif (($param1!=null) && ($param2!=null) && ($param3!=null) && ($param4!=null) && ($param5!=null) && ($param6!=null)) {
	    		$this->db->select('*');
				$this->db->from('produtcs');
				$this->db->like('subsubid',$param3);
				$this->db->or_like('currentPrice',$param5);
				$this->db->or_like('oldPrice',$param5);
				$this->db->where('place',$param4);
				$query = $this->db->get();
				$result = $query->result_array();
	    		$data['products'] = $result;
	    	}
	    	$data['catid'] = $param1;
	    	$data['subcatid'] = $param2;
	    	$data['productid'] = $param3;
	    	$data['placeid'] = $param4;
	    	$data['price'] = $param5;
	    	$data['pricerange'] = $param5;
	    	$data['catname'] = $this->db->get_where("categories", array('status'=>1, 'id'=>$param1))->row()->name;
	        $this->load->view("header", $data);
	        $this->load->view("search");
	        $this->load->view("footer");
	    }
    }
    public function export()
    {
        $this->load->view("header");
        $this->load->view("page_slider");
        $this->load->view("export");
        $this->load->view("footer");
    }
    public function blog()
    {
        $this->load->view("header");
        $this->load->view("blog");
        $this->load->view("footer");
    }
    public function contact()
    {
        $this->load->view("header");
        $this->load->view("contact");
        $this->load->view("footer");
    }

    public function regular_price()
    {
    	$this->db->order_by('id', 'desc');
    	$data['products'] = $this->db->get_where("produtcs", array('status'=>1))->result_array(); 
    	$this->load->view("header");
    	$this->load->view("regular_price", $data);
    	$this->load->view("footer");

    }

    public function bidding_price()
    {
    	$this->db->order_by('id', 'desc');
    	$data['subsubcategories'] = $this->db->get_where("subsubcategories", array('status'=>1))->result_array();
    	$this->db->order_by('id', 'DESC'); 
    	$data['biddingProduct'] = $this->db->get_where("produtcs", array('status'=>1, 'biddingStatus'=> 1))->result_array(); 
    	$this->load->view("header");
    	$this->load->view("bidding_price", $data);
    	$this->load->view("footer");
    }
    public function special_price()
    {
    	$this->db->order_by('id', 'desc');
    	$data['products'] = $this->db->get_where("produtcs", array('status'=>1))->result_array(); 
    	$this->load->view("header");
    	$this->load->view("special_price", $data);
    	$this->load->view("footer");
    }
    public function myaccount()
    {
    	if ($this->session->userdata('user_id')){
    		$user_id = $this->session->userdata('user_id');
	    	$data['user'] 		= $this->db->get_where("users", array('user_id'=>$user_id))->row();
	    	$data['categories']   = $this->db->get_where("categories", array('status'=>1))->result_array(); 
	    	$data['marketplace']   = $this->db->get_where("marketplace", array('status'=>1))->result_array(); 
	    	$data['biddingProduct'] = $this->db->get_where("produtcs", array('status'=>1, 'biddingStatus'=> 1))->result_array(); 
	    	$data['units'] = $this->db->get_where("productsunits", array('status'=>1))->result_array(); 
	    	$data['myproducts'] = $this->db->get_where("produtcs", array('status'=>1, 'userid'=> $user_id))->result_array(); 
	    	$this->load->view("header");
	    	$this->load->view("myaccount", $data);
	    	$this->load->view("footer");
    	}else{
    		redirect(site_url('home'),'refresh');
    	}
    }
    public function edit($id=null)
    { 
    	if ($this->session->userdata('user_id')){
	    	$user_id = $this->session->userdata('user_id');
	    	$data['user'] 		= $this->db->get_where("users", array('user_id'=>$user_id))->row();
	    	$data['marketplace']   = $this->db->get_where("marketplace", array('status'=>1))->result_array(); 
	    	$data['categories']   = $this->db->get_where("categories", array('status'=>1))->result_array(); 
	    	$data['products'] = $this->db->get_where("produtcs", array('status'=>1, 'id'=> $id))->row(); 
	    	$this->load->view("header");
	    	$this->load->view("edit_product", $data);
	    	$this->load->view("footer");
	    }else{
    		redirect(site_url('home'),'refresh');
    	}
    }
    public function add_product($param1=''){
    	if ($this->session->userdata('user_id')){
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
	                redirect(site_url('home/myaccount'), 'refresh');
	            }else{
	            	$this->session->set_flashdata('error', get_phrase('something_went_wrong!'));
	            	redirect(site_url('home/myaccount'), 'refresh');
	            }
	        }

    		if($param1=="update"){
	        	$updateproduct = $this->crud_model->updateproduct();
	            if ($updateproduct == true){
	                $this->session->set_flashdata('success', get_phrase('data_update_successfully'));
	                redirect(site_url('home/myaccount'), 'refresh');
	            }else{
	            	$this->session->set_flashdata('error', get_phrase('something_went_wrong!'));
	            	redirect(site_url('home/myaccount'), 'refresh');
	            }
	        }
    	}else{
    		$this->session->set_flashdata('error', 'please login first!');
    		redirect(site_url('home'),'refresh');
    	}
    }
    
    public function single_blog($id=null)
    {
    	$data['post'] = $this->db->get_where("blogs", array('status'=>1, 'id'=>$id))->row(); 
        $this->load->view("header");
    	$this->load->view("single_blog", $data);
    	$this->load->view("footer");
    }
    public function privacy()
    {
        $this->load->view("header");
    	$this->load->view("privacy");
    	$this->load->view("footer");
    }
    public function retrun_policy()
    {
        $this->load->view("header");
    	$this->load->view("retrun_policy");
    	$this->load->view("footer");
    }
    public function terms_condition()
    {
        $this->load->view("header");
    	$this->load->view("terms_condition");
    	$this->load->view("footer");
    }
    public function get_price_data()
    {
    	/*$data = $this->db->select('*')
	     ->from('subsubcategories as s')
	     ->where('p.biddingStatus', 1)
	     ->join('produtcs as p', 's.id = p.subsubid', 'LEFT')
	     ->group_by('s.id') 
	     ->get();*/

    	$data = $this->db->get_where("subsubcategories", array('status'=>1))->result_array();
        echo json_encode($data);
    }
    public function compare()
    {
        $this->load->view("header");
    	$this->load->view("compare");
    	$this->load->view("footer");
    }
    public function review()
    {
        $this->load->view("header");
        $this->load->view("review");
        $this->load->view("footer");
    }
    public function vendor()
    {
        $this->load->view("header");
        $this->load->view("vendor");
        $this->load->view("footer");
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
    public function partialbidding(){
    	$user_id = $this->session->userdata('user_id');
    	$id = $this->input->post('id');
    	$biddprice = $this->input->post('partialprice');
    	$data = array(
    			'proid' =>$id,
    			'userid' =>$user_id,
    			'biddingPrice' =>$biddprice,
    			'singlePrice' =>$this->input->post('singleprice'),
    			'quantity' =>$this->input->post('bidquantity'),
    			'partialStatus' =>1,
    			'createDate' => strtotime(date('m/d/Y H:i:s')),
    			'updateDate' => strtotime(date('m/d/Y H:i:s')),
    			'status' => 2,
    		);

    	$result = $this->db->insert("bidding", $data);
    	if($result){
    		return true;
    	}else{
    		return false;
    	}
    }

    public function biddingsubmit(){
    	$user_id = $this->session->userdata('user_id');
    	$id = $this->input->post('id');
    	$biddprice = $this->input->post('biddprice');
    	$data = array(
    			'proid' =>$id,
    			'userid' =>$user_id,
    			'biddingPrice' =>$biddprice,
    			'singlePrice' =>0,
    			'quantity' =>$this->input->post('bidquantity'),
    			'partialStatus' =>0,
    			'createDate' => strtotime(date('m/d/Y H:i:s')),
    			'updateDate' => strtotime(date('m/d/Y H:i:s')),
    			'status' => 2,
    		);

    	$result = $this->db->insert("bidding", $data);
    	if($result){
    		return true;
    	}else{
    		return false;
    	}
    }

    public function getviewdata()
    {
    	$user_id = $this->session->userdata('user_id');
    	$id = $this->input->post("id");
    	$proid = $this->db->get_where("produtcs", array('status'=>1, 'id'=> $id))->row(); 

    	
    	
    }

}
