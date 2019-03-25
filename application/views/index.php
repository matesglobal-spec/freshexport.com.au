


<!-- =====Quick view ============================ -->
<!--<div class="product-view-modal modal fade bd-example-modal-lg-product-1" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg">
             <div class="modal-content">


              <div class="row">
                <div class="product-gallery col-12 col-md-12 col-lg-6">
			
                        <div class="row">
                          <div class="col-md-12 product-slier-details">
                             <div id="product-view-model" class="product-view owl-carousel owl-theme">
                                 <div class="item">
                                    <img src="<?=base_url()?>assets/img/product-img/pro13-a.jpg" class="img-fluid" alt="Product Img">
                                </div>
                                <div class="item">
                                    <img src="<?=base_url()?>assets/img/product-img/pro13-b.jpg" class="img-fluid" alt="Product Img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-12 col-md-12 col-lg-6">
                   <div class="product-details-gallery">
                      <div class="list-group">
                         <h4 class="list-group-item-heading product-title">
                            Product Name3695
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
                           <p>3.7/5 <span class="product-ratings-text"> -1747 Ratings</span></p>
                       </div>
                   </div>
               </div>
               <div class="list-group content-list">
                 <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i> 100% Original product</p>
                 <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Manufacturer Warranty</p>
             </div>
             
             <table class="table table-responsive">
							    <tr>
							        <th>Product Name</th>
							        <th>Price</th>
							        <th>Quality</th>
							        <th>Availability</th>
							        <th>Place</th>
							    </tr>
                        
                                <tr>
                                    <td><a href="">Pro68</a></td>
                                    <td>$10</td>
                                    <td>G-D</td>
                                    <td>in stock</td>
                                    <td>Perth</td>
                                </tr>
                                
                                <tr>
                                    <td><a href="">Pro54</a></td>
                                    <td>$12</td>
                                    <td>G-C</td>
                                    <td>2-Remaining</td>
                                    <td>Brisbane</td>
                                </tr>
                                
                                <tr>
                                    <td><a href="">Pro354</a></td>
                                    <td>$20</td>
                                    <td>G-B</td>
                                    <td>sold out</td>
                                    <td>Adelaide</td>
                                </tr>
                                
                                <tr>
                                    <td><a href="">Pro24</a></td>
                                    <td>$25</td>
                                    <td>G-A</td>
                                    <td>1-Remaining</td>
                                    <td>Sydney</td>
                                </tr>
				            </table>
         </div>
         <div class="product-store row">
        </div>
    </div>
</div>
</div> 
 </div>
</div>-->
<!-- =====Quick view ============================ -->


