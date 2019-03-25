<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fresh Export</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

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
    
   	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Angular JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>  
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular-route.min.js"></script>
	<script src="<?=base_url()?>app/routes.js"></script>
  </head>
  <body class="" ng-app="main-App">
   


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
								All Categories <i class="fa fa-angle-down" aria-hidden="true"></i>
								</button>
								<div class="dropdown-menu wd-dropdown-menu">
									<div class="search-category">
										<div class="row">
											<div class="col-md-6">
<!--												<h6 class="search-category-title">Cameras and photos</h6>-->
												 <ul>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fruits</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Vegetables</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fish</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Seeds</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Grains</a></li>
												 </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary wd-slider-search-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Sub Categories <i class="fa fa-angle-down" aria-hidden="true"></i>
								</button>
								<div class="dropdown-menu wd-dropdown-menu">
									<div class="search-category">
										<div class="row">
											<div class="col-md-6">
<!--												<h6 class="search-category-title">Cameras and photos</h6>-->
												 <ul>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Apple</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Orange</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Mango</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Bananas</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Grape</a></li>
												 </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary wd-slider-search-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Product Name <i class="fa fa-angle-down" aria-hidden="true"></i>
								</button>
								<div class="dropdown-menu wd-dropdown-menu">
									<div class="search-category">
										<div class="row">
											<div class="col-md-6">
<!--												<h6 class="search-category-title">Cameras and photos</h6>-->
												 <ul>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Red Delicius</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fuji</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Empire</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Granny Smith</a></li>
												 	
												 </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary wd-slider-search-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Markets <i class="fa fa-angle-down" aria-hidden="true"></i>
								</button>
								<div class="dropdown-menu wd-dropdown-menu">
									<div class="search-category">
										<div class="row">
											<div class="col-md-6">
<!--												<h6 class="search-category-title">Cameras and photos</h6>-->
												 <ul>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Market 1</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Market 2</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Market 3</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Market 4</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Market 5</a></li>
												 </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary wd-slider-search-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Price <i class="fa fa-angle-down" aria-hidden="true"></i>
								</button>
								<div class="dropdown-menu wd-dropdown-menu">
									<div class="search-category">
										<div class="row">
											<div class="col-md-6">
