<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    function  __construct(){
        parent::__construct();
    }
	public function index()
	{
		
	
	}
	function singleProduct(){
		$id = $this->input->post('id');
		$products = $this->db->get_where("produtcs", array('status'=>1, 'id'=> $id))->row();
		echo '<div style="width:100%;"> 
	     	<div style="padding:5px;float:left;width:220px;margin-right:5px">
	     		<div style="width:220px">
	     			<img src="'.base_url().'uploads/products/'.$products->imgpath.'">
	     			<ul> 
	     				<li>Title: '.$products->subsubid.'</li>
	     				<li>SKU: '.$products->sku.'</li>
	     				<li>Place: '.$products->place.'</li>
	     				<li>Price: '.$products->currentPrice.'</li>
	     				<li>Category: '.$products->proCat.'</li>
	     				<li>Sub - Category: '.$products->proSubCat.'</li>
	     				<li>Expire Date: '.$products->expiry_date.'</li>
	     				
	     			</ul>
	     			
	     		</div>
	     	</div>
	     	<div style="float:right;width:60%"> 
	     		<h3 style="display:block">Red Delicious</h3>
	     		<b>Description :</b>
	     		<p>'.$products->descriptions.'</p>
	     	</div>
     	</div>';
	}

}
