<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fresh Export Austrilia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/rateyo.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/lightslider.min.css">
   	<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/megamenu.css">
    

    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">


    <script src="<?=base_url()?>assets/js/modernizr.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>  
  </head>
  <body class="">
   


<!--
<section id="wd-header-top">
    <div class="container-fluid custom-width">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                <div class="wb-social-media">
						<a href="#" class="bh"><i class="fa fa-behance"></i></a>
						<a href="#" class="fb"><i class="fa fa-facebook-official"></i></a>
						<a href="#" class="db"><i class="fa fa-dribbble"></i></a>
						<a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="vn"><i class="fa fa-vine"></i></a>
						<a href="#" class="yt"><i class="fa fa-youtube-play"></i></a>
				</div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-5 col-xl-6 d-none d-md-block">
                <div class="offer-text text-center">
                    <p class="text-uppercase">upto 50% off to all virtual products</p>
                </div>
            </div>

        </div>
    </div>
</section>
-->

	<section id="wd-header">
		<div class="container-fluid custom-width">
			<div class="row">
				<div class="col-lg-2 text-center second-home-main-logo">
					<a href="<?=base_url()?>"><img src="<?=base_url()?>assets/img/logo.png" alt="Logo"></a>
				</div>
				<div class="col-md-6 col-lg-8 slider-search-section d-none d-lg-block">
						<div class="input-group">
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary wd-slider-search-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php if(@$catname!=null){ echo $catname; }else{ echo "All Categories"; } ?> <i class="fa fa-angle-down" aria-hidden="true"></i>
								</button>
								<div class="dropdown-menu wd-dropdown-menu">
									<div class="search-category">
										<div class="row">
											<div class="col-md-6">
												 <ul>
												 	<?php $categories = $this->db->get_where("categories", array('status'=>1))->result_array(); 
												 		foreach ($categories as $key => $category) { 
												 	?>
												 		<li><a href="<?=base_url()?>home/search/<?=$category['id'];?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?=$category['name'];?></a></li>
												 	<?php } ?>
												 </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary wd-slider-search-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php if(@$subcatid!=null){ echo @$this->db->get_where("subcategories", array('status'=>1, 'id'=>$subcatid))->row()->name; }else{ echo "Sub Categories"; } ?> <i class="fa fa-angle-down" aria-hidden="true"></i>
								</button>
								<div class="dropdown-menu wd-dropdown-menu">
									<div class="search-category">
										<div class="row">
											<div class="col-md-6">
												 <ul>
												 	<?php if(@$catid){ $subcategories = $this->db->get_where("subcategories", array('status'=>1, 'catid'=>$catid))->result_array(); 
												 		foreach ($subcategories as $key => $subcategory) { 
												 	?>
												 		<li><a href="<?=base_url()?>home/search/<?=$catid;?>/<?=$subcategory['id'];?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?=$subcategory['name'];?></a></li>
												 	<?php } } ?>
												 </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary wd-slider-search-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php if(@$productid!=null){ echo $this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$productid))->row()->name; }else{ echo "Product Name"; } ?> <i class="fa fa-angle-down" aria-hidden="true"></i>
								</button>
								<div class="dropdown-menu wd-dropdown-menu">
									<div class="search-category">
										<div class="row">
											<div class="col-md-6">
												 <ul>
												 	<?php if((@$catid) && (@$subcatid)){ $products = $this->db->get_where("produtcs", array('status'=>1, 'proCat'=>$catid, 'proSubCat'=>$subcatid))->result_array(); 
												 		foreach ($products as $key => $product) { 
												 	?>
												 		<li><a href="<?=base_url()?>home/search/<?=$catid;?>/<?=$subcatid;?>/<?=$product['subsubid'];?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?=$this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$product['subsubid']))->row()->name;?></a></li>
												 	<?php } } ?>
												 </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary wd-slider-search-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php if(@$placeid!=null){ echo @$this->db->get_where("marketplace", array('status'=>1, 'id'=>$placeid))->row()->name; }else{ echo "Markets"; } ?> <i class="fa fa-angle-down" aria-hidden="true"></i>
								</button>
								<div class="dropdown-menu wd-dropdown-menu">
									<div class="search-category">
										<div class="row">
											<div class="col-md-6">
												 <ul>
												 	<?php $place = $this->db->get_where("marketplace", array('status'=>1))->result_array(); 
												 		foreach ($place as $key => $plac) { 
												 	?>
												 		<li><a href="<?=base_url()?>home/search/<?=@$catid;?>/<?=@$subcatid;?>/<?=@$productid;?>/<?=$plac['id'];?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?=$plac['name'];?></a></li>
												 	<?php }  ?>
												 </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary wd-slider-search-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php if(@$price!=null){ echo $price; }else{ echo "Price"; } ?> <i class="fa fa-angle-down" aria-hidden="true"></i>
								</button>
								<div class="dropdown-menu wd-dropdown-menu">
									<div class="search-category">
										<div class="row">
											<div class="col-md-6">
												 <!--<ul>
												 	<?php if((@$catid) && (@$subcatid) && (@$productid)){ 
												 		$this->db->order_by("currentPrice", "asc");
												 		$prices = $this->db->get_where("produtcs", array('status'=>1, 'proCat'=>$catid, 'proSubCat'=>$subcatid))->result_array();
												 		foreach ($prices as $key => $price) { 
												 	?>
												 		<li><a href="<?=base_url()?>home/search/<?=$catid;?>/<?=$subcatid;?>/<?=$productid;?>/<?=$placeid;?>/<?=$price['currentPrice'];?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?=$price['currentPrice'];?></a></li>
												 	<?php } } ?>
												 </ul>-->
												 <ul>
												 	<?php if((@$catid) && (@$subcatid) && (@$productid) && (@$placeid)){ ?>
												 	<li><a href="<?=base_url()?>home/search/<?=$catid;?>/<?=$subcatid;?>/<?=$productid;?>/<?=$placeid;?>/<?=$pricerange;?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> $1 - $50</a></li>
												 	<li><a href="<?=base_url()?>home/search/<?=$catid;?>/<?=$subcatid;?>/<?=$productid;?>/<?=$placeid;?>/<?=$pricerange;?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> $51 - $100</a></li>
												 	<li><a href="<?=base_url()?>home/search/<?=$catid;?>/<?=$subcatid;?>/<?=$productid;?>/<?=$placeid;?>/<?=$pricerange;?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> $101 - $150</a></li>
												 	<li><a href="<?=base_url()?>home/search/<?=$catid;?>/<?=$subcatid;?>/<?=$productid;?>/<?=$placeid;?>/<?=$pricerange;?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> $151 - $200</a></li>
												 	<li><a href="<?=base_url()?>home/search/<?=$catid;?>/<?=$subcatid;?>/<?=$productid;?>/<?=$placeid;?>/<?=$pricerange;?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> $201 - $250</a></li>
												 	<li><a href="<?=base_url()?>home/search/<?=$catid;?>/<?=$subcatid;?>/<?=$productid;?>/<?=$placeid;?>/<?=$pricerange;?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> $251 - $300</a></li>
												 	<li><a href="<?=base_url()?>home/search/<?=$catid;?>/<?=$subcatid;?>/<?=$productid;?>/<?=$placeid;?>/<?=$pricerange;?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> $301 - More</a></li>
												 	<?php } ?>
												 </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="input-group-btn">
								<form method="post" action="<?=base_url();?>home/search/text" style="display:inherit;height:50px;">
									<input type="text" class="form-control" name="searchtext" placeholder="Enter your search key ...">
									
									<input type="submit" name="search" class="btn btn-primary" value="Search" style="height:50px;">
									
								</form>
							</div>
						</div>
					</div>

				    <div class="col-lg-2">
				    <?php if($this->session->userdata('user_id')){ ?>
				    		<div class="dropdown">
							  <button class="btn btn-default dropdown-toggle account-btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							   <?php echo $this->db->get_where("users", array('user_id'=>$this->session->userdata('user_id')))->row()->name;  ?>
							    <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" id="accountLogin" aria-labelledby="dropdownMenu1">
							    <li><a href="<?=base_url()?>myaccount">Account</a></li>
							    <li><a href="<?=base_url()?>login/user_logout">Logout</a></li>
							  </ul>
							</div>
				    <?php }else{ ?>
					<button class="btn btn-primary my-account d-none d-lg-block" data-toggle="modal" data-target=".bd-example-modal-lg2">
						<i class="fa fa-user" aria-hidden="true"></i> My account <?php } ?> 
					</button>
					<div class="modal fade bd-example-modal-lg2" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="container">
									<div class="row text-left">
										<div class="col-md-12 p0">

											<div class="modal-tab-section wd-modal-tabs">
												<ul class="nav nav-tabs wd-modal-tab-menu text-center" id="myTab" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-expanded="true">Login</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" id="sign-up-tab" data-toggle="tab" href="#sign-up" role="tab" aria-controls="sign-up">Sign up</a>
													</li>
												</ul>
												<div class="tab-content" id="myTabContent">
													<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">

													<div class="row">
														<div class="col-md-6 p0 brand-description-area">
															<img src="<?=base_url()?>assets/img/login-img-1.jpg" class="img-fluid" alt="">
															<div class="brand-description">
																<div class="brand-logo">
																	<img src="<?=base_url()?>assets/img/logo.png" alt="Logo">
																</div>
																<div class="modal-description">
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teoccaecvoluptatem.</p>
																</div>
																<ul class="list-unstyled">
																	<li class="media">
																		<i class="fa fa-check" aria-hidden="true"></i>
																		<div class="media-body">
																			Lorem ipsum dolor sit amet, consecadipisicing 
																			elit, sed do eiusmod teoccaecvoluptatem.
																		</div>
																	</li>
																	<li class="media my-4">
																		<i class="fa fa-check" aria-hidden="true"></i>
																		<div class="media-body">
																			Lorem ipsum dolor sit amet, consecadipisicing 
																			elit, sed do eiusmod teoccaecvoluptatem.
																		</div>
																	</li>
																	<li class="media">
																		<i class="fa fa-check" aria-hidden="true"></i>
																		<div class="media-body">
																			Lorem ipsum dolor sit amet, consecadipisicing 
																			elit, sed do eiusmod teoccaecvoluptatem.
																		</div>
																	</li>
																</ul>
															</div>
														</div>
														<div class="col-md-12 col-lg-6 p0">
															<div class="login-section text-center">
																<!-- <div class="social-media">
																	<a href="#" class="facebook-bg"><i class="fa fa-facebook" aria-hidden="true"></i> Login</a>
																	<a href="#" class="twitter-bg"><i class="fa fa-twitter" aria-hidden="true"></i> Login</a>
																	<a href="#" class="google-bg"><i class="fa fa-google-plus" aria-hidden="true"></i> Login</a>
																</div>-->
																<div class="login-form text-left">
																	<form role="form" method="post" action="<?=base_url();?>login/users_login"/>
																		<div class="form-group">
																			<label for="exampleInputEmaillogin">Email</label>
																			<input type="text" class="form-control" required name="email" id="exampleInputEmaillogin" placeholder="Email">
																		</div>
																		<div class="form-group">
																			<label for="exampleInputPasswordlogin">Password</label>
																			<input type="password" required name="password" class="form-control" id="exampleInputPasswordlogin" placeholder="*********">
																		</div>
																		<input type="submit" class="btn btn-primary wd-login-btn" value="LOGIN"/>

																		<!--<div class="form-check">
																			<label class="form-check-label">
																				<input type="checkbox" class="form-check-input">
																				Save this password
																			</label>
																		</div>-->
																		
																		<div class="wd-policy">
																			<p>
																				By Continuing. I conferm that i have read and userstand the <a href="#">terms of uses</a> and <a href="#">Privacy Policy</a>. 
																				Don’t have an account? Please Sign up.
																			</p>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
													</div>
													<div class="tab-pane fade" id="sign-up" role="tabpanel" aria-labelledby="sign-up-tab">

													<div class="row">
														<div class="col-md-6 p0 brand-login-section">
															<img src="<?=base_url()?>assets/img/login-img-2.jpg" class="img-fluid" alt="" style="height:100%">
															<div class="brand-description">
																<div class="brand-logo">
																	<img src="<?=base_url()?>assets/img/logo.png" alt="Logo">
																</div>
																<div class="modal-description">
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teoccaecvoluptatem.</p>
																</div>
																<ul class="list-unstyled">
																	<li class="media">
																		<i class="fa fa-check" aria-hidden="true"></i>
																		<div class="media-body">
																			Lorem ipsum dolor sit amet, consecadipisicing 
																			elit, sed do eiusmod teoccaecvoluptatem.
																		</div>
																	</li>
																	<li class="media my-4">
																		<i class="fa fa-check" aria-hidden="true"></i>
																		<div class="media-body">
																			Lorem ipsum dolor sit amet, consecadipisicing 
																			elit, sed do eiusmod teoccaecvoluptatem.
																		</div>
																	</li>
																	<li class="media">
																		<i class="fa fa-check" aria-hidden="true"></i>
																		<div class="media-body">
																			Lorem ipsum dolor sit amet, consecadipisicing 
																			elit, sed do eiusmod teoccaecvoluptatem.
																		</div>
																	</li>
																</ul>
															</div>
														</div>
														<div class="col-md-6 p0">
															<div class="sign-up-section text-center">
																<div class="login-form text-left">
																	<form action="<?=base_url();?>login/register" method="post">
																		<div class="form-group">
																			<label for="exampleInputname-sign-up">Full name</label>
																			<input type="text" name="name" required class="form-control" id="exampleInputname-sign-up" placeholder="Full Name">
																		</div>
																		<div class="form-group">
																			<label for="exampleInputEmailsign-up">Email</label>
																			<input type="text" name="email" required class="form-control" id="exampleInputEmailsign-up" placeholder="Enter you email">
																		</div>
																		<div class="form-group">
																			<label for="exampleInputPasswordsign-up">Password</label>
																			<input type="password" name="password" required class="form-control" id="exampleInputPasswordsign-up" placeholder="*********">
																		</div>
																		<div class="form-group">
																			<label for="exampleInputPasswordsign-up">Confirm Password</label>
																			<input type="password" name="cpassword" required class="form-control" id="exampleInputPasswordsign-up" placeholder="*********">
																		</div>
																		<div class="form-group">
																			<label for="exampleInputPasswordsign-up">User type</label>
																			<select class="form-control" name="type" required>
																			    <option value="">Select</option>
																			    <option value="4">Visitor / Buyer / Importer</option>
																			    <option value="3">Retailer / Seller / Exporter</option>
																			</select>
																		</div>
																		<input type="submit" class="btn btn-primary wd-login-btn" name="submit" value="Sign Up" />
																		
																		<div class="wd-policy">
																			<p>
																				By Continuing. I conferm that i have read and userstand the <a href="#">terms of uses</a> and <a href="#">Privacy Policy</a>. 
																				Don’t have an account? <strong><u>Sign up</u></strong>
																			</p>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>

													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="wd-header-2" class="wd-header-nav sticker-nav mob-sticky">
		<div class="container-fluid custom-width">
			<div class="row">
                <div class="col-md-8 col-2 col-sm-6 col-md-4 d-block d-lg-none">
                     <div class="accordion-wrapper hide-sm-up">
                        <a href="#" class="mobile-open"><i class="fa fa-bars" ></i></a>
                        <!--Mobile Menu start-->

                        <ul id="mobilemenu" class="accordion">
                           <!-- <li class="mob-logo"><a href="index.html"><img src="img/logo.png" alt=""></a></li>-->
                            <li><a class="closeme" href="#"><i class="fa fa-times" ></i></a></li>
                            <li class="mob-logo"><a href="<?=base_url()?>home/index"><img src="img/logo.png" alt=""></a></li>
                            
                            
                            <li class="out-link"><a href="<?=base_url()?>home/index">Home</a></li>
                            <li>
                                <div class="link">Product Category <i class="fa fa-chevron-down"></i></div>
                                <ul class="submenu font-sky">
                                    <?php $categoriess = $this->db->get_where("categories", array('status'=>1))->result_array(); 
								 		foreach ($categoriess as $key => $cat) { 
								 	?>
								 		<li><a href="<?=base_url()?>home/categories/<?=$cat['id'];?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?=$cat['name'];?></a></li>
								 	<?php } ?>
                                </ul>
                            <li class="out-link"><a class="" href="<?=base_url()?>home/blog">Blog</a></li>
                            <li class="out-link"><a class="" href="<?=base_url()?>home/contact">Contact</a></li>
                        </ul>
                        
                    </div>   
                </div>
                <div class="col-xl-3 d-none d-xl-block">
                	<!--
                        <div class="department">
                            <img src="<?=base_url()?>assets/img/menu-bar.png" alt="menu-bar">
                            All Category
                            <div class="shape-img">
                                <img src="<?=base_url()?>assets/img/department-shape-img.png" class="img-fluid" alt="department img">
                            </div>
                            <div id="department-list" class="department-list">
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="<?=base_url()?>home/product">
                                        <div class="department-list-logo">
                                            
                                        </div><span class="sub-list-main-menu">Fruits</span></a>
                                    </li>
                                    <li class="list-group-item"><a href="<?=base_url()?>home/product">
                                        <div class="department-list-logo">
                                            
                                        </div><span class="sub-list-main-menu">Vegetables</span></a>
                                    </li>
                                    <li class="list-group-item"><a href="<?=base_url()?>home/product">
                                        <div class="department-list-logo">
                                           
                                        </div><span class="sub-list-main-menu">Seeds</span></a>
                                    </li>
                                    <li class="list-group-item"><a href="<?=base_url()?>home/product">
                                        <div class="department-list-logo">
                                           
                                        </div><span class="sub-list-main-menu">Fish</span></a>
                                    </li>
                                    <li class="list-group-item"><a href="<?=base_url()?>home/product">
                                        <div class="department-list-logo">
                                          
                                        </div><span class="sub-list-main-menu">Mineral Water</span></a>
                                    </li>
                                    <li class="list-group-item"><a href="<?=base_url()?>home/product">
                                        <div class="department-list-logo">
                                          
                                        </div><span class="sub-list-main-menu">Grains</span></a>
                                    </li>
                                    <li class="list-group-item"><a href="<?=base_url()?>home/product">
                                        <div class="department-list-logo">
                                            
                                        </div><span class="sub-list-main-menu">Meats</span></a>
                                    </li>
                      
                                </ul>
                            </div>
                        </div> -->
                    </div>
                <div class="col-md-6 col-lg-10 col-xl-7 header-search-box d-none d-lg-block">
                        <div id="main-menu-2" class="main-menu-desktop no-border main-menu-sh">
                            <div class="menu-container wd-megamenu text-left">
                                <div class="menu">
                                    <ul class="wd-megamenu-ul">
                                        <li><a href="<?=base_url()?>" class="main-menu-list">Home</a></li>
                                        <li><a href="" class="main-menu-list"> Product Category <i class="fa fa-angle-down angle-down" aria-hidden="true"></i></a>
                                            <ul class="single-dropdown">
                                            	<?php $categoriess = $this->db->get_where("categories", array('status'=>1))->result_array(); 
											 		foreach ($categoriess as $key => $cat) { 
											 	?>
											 		<li><a href="<?=base_url()?>home/categories/<?=$cat['id'];?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?=$cat['name'];?></a></li>
											 	<?php } ?>
                                            </ul>
                                        </li>
                                        <li><a href="<?=base_url()?>home/blog" class="main-menu-list">Blog</a></li>
                                        <li><a href="<?=base_url()?>home/contact" class="main-menu-list">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-10 col-sm-6 col-md-4 col-lg-2 col-xl-2 text-right">
                  

                    <div class="header-cart">
                       <div class="account-section d-md-block d-lg-none">
                            <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg2">
                                <i class="fa fa-sign-in" aria-hidden="true"></i><span>Login/Register</span> 
                            </button>
                                
				        </div>
                        <div class="serch-wrapper">
                            <div class="search">
                                <input class="search-input" placeholder="Search" type="text">
                                <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
							    
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">


                  </div>
                </div>
                    </div>
                </div>
			</div>
		</div>
	</section>