<!--												<h6 class="search-category-title">Cameras and photos</h6>-->
												 <ul>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> $150</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> $255</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> $125</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> $90</a></li>
												 	<li><a href="<?=base_url()?>home/product"><i class="fa fa-angle-double-right" aria-hidden="true"></i> $175</a></li>
												 </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<input type="text" class="form-control input-search-box" placeholder="Enter your search key ...">
							<a href="<?=base_url()?>home/search"><span class="input-group-btn">
								<button class="btn btn-secondary wd-search-btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</span></a>
						</div>
					</div>
				    <div class="col-lg-2">
					<button class="btn btn-primary my-account d-none d-lg-block" data-toggle="modal" data-target=".bd-example-modal-lg2">
						<i class="fa fa-user" aria-hidden="true"></i> My account
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
																<div class="social-media">
																	<a href="#" class="facebook-bg"><i class="fa fa-facebook" aria-hidden="true"></i> Login</a>
																	<a href="#" class="twitter-bg"><i class="fa fa-twitter" aria-hidden="true"></i> Login</a>
																	<a href="#" class="google-bg"><i class="fa fa-google-plus" aria-hidden="true"></i> Login</a>
																</div>
																<div class="login-form text-left">
																	<form>
																		<div class="form-group">
																			<label for="exampleInputEmaillogin">User name</label>
																			<input type="text" class="form-control" id="exampleInputEmaillogin" placeholder="John mist |">
																		</div>
																		<div class="form-group">
																			<label for="exampleInputPasswordlogin">Password</label>
																			<input type="password" class="form-control" id="exampleInputPasswordlogin" placeholder="*** *** ***">
																		</div>
																		<button type="submit" class="btn btn-primary wd-login-btn">LOGIN</button>

																		<div class="form-check">
																			<label class="form-check-label">
																				<input type="checkbox" class="form-check-input">
																				Save this password
																			</label>
																		</div>
																		
																		<div class="wd-policy">
																			<p>
																				By Continuing. I conferm that i have read and userstand the <a href="#">terms of uses</a> and <a href="#">Privacy Policy</a>. 
																				Don’t have an account? <a href="#" class="black-color"><strong><u>Sign up</u></strong></a>
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
															<img src="<?=base_url()?>assets/img/login-img-2.jpg" class="img-fluid" alt="">
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
																	<form>
																		<div class="form-group">
																			<label for="exampleInputname-sign-up">First name</label>
																			<input type="text" class="form-control" id="exampleInputname-sign-up" placeholder="First Name">
																		</div>
																		<div class="form-group">
																			<label for="exampleInputname2-sign-up">Last name</label>
																			<input type="text" class="form-control" id="exampleInputname2-sign-up" placeholder="Last Name">
																		</div>
																		<div class="form-group">
																			<label for="exampleInputEmailsign-up">Email</label>
																			<input type="text" class="form-control" id="exampleInputEmailsign-up" placeholder="Enter you email ...">
																		</div>
																		<div class="form-group">
																			<label for="exampleInputPasswordsign-up">Password</label>
																			<input type="password" class="form-control" id="exampleInputPasswordsign-up" placeholder="*** *** ***">
																		</div>
																		<button type="submit" class="btn btn-primary wd-login-btn">Sign Up</button>
																		
																		<div class="wd-policy">
																			<p>
																				By Continuing. I conferm that i have read and userstand the <a href="#">terms of uses</a> and <a href="#">Privacy Policy</a>. 
																				Don’t have an account? <a href="#" class="black-color"><strong><u>Sign up</u></strong></a>
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
                            <li class="mob-logo"><a href="index.html"><img src="img/logo.png" alt=""></a></li>
                            
                            
                            <li class="out-link"><a class="" href="<?=base_url()?>">Home</a></li>
                            <li>
                                <div class="link">Product Category <i class="fa fa-chevron-down"></i></div>
                                <ul class="submenu font-sky">
                                    <li><a href="<?=base_url()?>home/product">Fruits</a></li>
                                    <li><a href="<?=base_url()?>home/product">Vegetables</a></li>
                                    <li><a href="<?=base_url()?>home/product">Fish</a></li>
                                </ul>
                            <li class="out-link"><a class="" href="<?=base_url()?>home/blog">Blog</a></li>
                            <li class="out-link"><a class="" href="<?=base_url()?>home/contact">Contact</a></li>
                        </ul>
                        
                    </div>   
                </div>
                <div class="col-xl-3 d-none d-xl-block">
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
                                          
                                        </div><span class="sub-list-main-menu">Minaral Water</span></a>
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
                        </div>
                    </div>
                <div class="col-md-6 col-lg-10 col-xl-7 header-search-box d-none d-lg-block">
                        <div id="main-menu-2" class="main-menu-desktop no-border main-menu-sh">
                            <div class="menu-container wd-megamenu text-left">
                                <div class="menu">
                                    <ul class="wd-megamenu-ul">
                                        <li><a href="index.php" class="main-menu-list">Home</a></li>
                                        <li><a href="" class="main-menu-list"> Product Category <i class="fa fa-angle-down angle-down" aria-hidden="true"></i></a>
                                            <ul class="single-dropdown">
                                                <li><a href="<?=base_url()?>home/product">Fruits</a></li>
                                                <li><a href="<?=base_url()?>home/product">Vegetables</a></li>
                                                <li><a href="<?=base_url()?>home/product">Fish</a></li>
                                                <li><a href="<?=base_url()?>home/product">Seeds</a></li>
                                                <li><a href="<?=base_url()?>home/product">Meats</a></li>
                                                <li><a href="<?=base_url()?>home/product">Grains</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#/blog" class="main-menu-list">Blog</a></li>
                                        <li><a href="#/contact" class="main-menu-list">Contact</a></li>
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
	</section>
	

