<section class="product-details">
    	<div class="container">
            <div class="row compare-folding-section">
                <div class="col-12 text-center">
                    <h2 class="compare-folding-title">Bidding Price of Product</h2>
                    
                </div>
            </div>
         <div class="angular-main-area">
			<!--<div class="row search-product">
                <div class="col-md-6">
                    <h5 class="search-product-title">Single Product Based Multivendor Store Search by product name</h5>
                </div>
                <div class="col-md-6">
                    <div class="input-group product-search-input">
                        <input type="text" class="form-control" placeholder="Search" aria-label="">
                        <span class="input-group-btn">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </div>-->
            <?php foreach ($biddingProduct as $key => $pro) { ?>
            <div class="row compare-products">
                <div class="col-12 p0">
                    <div class="product-info container">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-2 col-xl-2 single-compare-product-img text-center">
                                <img src="<?=base_url()?>uploads/products/<?=$pro['imgpath'];?>" class="figure-img img-fluid" alt="compare">
                                <p><?=$this->db->get_where('subsubcategories', array('id'=>$pro['subsubid']))->row()->name;?></p>
                            </div>
                            <div class="col-lg-10 col-xl-10 col-12 col-md-12">
                                <div class="row">

                                    <div class="col-md-12 p0">
                                        <div class="brand-logos">
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-12 p0">
                                        <div class="product-description">
                                            <div class="row">
                                                <b>Descriptions:</b>
                                                <p><?=$pro['descriptions'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="col-md-12 p0 table table-responsive compare-products-single-table">
                        <tbody>
                        	<tr> 
                        		<td colspan="9"> 
                        			<div style="padding:10px" > 
		                        		<h5 style="text-align:left">Vendor Name : <a href="#"><?=$this->db->get_where('users', array('user_id'=>$pro['userid']))->row()->name;?></a></h5>
			                        	<p style="text-align:left"><b>For Full Lot Bidder</b></p>
			                        </div>
                        		</td>
                        	</tr>
                        	<tr> 
	                    		<th>Market</th>
	                    		<th>Total quantity used in bid</th>
	                    		<th>Bidding Base Price</th>
	                    		<th>Highest Bidding Amount</th>
	                    		<th>Highest bidder name </th>
	                    		<th>Your Offer should be</th>
	                    		<th>Bidding expire</th>
	                    		<th>Bidding Status</th>
	                    	</tr>
                        	<tr>
                        		<td><?=$this->db->get_where('marketplace', array('id'=>$pro['place']))->row()->name;?></td>
                        		<td><?=$pro['biddTotalQuantity']." ".$this->db->get_where('productsunits', array('id'=>$pro['proUnits']))->row()->name;?></td>
                        		<td>$<?=$pro['biddingBaseprice'];?></td>
                        		<td> 
                        			<?php 
                        			$price = $pro['biddingBaseprice'];
                        				$this->db->order_by("biddingPrice", "DESC")->limit(1);
                        				$result = $this->db->get_where('bidding', array('proid' => $pro['id']))->row();
                        				if(@$result->biddingPrice){
                        					echo "$".$result->biddingPrice;
                        					$price = $result->biddingPrice;
                        					$hb = $this->db->get_where('users', array('user_id'=>$result->userid))->row()->name;
										}
                        			?>
                        		</td>
                        		<td><?=@$hb;?></td>
                        		<td>
                        			<?php 
                        			$confirmbiding = $this->db->get_where('bidding', array('proid'=>$pro['id'], 'userid'=> $this->session->userdata('user_id')))->row();
                        			if($confirmbiding){ ?>
                        					<span class='text-success'>Your Bid $<?=$confirmbiding->biddingPrice;?></span>
                        			<?php }else{  ?>
                        				<input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="" onkeyup="keypress(<?=$pro['id'];?>);" id="biddprice_<?=$pro['id'];?>" class="form-control" value="" placeholder="Bidding price" style="display:block;">
                        				<?php if($pro['partialBiddingStatus']==1){ ?>
                        				<input type="hidden" id="bidquantity_<?=$pro['id'];?>" class="form-control" value="<?=$pro['biddTotalQuantity'];?>" style="display:none;">
                        				<!--<input type="hidden" id="singleprice_<?=$pro['id'];?>" class="form-control" value="<?=$pro['singlePrice'];?>">-->
                        				<?php } ?>
                        				<input type="hidden" id="proid_<?=$pro['id'];?>" class="form-control" value="<?=$pro['id'];?>">
                        				<input type="hidden" id="price_<?=$pro['id'];?>" class="form-control" value="<?=$price;?>">
                        				<button id="bidsubmit_<?=$pro['id'];?>" onclick="bidsubmit(<?=$pro['id'];?>);" class="btn btn-primary" style="display:none;">Submit</button>
                        				<span class="text-danger">$<?=++$price?> or more</span>
                        		<?php } ?>
                        		</td>
                        		<td><?=date("H:i:s, d M, Y ", $pro['biddingExpiryDate']);?></td>
                        		<td><?php $bidder = $this->db->get_where('bidding', array('userid'=>$this->session->userdata('user_id'), 'proid'=>$pro['id']))->row();
                        			if($bidder){
                        				if($bidder->status==1){
                        					$bs = "<span  class='text-success'>You win</span>";
                        					echo $bs;
                        				}else if($bidder->status==0){
                        					$bs = "<span class='text-danger'>You loss</span>";
                        					echo $bs;
                        				}else{
                        					$bs = "<span class='text-primary'>Processing</span>";
                        					echo $bs;
                        				}
                        			}else{
                        				$bs = "<span class='text-warning'>Not found</span>";
                        				echo $bs;
                        			}

                        		 ?></td>
                        	</tr>

                        	<br>
                        	<?php 
                    			$partialactive = $this->db->get_where('produtcs', array('partialBiddingStatus'=> 1))->result_array();
                    			if($partialactive){
	                    			$partialbiding = $this->db->get_where('bidding', array('proid'=>$pro['id'], 'partialStatus'=> 1))->result_array();
	                    			if($partialbiding){
	                    				foreach ($partialbiding as $key => $par) { ?>

	                					<tr> 
			                        		<td colspan="9"> 
			                        			<div style="padding:10px" > 
						                        	<p style="text-align:left"><b>For Partial Bidder</b></p>
						                        </div>
			                        		</td>
			                        	</tr>
			                        	<tr> 
				                    		<th>Market</th>
				                    		<th>Total quantity used in bid</th>
				                    		<th>Bidding Base Price ($<?=$pro['singlePrice'];?> / <?=$this->db->get_where('productsunits', array('id'=>$pro['proUnits']))->row()->name;?>)</th>
				                    		<th>Highest Bidding Amount</th>
				                    		<th>Highest bidder name </th>
				                    		<th>Your Offer should be</th>
				                    		<th>Bidding expire</th>
				                    		<th>Bidding Status</th>
				                    	</tr>
			                        	<tr>
			                        		<td><?=$this->db->get_where('marketplace', array('id'=>$pro['place']))->row()->name;?></td>
			                        		<td><?=$par['quantity']." ".$this->db->get_where('productsunits', array('id'=>$pro['proUnits']))->row()->name;?></td>
			                        		<td>$<?=$par['biddingPrice'];?></td>
			                        		<td> 
			                        			<?php 
			                        			$price = $par['biddingPrice'];
			                        				$this->db->order_by("biddingPrice", "DESC")->limit(1);
			                        				$result = $this->db->get_where('bidding', array('proid' => $pro['id'], 'quantity'=>$par['quantity']))->row();
			                        				if(@$result->biddingPrice){
			                        					echo "$".$result->biddingPrice;
			                        					$price = $result->biddingPrice;
			                        					$hb = $this->db->get_where('users', array('user_id'=>$result->userid))->row()->name;
													}
			                        			?>
			                        		</td>
			                        		<td><?=@$hb;?></td>
			                        		<td>
			                        		<?php 
			                        		$confirmbidingfull = $this->db->get_where('bidding', array('proid'=>$pro['id'], 'userid'=> $this->session->userdata('user_id')))->row();
			                        		if($confirmbidingfull){
			                        			echo "---";
			                        		}else{
			                        			$confirmbiding = $this->db->get_where('bidding', array('proid'=>$pro['id'], 'userid'=> $this->session->userdata('user_id'), 'partialStatus'=>1))->row();
			                        			if($confirmbiding){ ?>
			                        					<span class='text-success'>Your Bid $<?=$confirmbiding->biddingPrice;?></span>
			                        			<?php }else{  ?>
			                        				<input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="" onkeyup="keypress(<?=$pro['id'];?>);" id="biddprice_<?=$pro['id'];?>" class="form-control" value="" placeholder="Bidding price" style="display:block;">
			                        				<?php if($pro['partialBiddingStatus']==1){ ?>
			                        				<input type="hidden" id="bidquantity_<?=$pro['id'];?>" class="form-control" value="<?=$pro['biddTotalQuantity'];?>" style="display:none;">
			                        				<!--<input type="hidden" id="singleprice_<?=$pro['id'];?>" class="form-control" value="<?=$pro['singlePrice'];?>">-->
			                        				<?php } ?>
			                        				<input type="hidden" id="proid_<?=$pro['id'];?>" class="form-control" value="<?=$pro['id'];?>">
			                        				<input type="hidden" id="price_<?=$pro['id'];?>" class="form-control" value="<?=$price;?>">
			                        				<button id="bidsubmit_<?=$pro['id'];?>" onclick="bidsubmit(<?=$pro['id'];?>);" class="btn btn-primary" style="display:none;">Submit</button>
			                        				<span class="text-danger">$<?=++$price?> or more</span>
			                        		<?php 	}
			                        			}
			                        		 ?>
			                        		</td>
			                        		<td><?=date("H:i:s, d M, Y ", $pro['biddingExpiryDate']);?></td>
			                        		<td><?php $bidder = $this->db->get_where('bidding', array('userid'=>$this->session->userdata('user_id'), 'proid'=>$pro['id']))->row();
			                        			if($bidder){
			                        				if($bidder->status==1){
			                        					$bs = "<span  class='text-success'>You win</span>";
			                        					echo $bs;
			                        				}else if($bidder->status==0){
			                        					$bs = "<span class='text-danger'>You loss</span>";
			                        					echo $bs;
			                        				}else{
			                        					$bs = "<span class='text-primary'>Processing</span>";
			                        					echo $bs;
			                        				}
			                        			}else{
			                        				$bs = "<span class='text-warning'>Not found</span>";
			                        				echo $bs;
			                        			}

			                        		 ?></td>
			                        	</tr>
			                        	<table id="myTable" class="bid-list_<?=$pro['id'];?>" border="0">
		                        			<input type="hidden" id="proid_<?=$pro['id'];?>" value="<?=$pro['id'];?>">
		                        			<input type="hidden" id="place_<?=$pro['id'];?>" value="<?=$this->db->get_where('marketplace', array('id'=>$pro['place']))->row()->name;?>">
		                        			<input type="hidden" id="price_<?=$pro['id'];?>" value="<?=$price;?>">
		                        			<input type="hidden" id="single_<?=$pro['id'];?>" value="<?=$pro['singlePrice'];?>">
		                        			<input type="hidden" id="expiry_<?=$pro['id'];?>" value="<?=date("H:i:s, d M, Y ", $pro['biddingExpiryDate']);?>">

			                        		<tr><input type="button" onclick="addrows(<?=$pro['id'];?>);" class="btn btn-primary" id="addrow_<?=$pro['id'];?>" value="+" /></tr>
			                        	</table>
		                        	<?php  } 
		                        		} 
		                        	} ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
        	<?php } ?>
            </div>
    	</div>
    </section>

<script type="text/javascript">
// This is add row sections 

function addrows(id) {
	document.getElementById("addrow_"+id).style.display = 'none';
	var place = document.getElementById('place_'+id).value;
	var expiry = document.getElementById('expiry_'+id).value;
    var counter = 0;
    var newRow = $("<tr>");
    var cols = "";

    cols += '<td>'+place+'</td>';
    cols += '<td><input type="number" class="form-control" name="bidquantity"/></td>';
    cols += '<td>--</td>';
    cols += '<td>--</td>';
    cols += '<td>--</td>';
    cols += '<td><input type="number" class="form-control" id="partialprice_'+id+'" name="partialprice"  onkeyup="keypresss('+id+');"/><button id="bidsubmite_'+id+'" onclick="bidsubmited('+id+');" class="btn btn-primary" style="display:none;">Submit</button></td>';
    cols += '<td>'+expiry+'</td>';

    cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
    newRow.append(cols);
    $("table.bid-list_"+id).append(newRow);
    counter++;

    $("table.bid-list_"+id).on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
        document.getElementById("addrow_"+id).style.display = 'block';
    });
    


}