<section class="wd-service">
    	<div class="container-fluid custom-width">
    		<div class="row">
    			<div class="col-md-12 col-lg-4 col-xl-4 wow fadeIn animated" data-wow-delay="0.2s">
					<ul class="list-unstyled">
						<a href="<?=base_url()?>compare">
						    <li class="media">
                                <img class="d-flex mr-3" src="<?=base_url()?>assets/img/compare-icon.png" alt="compare-icon">
                                <div class="media-body">
                                    <h5 class="wd-service-title mt-0 mb-1">Lets Compare</h5>
                                    <p>Choose your product with price comparisons make your best deal today</p>
                                </div>
						    </li>
						</a>
					</ul>
    			</div>
    			<div class="col-md-12 col-lg-4 col-xl-4 wow fadeIn animated" data-wow-delay="0.4s">
					<ul class="list-unstyled">
					    <a href="<?=base_url()?>review">
					        	<li class="media">
                                <img class="d-flex mr-3" src="<?=base_url()?>assets/img/review-icon.png" alt="compare-icon">
                                <div class="media-body">
                                    <h5 class="wd-service-title mt-0 mb-1">Take Review</h5>
                                    <p>Choose your product with price comparisons make your best deal today</p>
                                </div>
                            </li>
					    </a>
					</ul>
    			</div>
    			<div class="col-md-12 col-lg-4 col-xl-4 wow fadeIn animated" data-wow-delay="0.6s">
					<ul class="list-unstyled">
						<a href="<?=base_url()?>vendor">
						    <li class="media">
                                <img class="d-flex mr-3" src="<?=base_url()?>assets/img/store-icon.png" alt="compare-icon">
                                <div class="media-body">
                                    <h5 class="wd-service-title mt-0 mb-1">Choose Multi-Vendor Store</h5>
                                    <p>Choose your product with price comparisons make your best deal today</p>
                                </div>
						    </li>
						</a>
					</ul>
    			</div>
    		</div>
    	</div>
    </section>
    <section id="recent-product" class="recent-pro-2">
		<div class="container-fluid custom-width">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="recent-product-title">Recent Products</h2>
				</div>
				<?php foreach ($products as $key => $product) { ?>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 wow fadeIn animated" data-wow-delay="100ms">
					<div class="recent-product-box">
						<div class="recent-product-img">
							<a href="<?=base_url()?>home/single/<?=$product->id;?>"><img src="<?=base_url()?>uploads/products/<?=$product->imgpath;?>" class="img-fluid" alt="recent-product img"></a>
							<span class="badge badge-secondary wd-badge text-uppercase">New</span>
							
							<div class="recent-product-info">
	    						<div class="d-flex justify-content-between" style="text-align:center;">
	    							<div class="recent-price">
	    								<center><?=$this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$product->subsubid))->row()->name;?> <br> $<?=$product->currentPrice;?></center>
	    							</div>
	    						</div>
	    						<div class="recente-product-content">
	    						</div>
								<div class="recent-product-meta-link">
									<a href="<?=base_url()?>home/single/<?=$product->id;?>"><i class="fa fa-star active-color" aria-hidden="true"></i><strong>4.5</strong></a>
									
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>145</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?> 
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 text-center" style="text-align:center"></div>
				<div class="col-xs-4 col-sm-4 col-md-4 text-center" style="text-align:center">
					<center>
						<?=$links;?>
					</center>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 text-center" style="text-align:center"></div>

			</div>
		</div>
	</section>



    <section id="amazon-review">
    	<div class="container-fluid custom-width">
    		<div class="amazon-review-box-area">
	    		<div class="row m0 justify-content-center ">
	    			<div class="col-md-12 p0 ">
	    				<div class="amazon-review-title">
	    					<h6>Best review of the week</h6>
	    				</div>
	    			</div>
	    			<div class="col-12 col-md-6 col-lg-4 p0 amazon-review-box wow fadeIn animated" data-wow-delay="0.2s">
						<div class="media">
							<div class="row">
								<div class="col-sm-4 col-md-5">
									<img class="img-fluid" src="<?=base_url()?>assets/img/product-img/pro.jpg" alt="Generic placeholder image">
								</div>
								<div class="col-sm-8 col-md-7 p0 d-flex align-items-center">
									<div class="amazon-review-box-content">
										<div class="rating">
											<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
											<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
											<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
											<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
											<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
										</div>
										<h6 class="amazon-review-box-title">ProductName584</h6>
										<p class="amazon-review-content">IMPRESSIVE SOUND QUALITY IS THE ULTIOAL &amp; assive noise isolating, NOT active noise cancellation(ANC).</p>
										<div class="price">

										</div>
										<a href="<?=base_url()?>home/single" class="btn btn-primary amazon-details">Details <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
	    			</div>
	    			
	    		</div>
    		</div>
    	</div>
    </section>