<ng-view></ng-view>





    <footer class="footer wow fadeInUp animated footer-2" data-wow-delay="900ms">
    	<div class="container-fluid custom-width">
    		<div class="row">
    			<div class="col-md-12 col-lg-2">
    	
    				<div class="footer-about">
    					<a href="index.html" class="footer-about-logo">
    						<img src="<?=base_url()?>assets/img/logo.png" alt="Logo">
    					</a>
	    				<div class="footer-description">
	    					<p>Lorem ipsum dolor sit amet, anim id est laborum. Sed ut perspconsectetur, adipisci vam aliquam qua.</p>
	    				</div>
	    				<div class="wb-social-media">
						<a href="#" class="bh"><i class="fa fa-behance"></i></a>
						<a href="#" class="fb"><i class="fa fa-facebook-official"></i></a>
						<a href="#" class="db"><i class="fa fa-dribbble"></i></a>
						<a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="vn"><i class="fa fa-vine"></i></a>
						<a href="#" class="yt"><i class="fa fa-youtube-play"></i></a>
					</div>
    				</div>
    			</div>
    			<div class="col-6 col-md-3 col-lg-2 footer-nav">
    	
    				<h6 class="footer-subtitle">Festival Deals</h6>
    				<ul>
    					<li><a href="<?=base_url()?>"> Home </a></li>
    					<li><a href="<?=base_url()?>home/product">Product </a></li>
    					<li><a href="<?=base_url()?>home/product">Shop </a></li>
    					
    					<li><a href="<?=base_url()?>home/blog">Blog</a></li>
    				</ul>
    			</div>
    			<div class="col-6 col-md-3 col-lg-2 footer-nav">
    		
    				<div class="stores-list">
	    				<h6 class="footer-subtitle">Top Stores</h6>
	    				<ul>
	    					<li><a href="">Affiliate Market 1</a></li>
	    					
	    				</ul>
    				</div>
    			</div>
    			<div class="col-6 col-md-3 col-lg-2 footer-nav">
    	
    				<h6 class="footer-subtitle">Need Help ?</h6>
    				<ul>
    				
    					<li><a href="contact.php">Contact Us</a></li>
    					<li><a href="">Career</a></li>
    					<li><a href=""></a></li>
    				</ul>
    			</div>
    			<div class="col-6 col-md-3 col-lg-2 footer-nav">
    	
    				<h6 class="footer-subtitle">About</h6>
	    				<ul>
	    					<li><a href="">Privacy</a></li>
	    					<li><a href="">Return Policy</a></li>
	    					<li><a href="">Terms &#38; Conditions</a></li>
	    				</ul>
    			</div>
    			<div class="col-12 col-md-12 col-lg-2">
    				<h6 class="footer-subtitle">Newsletter Signup</h6>
    				<p class="newsletter-content">By subscribing to our mailing list you will always be update with the latest news from us.</p>
    				<div class="newsletter-form">
						<form>
							<div class="form-group">
								<input type="text" class="form-control newsletter-input" placeholder="Enter your email">
							</div>
							<button type="submit" class="btn btn-primary newsletter-btn">Join us</button>
						</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </footer>

    <section class="copyright wow fadeInUp animated copyright-2" data-wow-delay="1500ms">
	    <div class="container">
	    	<div class="row">
	    	<div class="col-md-4">
	    	    
	    	</div>
	    		<div class="col-md-4">
	    			<div class="copyright-text">
	    				<p class="text-uppercase">COPYRIGHT &copy; 2018</p><a class="created-by" href="http://matesgroup.com.au">MatesGroup</a>
	    			</div>
	    		</div>
	    		<div class="col-md-4">
	    	    
	    	</div>
	    	</div>
	    </div>
	</section>

    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-ui.js"></script>
    <script src="<?=base_url()?>assets/js/popper.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.nav.js"></script>
    <!-- <script src="js/jquery.nicescroll.js"></script> -->
    <script src="<?=base_url()?>assets/js/jquery.rateyo.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.sticky.js"></script>
    <script src="<?=base_url()?>assets/js/mobile.js"></script>
    <script src="<?=base_url()?>assets/js/lightslider.min.js"></script>
    <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets/js/circle-progress.min.js"></script>
    <script src="<?=base_url()?>assets/js/waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/js/simplePlayer.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.nicescroll.min.js"></script>
    
    <script>

    $(document).ready(function() { 
   let scroll_link = $('.scroll');

  //smooth scrolling -----------------------
  scroll_link.click(function(e){
      e.preventDefault();
      let url = $('body').find($(this).attr('href')).offset().top;
      $('html, body').animate({
        scrollTop : url
      },1000);
      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');
      return false;	
   });
    if($.cookie('msg') != null && $.cookie('msg') != "")
    {
        $("div#myModal.modal, .modal-backdrop").hide();
    }
    else
    {
        setTimeout(function(){
        $('#myModal').modal('show');
        }, 10000);
        $.cookie('msg', 1 ); //moved this up and changed 'str' to 1
        $('#closemodal').click(function() {
        $('#myModal').modal('hide'); });
    }
});
    let myChart = document.getElementById("myChart").getContext('2d');
   let myChart2 = document.getElementById("myChart2").getContext('2d');
      let massPopChart = new Chart(myChart,{
          type: 'line',
          data:{
            labels: ['January','February','March ','April','May','June','July','August','September','October','November','December'],
            datasets: [
        {
            label: "1st",
            backgroundColor: "transparent",
            borderColor: "rgb(0,191,255)",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "#47B648",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "#47B648",
            data: [65, 59, 80, 81, 16, 55, 40,45,16,25,45,36,15]
        },
        {
            label: "2nd",
            backgroundColor: "transparent",
            borderColor:"rgb(34,139,34)",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgb(0, 196, 255)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86, 27, 90,45,16,25,45,36,15]
        },
        {
            label: "3rd",
            fill:true,
            backgroundColor: "transparent",
            borderColor: "rgb(255,0,0)",
            fillColor: "#f00",
            strokeColor: "rgb(255,0,0)",
            pointColor: "#f00",
            pointStrokeColor: "rgb(255,0,0)",
            pointHighlightFill: "rgb(255,0,0)",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [22, 33, 45, 16, 67, 25, 90,12,33,45,16,25,45,36,15]
        }
          ]
          }
      });
                    
    let mass2PopChart = new Chart(myChart2,{
          type: 'line',
          data:{
            labels: ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','21','23','24','25','26','27','28','29','30'],
            datasets: [
        {
            label: "1st",
            backgroundColor: "transparent",
            borderColor: "rgb(34,139,34)",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "#47B648",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "#47B648",
            data: [65, 59, 80, 81, 16, 55, 40,22, 33, 45, 16, 67, 25, 90,12,33,45,16,25,45,36,15]
        },
        {
            label: "2nd",
            backgroundColor: "transparent",
            borderColor: "rgb(0,191,255)",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgb(0, 196, 255)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86, 27, 90,22, 33, 45, 16, 67, 25, 90,12,33,22,16,55,45,36,15]
        },
        {
            label: "3rd",
            backgroundColor: "transparent",
            borderColor: "rgb(255,0,0)",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgb(0, 196, 255)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [22, 33, 45, 16, 67, 25, 90,12,22, 33, 45, 16, 67, 25, 90,12,33,45,16,25,45,36,15]
        }
    ]
          }
      })
  var headerHeight = $('header').outerHeight(); // Target your header navigation here
	
  $('#main-nav li a').click(function(e) {
  	
  	var targetHref   = $(this).attr('href');
	  
	$('html, body').animate({
		scrollTop: $(targetHref).offset().top - headerHeight // Add it to the calculation here
	}, 1000);
    
    e.preventDefault();
  });
   </script>
  </body>
</html>
