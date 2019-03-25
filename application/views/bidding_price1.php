<section class="product-details">
    	<div class="container">
            <div class="row compare-folding-section">
                <div class="col-12 text-center">
                    <h2 class="compare-folding-title">Bidding Price of Product</h2>
                    
                </div>
            </div>
         <div class="angular-main-area" ng-app="mainApp" ng-controller="appcnt">
			<div class="row search-product">
                <div class="col-md-6">
                    <h5 class="search-product-title">Single Product Based Multivendor Store Search by product name</h5>
                </div>
                <div class="col-md-6">
                    <div class="input-group product-search-input">
                        <input type="text" class="form-control" placeholder="Search" aria-label="" ng-model="search">
                        <span class="input-group-btn">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <?php foreach ($biddingProduct as $key => $pro) { ?>
            <div class="row compare-products" ng-repeat="row in datas | filter:{title:search}">
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
                                            <ul>
                                                <li>
                                                	<br>
                                                    <ul class="review-content">
                                                        <li>$ 299 - $ 450</li>
                                                        <li>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <strong class="active-color">5 <i class="fa fa-star-o" aria-hidden="true"></i></strong>
                                                        </li>
                                                        <li>
                                                            <p> 2 years</p>
                                                        </li>
                                                        <li>
                                                            <div class="green-color"><i class="fa fa-check" aria-hidden="true"></i> In stock</div>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-12 p0">
                                        <div class="product-description">
                                            <div class="row">
                                                Descriptions
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="col-md-12 p0 table table-responsive compare-products-single-table display-none-md">
                            <tbody>
	                            	<tr>
	                                    <td>Markets</td>
	                                    <td><h4>Adelaide</h4></td>
	                                </tr>
	                                <tr>
	                                    <td>Betting Price</td>
	                                    <td>$ 299, $ 310, $ 350, $ 400 , $ 450</td>
	                                </tr>
	                                <tr>
	                                    <td>Price</td>
	                                    <td>$<?=$value['currentPrice'];?> </td>
	                                   
	                                </tr>

	                                 <tr>
	                                    <td>Highest Bidder</td>
	                                    <td>$ 299 </td>
	                                </tr>
	                                <tr>
	                                    <td>Your Offer</td>
	                                    <form m>
	                                        <td><input type="text" name="your_offfer" value="" class="form-control"></td>
	                                    </form>
	                                </tr>
	                                <tr>
	                                    <td>Offer Expire</td>
	                                    <td><strong class="active-color">04:50pm February 23, 2019</td>
	                                </tr>
	                        
	                                <tr>
	                                    <td>Bidding Status</td>
	                                    <td><div class="green-color"><i class="fa fa-check" aria-hidden="true"></i> You Win</div></td>
	                                </tr>
	                                <tr>
	                                    <td></td>
	                                    <td class="text-center">
	                                        <a href="" target="_blank" class="btn btn-primary select-market-btn">
	                                            Order now <i class="fa fa-angle-right" aria-hidden="true"></i>
	                                        </a>
	                                    </td>
	                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        	<?php } ?>
            </div><!-- ng-angular app and controller -->
			
			
    	</div>
    </section>
    
<script>
var app = angular.module("mainApp",[]);
    app.controller("appcnt",function($scope,$http){
           $http.get("<?=base_url()?>")  
           .success(function(data){  
               $scope.datas = data;
           }); 
        
    })
</script>