<section id="offer-time">
		<div class="container-fluid custom-width">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-12 col-xl-6 wow fadeInLeft animated" data-wow-delay="300ms">
					<div class="offer-time-box">
						<div class="row">
							<div class="col-sm-5 col-md-6">
								<img src="<?=base_url()?>assets/img/product-img/pro16.jpg" alt="offer img" class="offer-img">
							</div>
							<div class="col-sm-7 col-md-6 d-flex align-items-center">
								<div class="offer-content">
									<p class="offer-brand-name">Fruits</p>
									<h2 class="offer-title">SALE 75% <span>OFF</span></h2>
									<p class="offer-price">At $199 - Only for today</p>
									<div class='countdown' data-date="2018-12-31"></div>
									<div class="offer-btn offer-btn-primary">
										<a href="#" class="btn btn-primary wd-shop-btn">
											Go to <img src="<?=base_url()?>assets/img/offer-ebay-btn.png" alt="">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-12 col-xl-6 wow fadeInRight animated" data-wow-delay="300ms">
					<div class="offer-time-box">
						<div class="row">
							<div class="col-sm-5 col-md-6">
								<img src="<?=base_url()?>assets/img/product-img/pro17.jpg" alt="offer img" class="offer-img">
							</div>
							<div class="col-sm-7 col-md-6 d-flex align-items-center">
								<div class="offer-content">
									<p class="offer-brand-name">Vegetables</p>
									<h2 class="offer-title">SALE 75% <span>OFF</span></h2>
									<p class="offer-price">At $199 - Only for today</p>
									<div class='countdown' data-date="2018-12-31"></div>
									<div class="offer-btn offer-btn-green">
										<a href="#" class="btn btn-primary green-btn">
											Go to <img src="<?=base_url()?>assets/img/offer-ebay-btn1.png" alt="">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- =========================
        Blog Section
    ============================== -->
    <section id="wd-news">
    	<div class="container-fluid custom-width">
    		<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="news-title">Weekly Top News</h2>
				</div>
				<?php foreach ($blogsPost as $key => $post) {  ?>
    			<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 wow fadeIn animated" data-wow-delay="300ms">
    				<div class="wd-news-box">
						<figure class="figure">
							<figcaption></figcaption>
							<img src="<?=base_url()?>assets/img/blog/<?=$post['imgpath'];?>" class="figure-img img-fluid rounded" alt="news-img">
							<div class="wd-news-info">
								<div class="figure-caption"><a href="<?=base_url();?>single_blog/<?=$post['id'];?>"><?=$post['title'];?></a></div>
								<p class="wd-news-content"><?=$post['descriptions'];?></p>
								<a href="<?=base_url();?>single_blog/<?=$post['id'];?>" class="badge badge-light wd-news-more-btn">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							</div>
							<span class="angle-right-to-left"></span>
						</figure>
    				</div>
    			</div>
    			<?php } ?>
    			<!--<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 wow fadeIn animated" data-wow-delay="600ms">
    				<div class="wd-news-box">
						<figure class="figure">
							<figcaption></figcaption>
							<img src="<?=base_url()?>assets/img/blog/news-img-2.jpg" class="figure-img img-fluid rounded" alt="news-img">
							<div class="wd-news-info">
								<div class="figure-caption"><a href="single_blog.php">Top 10 affiliate themes and templates you get from ThemeIM</a></div>
								<p class="wd-news-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis esse eligendi consectetur dicta minus placeat natus tempora dignissim</p>
								<a href="" class="badge badge-light wd-news-more-btn">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							</div>
							<span class="angle-left-to-right"></span>
						</figure>
    				</div>
    			</div>
    			<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 wow fadeIn animated" data-wow-delay="900ms">
    				<div class="wd-news-box">
						<figure class="figure">
							<figcaption></figcaption>
							<img src="<?=base_url()?>assets/img/blog/news-img-3.jpg" class="figure-img img-fluid rounded" alt="news-img">
							<div class="wd-news-info">
								<div class="figure-caption"><a href="single_blog.php">Make pixel perfect design and development from ThemeIM</a></div>
								<p class="wd-news-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis esse eligendi consectetur dicta minus placeat natus tempora dignissim</p>
								<a href="single_blog.php" class="badge badge-light wd-news-more-btn">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							</div>
							<span class="angle-right-to-left"></span>
						</figure>
    				</div>
    			</div>
    			<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 wow fadeIn animated" data-wow-delay="1200ms">
    				<div class="wd-news-box">
						<figure class="figure">
							<figcaption></figcaption>
							<img src="<?=base_url()?>assets/img/blog/news-img-4.jpg" class="figure-img img-fluid rounded" alt="news-img">
							<div class="wd-news-info">
								<div class="figure-caption"><a href="single_blog.php">Best US top catagories affiliate product list from BLURB Theme</a></div>
								<p class="wd-news-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis esse eligendi consectetur dicta minus placeat natus tempora dignissim</p>
								<a href="single_blog.php" class="badge badge-light wd-news-more-btn">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							</div>
							<span class="angle-left-to-right"></span>
						</figure>
    				</div>
    			</div>-->
    		</div>
    	</div>
    </section>


