
<section class="product-details">
    	<div class="container">
    		<div class="row">
				<div class="col-12 p0">
					<div class="page-location">
						<ul>
							<li><a href="#">
								Home / Shop <span class="divider">/</span>
							</a></li>
							<li><a class="page-location-active" href="#">
								<?=$this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$products->subsubid))->row()->name;?>
								<span class="divider">/</span>
							</a></li>
						</ul>
					</div>
				</div>
	    		<div class="col-12 product-details-section">
				    <!-- ====================================
				        Product Details Gallery Section
				    ========================================= -->
					<div class="row">
						<div class="product-gallery col-12 col-md-12 col-lg-6">
						    <!-- ====================================
						        Single Product Gallery Section
						    ========================================= -->
						    <div class="row">
								<div class="col-md-12 product-slier-details">
								    <ul id="lightSlider">
								    	<li data-thumb="<?=base_url()?>uploads/products/<?=$products->imgpath;?>">
								            <img class="figure-img img-fluid" src="<?=base_url()?>uploads/products/<?=$products->imgpath;?>" alt="<?=$this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$products->subsubid))->row()->name;?>" />
								        </li>
								    	<?php foreach ($proimages as $key => $value) { ?>
								        <li data-thumb="<?=base_url()?>uploads/products/<?=$value['imgpath'];?>">
								            <img class="figure-img img-fluid" src="<?=base_url()?>uploads/products/<?=$value['imgpath'];?>" alt="<?=$this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$products->subsubid))->row()->name;?>" />
								        </li>
								    	<?php } ?>
								        <!--<li data-thumb="<?=base_url()?>assets/img/product-img/pro13-a.jpg">
								            <img class="figure-img img-fluid" src="<?=base_url()?>assets/img/product-img/pro13-a.jpg" alt="product-img" />
								        </li>
								        <li data-thumb="<?=base_url()?>assets/img/product-img/pro13-b.jpg">
								            <img class="figure-img img-fluid" src="<?=base_url()?>assets/img/product-img/pro13-b.jpg" alt="product-img" />
								        </li>
								        <li data-thumb="<?=base_url()?>assets/img/product-img/pro13-c.jpg">
								            <img class="figure-img img-fluid" src="<?=base_url()?>assets/img/product-img/pro13-c.jpg" alt="product-img" />
								        </li>
								        <li data-thumb="<?=base_url()?>assets/img/product-img/pro13-d.jpg">
								            <img class="figure-img img-fluid" src="<?=base_url()?>assets/img/product-img/pro13-d.jpg" alt="product-img" />
								        </li>
								        <li data-thumb="<?=base_url()?>assets/img/product-img/pro13-e.jpg">
								            <img class="figure-img img-fluid" src="<?=base_url()?>assets/img/product-img/pro13-e.jpg" alt="product-img" />
								        </li>-->
								    </ul>
								</div>
							</div>
						</div>
						<div class="col-6 col-12 col-md-12 col-lg-6">
							<div class="product-details-gallery">
								<div class="list-group">
									<h4 class="list-group-item-heading product-title">
										<?=$this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$products->subsubid))->row()->name;?>
									</h4>
									<div class="media">
										<div class="media-left media-middle">
											<div class="rating">
												<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="media-body">
											<p><?=$products->proRating;?> <span class="product-ratings-text"> - <?=$products->proRating;?> Ratings</span></p>
										</div>
									</div>
								</div>
								<table class="table table-responsive table-bordered">
								    <tr>
								        <th>Markets</th>
								        <th>Price</th>
								        <th>Quality</th>
								        <th>Availibility</th>
								        <th>Rating</th>
								    </tr>
								    
								    <tr>
								        <td>Perth</td>
								        <td>$10</td>
								        <td>G-D</td>
								        <td>in-stock</td>
								        <td>3.0</td>
								    </tr>
								    
								     <tr>
								        <td>Brisbaine</td>
								        <td>$12</td>
								        <td>G-C</td>
								        <td>in-stock</td>
								        <td>2.5</td>
								    </tr>
								    
								     <tr>
								        <td>Adelaide</td>
								        <td>$20</td>
								        <td>G-B</td>
								        <td>in-stock</td>
								        <td>5.0</td>
								    </tr>
								    
								     <tr>
								        <td>Sydney</td>
								        <td>$25</td>
								        <td>G-A</td>
								        <td>in-stock</td>
								        <td>4.9</td>
								    </tr>
								</table>
							</div>
							
						</div>
					</div>
	    		</div>
    		</div>
			<div class="row">
				<div class="col-md-6">
				<div class="wd-tab-section">
					<div class="bd-example bd-example-tabs">
					  <ul class="nav nav-pills mb-3 wd-tab-menu" id="pills-tab" role="tablist">
					    <li class="nav-item" style="width:100%">
					      <a class="nav-link active" id="description-tab" data-toggle="pill" href="#description-section" role="tab" aria-controls="description-section" aria-expanded="true">Description</a>
					    </li>
				
					  </ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade active show " id="description-section" role="tabpanel" aria-labelledby="description-tab" aria-expanded="true">
								<div class="product-tab-content">
									<h4 class="description-title"><?=$this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$products->subsubid))->row()->name;?></h4>

									<h6 class="description-subtitle">Desc:</h6>
									<p><?=$products->descriptions;?></p>
									
								</div>
								<hr>
							</div>
						</div>
					</div>
				</div>
				</div>
				
				<div class="col-md-6">
                    <div class="chart-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class=""><a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="active">Monthly</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Yearly</a></li>

                    </ul>
                    <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        	<canvas id="myChart2" width="500px"></canvas>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        
                         <canvas id="myChart" width="500px"></canvas>
                    </div>
                    </div>

                    </div>
                </div>
                
                <div class="row">
			    <div class="container">
