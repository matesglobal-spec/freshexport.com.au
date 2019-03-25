<section id="tabs">
	<div class="container">
		<h6 class="section-title h1">Account</h6>
		<div class="row">
			<div class="col-md-12 ">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="nav-home" aria-selected="true">Profile</a>
					<?php if($user->type==3){ ?>
						<a class="nav-item nav-link " id="nav-profile-tab" data-toggle="tab" href="#your_product" role="tab" aria-controls="nav-profile" aria-selected="false">Products</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#add_product" role="tab" aria-controls="nav-contact" aria-selected="false">Add Product</a>
					<?php } ?>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#bidding_info" role="tab" aria-controls="nav-profile" aria-selected="false">Bidding Info</a>
						<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#purchased_product" role="tab" aria-controls="nav-about" aria-selected="false">Purchased Product</a>
						<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#your_offer" role="tab" aria-controls="nav-about" aria-selected="false">Offer products</a>
						
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="nav-home-tab">
						<div class="row">
						   
						    <div class="col-md-6">
						        <div class="profile-image">
						            
						        </div>
						        <form method="post" action="<?=base_url();?>login/profile_edit">
						           <div class="form-group">
                                        <label>Name</label>
                                        <input type="hidden" name="user_id" class="form-control" value="<?=$user->user_id;?>">
                                        <input type="text" name="name" class="form-control" value="<?=$user->name;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Father Name</label>
                                        <input type="text" name="father_name" class="form-control" value="<?=$user->father_name;?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control" value="<?=$user->phone;?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Date Of Birth</label>
                                        <input type="date" name="date_of_birth" class="form-control" value="<?=date("D M, Y", $user->date_of_birth);?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control"> 
                                        	<option value="male" <?php if($user->gender=="male"){ echo "selected"; }?>>Male </option>
                                        	<option value="female" <?php if($user->gender=="female"){ echo "selected"; }?>>Female </option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Local Address</label>
                                        <textarea name="local_address" class="form-control"><?=$user->local_address;?></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Permatent Address</label>
                                        <textarea name="permanent_address" class="form-control"><?=$user->permanent_address;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <input type="text" name="nationality" class="form-control" value="<?=$user->nationality;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Marital status</label>
                                        <input type="text" name="martial_status" class="form-control" value="<?=$user->martial_status;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" value="<?=$user->email;?>">
                                    </div>
                                    <input type="submit" name="update" value="Save" class="btn btn-info">
						        </form>
						    </div>
						   
						</div>
					</div>
					<div class="tab-pane fade" id="bidding_info" role="tabpanel" aria-labelledby="nav-profile-tab">
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
				                            		<th>Market </th>
				                            		<th>Price </th>
				                            		<th>Bidding base Price </th>
				                            		<th>Highest Bidder  </th>
				                            		<th>Your Offer  </th>
				                            		<th>Offer Expire </th>
				                            		<th>Bidding Status </th>
				                            	</tr>

				                            	<tr>
				                            		<td><?=$this->db->get_where('marketplace', array('id'=>$pro['place']))->row()->name;?></td>
				                            		<td>$<?=$pro['currentPrice'];?></td>
				                            		<td>$<?=$pro['biddingBaseprice'];?></td>
				                            		<td> 
				                            			<?php 
				                            			$price = $pro['biddingBaseprice'];
				                            				$this->db->order_by("biddingPrice", "DESC")->limit(1);
				                            				$result = $this->db->get_where('bidding', array('proid' => $pro['id']))->row();
				                            				if(@$result->biddingPrice){
				                            					echo "$".$result->biddingPrice;
				                            					$price = $result->biddingPrice;
															}
				                            			?>
				                            		</td>
				                            		<td>
				                            			<?php 
				                            			$confirmbiding = $this->db->get_where('bidding', array('proid'=>$pro['id'], 'userid'=> $this->session->userdata('user_id')))->row();
				                            			if($confirmbiding){ ?>
				                            					<span>$<?=$confirmbiding->biddingPrice;?></span>
				                            				<?php }else{  ?>
				                            				<input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="" onkeyup="keypress(<?=$pro['id'];?>);" id="biddprice_<?=$pro['id'];?>" class="form-control" value="" style="display:block;">
				                            				<input type="hidden" id="proid_<?=$pro['id'];?>" class="form-control" value="<?=$pro['id'];?>">
				                            				<input type="hidden" id="price_<?=$pro['id'];?>" class="form-control" value="<?=$price;?>">
				                            				<button id="bidsubmit_<?=$pro['id'];?>" onclick="bidsubmit(<?=$pro['id'];?>);" class="btn btn-primary" style="display:none;">Submit</button>
				                            		<?php } ?>
				                            		<span id="biddingPrice" style="display:none;"></span>
				                            		</td>
				                            		<td><?=date("H:i:s, d M, Y ", $pro['biddingExpiryDate']);?></td>
				                            		<td><?php $bidder = $this->db->get_where('bidding', array('userid'=>$this->session->userdata('user_id'), 'proid'=>$pro['id']))->row();
				                            			if($bidder){
				                            				if($bidder->status==1){
				                            					echo "<span  class='text-success'>You win</span>";
				                            				}else if($bidder->status==0){
				                            					echo "<span class='text-danger'>You loss</span>";
				                            				}else{
				                            					echo "<span class='text-primary'>Processing</span>";
				                            				}
				                            			}else{
				                            				echo "<span class='text-warning'>Not found</span>";
				                            			}

				                            		 ?></td>
				                            	</tr>
				                       
				                            </tbody>
				                    </table>
				                </div>
				            </div>
				        	<?php } ?>
					</div>

					<div class="tab-pane fade" id="your_product" role="tabpanel" aria-labelledby="nav-contact-tab">
						<table id="example1" class="table table-bordered table-striped bidding-table">
                            <thead>
				                <tr>
				                  <th>Index</th>
				                  <th>Category</th>
				                  <th>Sub Category Name</th>
				                  <th>Product Title</th>
				                  <th>Quantity</th>
				                  <th>Price</th>
				                  <th>Image</th>
				                  <th>Action</th>
				                  
				                </tr>
				                </thead>
				                <tbody>
				                	<?php $sl = 1; foreach ($myproducts as $key => $value) { ?>
					                <tr>
					                  <td><?=$sl++;?></td>
					                  <td><?=$this->db->get_where('categories', array('status'=>1, 'id'=>$value['proCat']))->row()->name;?></td>
					                  <td><?=$this->db->get_where('subcategories', array('status'=>1, 'id'=>$value['proSubCat']))->row()->name;?></td>
					                  <td><?=$this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$value['subsubid']))->row()->name;?></td>
					                  <td><?=$value['quantity'];?></td>
					                  <td>$<?=$value['currentPrice'];?></td>
					                  <td><?php if($value['imgpath']){ ?><img src="<?=base_url()."uploads/products/".$value['imgpath'];?>" style="width:60px;"><?php } ?></td>
					                  <td><a href="<?=base_url();?>home/edit/<?=$value['id'];?>" class="btn btn-info">Edit</a> <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="viewproduct(<?=$value['id']?>)">View</button> <a href="" class="btn btn-danger">Delete</a></td>
					                </tr>
				            	<?php } ?>


							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
							  <div class="modal-dialog modal-lg" role="document">
							    <div class="modal-content" style="padding:8px">
							    
							     <div id="viewdataModel"> 

							     	

							     </div>
							    </div>
							  </div>
							</div>
				          </tbody>
                        </table>
					</div>
							
					<div class="tab-pane fade" id="add_product" role="tabpanel" aria-labelledby="nav-about-tab">
						<form role="form" method="post" action="<?=base_url();?>home/add_product/create" enctype="multipart/form-data">
			              <div class="box-body">
			               <div class="form-group">
			                  <label for="">Category <span class="text-danger">*</span></label>
			                  <select class="form-control" id="proCat" onclick="categorychange(this.value)" name="proCat" required>
			                      <option value="">Choose</option>
			                      <?php foreach ($categories as $key => $value) { ?>
			                      	<option value="<?=$value['id'];?>"><?=$value['name'];?></option>
			                  	  <?php } ?>
			                  </select>
			                </div>
			                <div class="form-group">
			                  <label for="">Sub Category <span class="text-danger">*</span></label>
			                  <select class="form-control" name="proSubCat" id="prosubcat" onclick="subcategorychange(this.value)" required>
			                      <option value="">Choose</option>
			                  </select>
			                </div>
			                <div class="form-group">
			                  <label for="">Sub Sub Category <span class="text-danger">*</span></label>
			                  <select class="form-control" name="subsubid" id="prosubsubcat" required>
			                      <option value="">Choose</option>
			                  </select>

			                <!--   <input type="text" class="form-control" name="title" id="" placeholder="Enter Product Title" required> -->
			                </div>
			                
			                <div class="form-group">
			                  <label for="exampleInputEmail1">Product Price <span class="text-danger">*</span></label>
			                  <input type="text" class="form-control" id="" placeholder="Price" name="currentPrice" required>
			                </div>
			                 <div class="form-group">
			                  <label for="exampleInputEmail1">Product Description</label>
			                  <textarea class="textarea form-control" name="descriptions"></textarea>
			                </div>
			            
			                <div class="form-group">
			                    <label>Quantity <span class="text-danger">*</span></label>
			                    <input type="text" class="form-control" id=""  name="quantity" required>
			                </div>
			                
			                <div class="form-group">
			                  <label>Units <span class="text-danger">*</span></label>
			                  <select class="form-control" name="proUnits" required>
			                      <option value="">Select</option>
			                      <?php foreach ($units as $key => $value) { ?>
			                      	<option value="<?=$value['id'];?>"><?=$value['name'];?></option>
			                  	  <?php } ?>
			                  </select>
			                  </div>
			                  
			                  <div class="form-group">
			                  <label>Size</label><br>
			                  	 <input type="radio" name='size' value='large' data-id="bank" />large <br>
			                  	 <input type="radio" name='size' value='medium' data-id="bank" />medium <br>
			                  	 <input type="radio" name='size' value='small' data-id="bank" />small <br>
			                  </div>
			                  
			                  <div class="form-group">
			                  <label>Color</label>
			                     <input type="text" class="form-control" id=""  name="color">
			                  </div>
			                  <div class="form-group">
			                  <label>Use by date/Expiry date <span class="text-danger">*</span></label>
			                     <input type="date" class="form-control" id=""  name="expiry_date" required>
			                  </div>
			                  
			                  <div class="form-group">
			                  <label>Place <span class="text-danger">*</span></label>
			                  <select class="form-control" name="place" required>
			                      <option value="">Select</option>
			                      <?php foreach ($marketplace as $key => $value) { ?>
			                      	<option value="<?=$value['id'];?>"><?=$value['name'];?></option>
			                  	  <?php } ?>
			                  </select>
			                  </div>
			                  
			                  <div class="form-group">
			                      <label>Front Image <span class="text-danger">*</span></label>
			                      <input type="file" name="proimg" class="form-control" accept="image/*" value="" required>
			                  </div>
			                  <div class="form-group">
			                      <label>More Images (Multiple) <span class="text-danger">*</span></label>
			                      <input type="file" name="promultiimg[]" multiple="" accept="image/*" class="form-control" value="" required>
			                  </div>
			              </div>
			              <div class="box-footer">
			                <input type="submit" class="btn btn-primary" value="Submit" name="submit"/>
			              </div>
			            </form>
        			</div>
					
            <div class="tab-pane fade" id="purchased_product" role="tabpanel" aria-labelledby="nav-about-tab">
            	<span>Not found!</span>
               <!-- <table id="example1" class="table table-bordered table-striped">
                    <tr>
                      <th>Index</th>
                      <th>Category</th>
                      <th>Sub Category</th>
                      <th>Sub Sub Category Name</th>
                      <th>Product Title</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Friuts</td>
                        <td>Apple</td>
                        <td>Red Delicious Apple</td>
                        <td>name7</td>
                        <td><img src="" alt=""></td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                </table>-->
            </div>
					
            <div class="tab-pane fade" id="your_offer" role="tabpanel" aria-labelledby="nav-about-tab">
            	<span>Not found!</span>
                <!--<table id="example1" class="table table-bordered table-striped">
                    <tr>
                      <th>Index</th>
                      <th>Category</th>
                      <th>Sub Category</th>
                      <th>Sub Sub Category Name</th>
                      <th>Product Title</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Friuts</td>
                        <td>Apple</td>
                        <td>Red Delicious Apple</td>
                        <td>name7</td>
                        <td><img src="" alt=""></td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                </table>-->
            </div>
				</div>
			
			</div>
		</div>
	</div>
</section>