<section id="tabs">
	<div class="container">
		<h6 class="section-title h1">Edit page</h6>
		<div class="row">
			<div class="col-md-12 ">
				<div class="tab-content py-3 px-3 px-sm-0">
						<form role="form" method="post" action="<?=base_url();?>home/add_product/update" enctype="multipart/form-data">
			              <div class="box-body">
			               <div class="form-group">
			                  <label for="">Category <span class="text-danger">*</span></label>
			                  <select disabled class="form-control" id="proCat" onclick="categorychange(this.value)" name="proCat" required>
			                      <option value="<?=$products->proCat?>"><?=$this->db->get_where('categories', array('status'=>1, 'id'=>$products->proCat))->row()->name;?></option>
			                      <?php foreach ($categories as $key => $value) { ?>
			                      	<option value="<?=$value['id'];?>"><?=$value['name'];?></option>
			                  	  <?php } ?>
			                  </select>
			                </div>
			                <div class="form-group">
			                  <label for="">Sub Category <span class="text-danger">*</span></label>
			                  <select disabled class="form-control" name="proSubCat" id="prosubcat" onclick="subcategorychange(this.value)" required>
			                      <option value="<?=$products->proSubCat?>"><?=$this->db->get_where('subcategories', array('status'=>1, 'id'=>$products->proSubCat))->row()->name;?></option>
			                  </select>
			                </div>
			                <div class="form-group">
			                  <label for="">Sub Sub Category <span class="text-danger">*</span></label>
			                  <select disabled class="form-control" name="subsubid" id="prosubsubcat" required>
			                      <option value="<?=$products->subsubid?>"><?=$this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$products->subsubid))->row()->name;?></option>
			                  </select>
			                </div>
			                
			                <div class="form-group">
			                  <label for="exampleInputEmail1">Current Price <span class="text-danger">*</span></label>
			                  <input type="hidden" class="form-control" id="" placeholder="Price" value="<?=$products->id?>" name="proId">
			                  <input type="hidden" class="form-control" id="" placeholder="Price" value="<?=$products->currentPrice;?>" name="oldPrice">
			                  <input type="text" class="form-control" id="" placeholder="Price" value="<?=$products->currentPrice;?>" name="currentPrice" required>
			                </div>

			                <div class="form-group">
			                    <label for="exampleInputEmail1">New offer Price (Optional) <br><small>N.B: If you want to sell an offering price please input your new price!</small></label>
			                    <input type="text" class="form-control" id="" placeholder="Price" value="<?=$products->oldPrice?>" name="currentPrice" required>
			                </div>

			                 <div class="form-group">
			                  <label for="exampleInputEmail1">Product Description <span class="text-danger">*</span></label>
			                  <textarea class="textarea form-control" name="descriptions" required><?=$products->descriptions?></textarea>
			                </div>
			            
			                <div class="form-group">
			                    <label>Quantity <span class="text-danger">*</span></label>
			                    <input type="text" class="form-control" id="" value="<?=$products->quantity?>" name="quantity" required>
			                </div>
			                
			                <div class="form-group">
			                  <label>Units <span class="text-danger">*</span></label>
			                  <select class="form-control" name="proUnits" required>
			                      <option value="<?=$products->proUnits?>"><?=$this->db->get_where('productsunits', array('status'=>1, 'id'=>$products->proUnits))->row()->name;?></option>
			                      <?php foreach ($units as $key => $value) { ?>
			                      	<option value="<?=$value['id'];?>"><?=$value['name'];?></option>
			                  	  <?php } ?>
			                  </select>
			                  </div>
			                  
			                  <div class="form-group">
			                  <label>Size</label><br>
			                  	 <input type="radio" name='size' value='large' data-id="bank" <?php if($products->size=="large"){ ?> checked <?php }?> />Large <br>
			                  	 <input type="radio" name='size' value='medium' data-id="bank" <?php if($products->size=="medium"){ ?> checked <?php }?> />Medium <br>
			                  	 <input type="radio" name='size' value='small' data-id="bank" <?php if($products->size=="small"){ ?> checked <?php }?> />Small <br>
			                  </div>
			                  
			                  <div class="form-group">
			                  <label>Color</label>
			                     <input type="text" class="form-control" id="" value="<?=$products->color?>" name="color">
			                  </div>
			                  <!--<div class="form-group">
			                  <label>Use by date/Expiry date <span class="text-danger">*</span></label>
			                     <input type="date" class="form-control" id="" value="<?=@date("d M, Y H:i:s", @$products->expiry_date)?>" name="expiry_date" required>
			                  </div>-->
			                  
			                <div class="form-group">
			                    <label>Place <span class="text-danger">*</span></label>
			                    <select class="form-control" name="place" required>
			                        <option value="<?=$products->place;?>"><?=$this->db->get_where('marketplace', array('status'=>1, 'id'=>$products->place))->row()->name;?></option>
			                        <?php foreach ($marketplace as $key => $value) { ?>
			                      	<option value="<?php if($value['id']==$products->place){ }else{ echo $value['id']; }?>"><?php if($value['name']== $this->db->get_where('marketplace', array('status'=>1, 'id'=>$products->place))->row()->name){ }else{ echo $value['name'];}?></option>
			                  	  <?php } ?>
			                    </select>
			                </div>

			                <div class="form-group">
			                  	<label>Bidding offer</label><br>
			                  	<input type="radio" name='biddingStatus' onclick="biddingStatuson();" value='1' data-id="bank" <?php if($products->biddingStatus==1){ ?> checked <?php }?> />On <br>
			                  	<input type="radio" name='biddingStatus' onclick="biddingStatusoff();" value='0' data-id="bank" <?php if($products->biddingStatus==0){ ?> checked <?php }?> />Off <br>
			                  	<br>
			                  	
			                </div>
			                <div class="form-group" id="partialOptions" <?php if($products->biddingStatus==1){ }else{ ?> style="display:none;" <?php } ?> >
			                  	<label> Partial Bidding </label><br>
		                  	 	<input type="radio" name='partialBiddingStatus' onclick="partialbiddingStatuson();" value='1' data-id="bank" <?php if($products->partialBiddingStatus==1){ ?> checked <?php }?> />Yes <br>
		                  	 	<input type="radio" name='partialBiddingStatus' onclick="partialbiddingStatusoff();" value='0' data-id="bank" <?php if($products->partialBiddingStatus==0){ ?> checked <?php }?> />No <br>
			                </div>
			                <div id="partialBiddin" <?php if($products->partialBiddingStatus==1){ }else{ ?> style="display:none;" <?php } ?>>
				                <div class="form-group">
				                  	<label for="">Bidding Details</label>
				                  	<textarea class="textarea form-control" name="biddingDetails"><?=$products->biddingDetails?></textarea>
				                </div>
				                <!--<div class="form-group">
					                <label for="">Bidding base Price</label>
					                <input type="text" class="form-control" id="" placeholder="Bidding base price" value="<?=$products->biddingBaseprice?>" name="biddingBaseprice">
					            </div>-->
				                <div class="form-group">
					                <label for="">Single Price</label>
					                <input type="text" class="form-control" id="" placeholder="Single Price" value="<?=$products->singlePrice?>" name="singlePrice">
					            </div>
					           	<div class="form-group">
					                <label for="">Bidding minimum quantity</label>
					                <input type="text" class="form-control" id="" placeholder="Bidding minimum quantity" value="<?=$products->biddingMinquantity?>" name="biddingMinquantity">
					            </div>
					            <div class="form-group">
					                <label for="">Bidding Total quantity</label>
					                <input type="text" class="form-control" id="" placeholder="Bidding total quantity" value="<?=$products->biddTotalQuantity?>" name="biddTotalQuantity">
					            </div>
					            <div class="form-group">
					                <label for="">Bidding Expiry Date </label>
					                <input value="<?=date("d M, Y H:i:s", $products->biddingExpiryDate);?>" type="date" class="form-control" id="" placeholder="Bidding Expiry Date"  name="biddingExpiryDate">
					            </div>
					        </div>

			                  
		                <!--<div class="form-group">
		                      <label>Front Image</label>
		                      <?php if($value->imgpath){ ?><img src="<?=base_url()."uploads/products/".$value->imgpath;?>" style="width:60px;"><?php } ?>
		                      <input type="file" name="proimg" class="form-control" accept="image/*" value="" required>
		                    </div>
		                    <div class="form-group">
		                      <label>More Images</label>
		                      <input type="file" name="promultiimg[]" multiple="" accept="image/*" class="form-control" value="" required>
		                    </div>-->
			              </div>
			              <div class="box-footer">
			                <input type="submit" class="btn btn-info" value="Update" name="update"/>
			              </div>
			            </form>
				</div>
			
			</div>
		</div>
	</div>
</section>
<script> 
function biddingStatuson(){
	document.getElementById("partialOptions").style.display = 'block';
}
function biddingStatusoff(){
	document.getElementById("partialOptions").style.display = 'none';
	document.getElementById("partialBiddin").style.display = 'none';
}
function partialbiddingStatuson(){
	document.getElementById("partialBiddin").style.display = 'block';
}
function partialbiddingStatusoff(){
	document.getElementById("partialBiddin").style.display = 'none';
}
</script>