function bidsubmited(id){
	var partialprice = document.getElementById('partialprice_'+id).value;
	var singleprice = document.getElementById('single_'+id).value;
	var bidquantity = document.getElementById('bidquantity').value;
	var price = singleprice*bidquantity;
	alert(singleprice);
	
	if(partialprice>price){
		var userid = "<?=$this->session->userdata('user_id');?>";
		if(userid){
			$.ajax({  
		        url:"<?=base_url();?>home/partialbidding",  
		        method:"POST",  
		        data:{id:id, partialprice:partialprice, bidquantity:bidquantity, singleprice:singleprice},  
		        success:function(a){ 
		        	if (a){
			     		alert("Successfully bid submited!");
			     		location.reload();
			     	}else {
			     		alert("Something went wrong!");
			     	}
		        }  
		    });
		}else{
			alert("Please login first!");
		}
	}else{
		alert("Please input your bidding price greater than base and highest price!");
	}
}

function keypresss(id){
	document.getElementById("bidsubmite_"+id).style.display = 'block';
}

function keypress(id){
	document.getElementById("bidsubmite_"+id).style.display = 'block';
	//document.getElementById("bidquantity_"+id).style.display = 'block';
}
function bidsubmit(id){
	var biddprice = document.getElementById('biddprice_'+id).value;
	var id = document.getElementById('proid_'+id).value;
	var price = document.getElementById('price_'+id).value;
	var bidquantity = document.getElementById('bidquantity_'+id).value;
	if(biddprice>price){
		var userid = "<?=$this->session->userdata('user_id');?>";
		if(userid){
			$.ajax({  
		        url:"<?=base_url();?>home/biddingsubmit",  
		        method:"POST",  
		        data:{id:id, biddprice:biddprice, bidquantity:bidquantity},  
		        success:function(a){ 
		        	if (a){
			     		alert("Successfully bid submited!");
			     		location.reload();
			     	}else {
			     		alert("Something went wrong!");
			     	}
		        }  
		    });
		}else{
			alert("Please login first!");
		}
	}else{
		alert("Please input your bidding price greater than base and highest price!");
	}
}

var app = angular.module("mainApp",[]);
app.controller("appcnt",function($scope,$http){
       $http.get("<?=base_url()?>")  
       .success(function(data){  
           $scope.datas = data;
       }); 
    
})


</script>