<!--
			        <div class="mni">
			            <ul>
			                <li><a href="">Local Buyer/Seller</a></li>
			                <li><a href="">Export</a></li>
			                <li><a href="">Import</a></li>
			                <li><a href="">Shipping</a></li>
			                <li><a href="">Transport</a></li>
			                <li><a href="">Warehousing</a></li>
			                <li><a href="">HR</a></li>
			            </ul>
			        </div>
-->
                    <div class="export-menu">
                        <ul>
                            <li><a href="<?=base_url()?>home/export#one">Local Buyer/Seller</a></li>
                            <li><a href="<?=base_url()?>home/export#two" >Export</a></li>
                            <li><a href="<?=base_url()?>home/export#three" >Import</a></li>
                            <li><a href="<?=base_url()?>home/export#four">Shipping</a></li>
                            <li><a href="<?=base_url()?>home/export#five">Transport</a></li>
                            <li><a href="<?=base_url()?>home/export#six">Warehousing</a></li>
                            <li><a href="<?=base_url()?>home/export#seven">HR</a></li>
                        </ul>
                    </div>        
			    </div>
			</div>
                
			</div>
			<div class="row related-product">
				<h4 class="related-product-title">Related Items</h4>
				<div id="related-product" class="owl-carousel owl-theme">
					<?php foreach ($relatedproducts as $key => $value) { ?>
	    			<div class="col-12">
						<figure class="figure product-box">
							<div class="product-box-img">
								<a href="<?=base_url()?>home/single/<?=$value['id'];?>">
									<img src="<?=base_url()?>uploads/products/<?=$value['imgpath'];?>" class="figure-img img-fluid" alt="Product Img">
								</a>
							</div>
							<div class="quick-view-btn">
								<div class="compare-btn">
									
								</div>
							</div>
							<figcaption class="figure-caption text-center">
								<span class="badge badge-secondary wd-badge text-uppercase">New</span>
								<div class="wishlist">
									<i class="fa fa-heart" aria-hidden="true"></i>
								</div>
								<div class="price-start">
									<p><?=$this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$value['subsubid']))->row()->name;?>  <br> <strong class="active-color"><u><?=$value['currentPrice'];?></u> <!--- <u>$75.00</u>--></strong></p>
								</div>
								<div class="content-excerpt">
									
								</div>
								<div class="rating">
									<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
								</div>
								<div class="compare-btn">
									
								</div>
							</figcaption>
						</figure>
	    			</div>
	    			<?php } ?>
				</div>
			</div>
    	</div>
    </section>

