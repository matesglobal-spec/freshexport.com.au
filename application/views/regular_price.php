<section class="product-details">
    	<div class="container">
            <div class="row compare-folding-section">
                <div class="col-12 text-center">
                    <h2 class="compare-folding-title">Regular Price of Product</h2>
                    
                </div>
            </div>
          <div class="angular-main-area" ng-app="mainApp" ng-controller="appcnt">
			<div class="row search-product">
                <div class="col-md-6">
                    <h5 class="search-product-title">Single Product Based Multivendor Store Search by product name</h5>
                </div>
                <div class="col-md-6">
                    <div class="input-group product-search-input">
                        <input type="text" class="form-control" placeholder="" aria-label="" ng-model="search">
                    </div>
                </div>
            </div>
      		
            <div class="row compare-products" ng-repeat="row in datas | filter:{title:search}">
                <div class="col-12 p0">
                    <div class="product-info container">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-2 col-xl-2 single-compare-product-img text-center">
                                <img src="<?=base_url()?>uploads/products/{{row.imgpath}}" class="figure-img img-fluid" alt="compare">
                                <p>{{row.title}}</p>
                            </div>

                            <div class="col-lg-10 col-xl-10 col-12 col-md-12">
                                <div class="row">
                                    <div class="col-md-12 p0">
                                        <div class="brand-logos">
                                            <ul>
                                                <li>
                                                	<br>
                                                    <h4>Adelaide</h4>
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
                                                <li>
                                                	<br>
                                                    <h4>Brisbaine</h4>
                                                    <ul class="review-content">
                                                        <li>$ 140 - $ 233</li>
                                                        <li>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <strong class="active-color">4 <i class="fa fa-star-o" aria-hidden="true"></i></strong>
                                                        </li>
                                                        <li>
                                                            <p> 2 years</p>
                                                        </li>
                                                        <li>
                                                            <div class="green-color"><i class="fa fa-check" aria-hidden="true"></i> In stock</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                	<br>
                                                    <h4>Sydney</h4>
                                                    <ul class="review-content">
                                                        <li>$ 80 - $ 100</li>
                                                        <li>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <strong class="active-color">3 <i class="fa fa-star-o" aria-hidden="true"></i></strong>
                                                        </li>
                                                        <li>
                                                            <p> 2 years</p>
                                                        </li>
                                                        <li>
                                                            <div class="red-color"><i class="fa fa-times" aria-hidden="true"></i> Out of stock</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                	<br>
                                                    <h4>Perth</h4>
                                                    <ul class="review-content">
                                                        <li>$ 90 - $ 120</li>
                                                        <li>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <strong class="active-color">2 <i class="fa fa-star-o" aria-hidden="true"></i></strong>
                                                        </li>
                                                        <li>
                                                            <p> 2 years</p>
                                                        </li>
                                                        <li>
                                                            <div class="green-color"><i class="fa fa-check" aria-hidden="true"></i> In stock</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                	<br>
                                                    <h4>New South Wales</h4>
                                                    <ul class="review-content">
                                                        <li>$ 70 - $ 200</li>
                                                        <li>
                                                            <div class="rating">
                                                                <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <strong class="active-color">1 <i class="fa fa-star-o" aria-hidden="true"></i></strong>
                                                        </li>
                                                        <li>
                                                            <p> 2 years</p>
                                                        </li>
                                                        <li>
                                                            <div class="red-color"><i class="fa fa-times" aria-hidden="true"></i> Out of stock</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p0">
                                        <div class="product-description">
                                            <div class="row">
                                                {{row.descriptions}}
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
                                    <td>Price</td>
                                    <td>$ 299 - $ 450</td>
                                    <td>$ 140 - $ 233</td>
                                    <td>$ 90 - $ 120</td>
                                    <td>$ 80 - $ 100</td>
                                    <td>$ 70 - $ 200</td>
                                </tr>
                                <tr>
                                    <td>Review</td>
                                    <td>
                                        <div class="rating">
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rating">
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rating">
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rating">
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rating">
                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Availability</td>
                                    <td><div class="green-color"><i class="fa fa-check" aria-hidden="true"></i> In stock</div></td>
                                    <td><div class="red-color"><i class="fa fa-times" aria-hidden="true"></i> Out of stock</div></td>
                                    <td><div class="green-color"><i class="fa fa-check" aria-hidden="true"></i> In stock</div></td>
                                    <td><div class="red-color"><i class="fa fa-times" aria-hidden="true"></i> Out of stock</div></td>
                                    <td><div class="green-color"><i class="fa fa-check" aria-hidden="true"></i> In stock</div></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-center">
                                        <a href="#" target="_blank" class="btn btn-primary select-market-btn">
                                            Order now <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" target="_blank" class="btn btn-primary select-market-btn">
                                            Order now <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" target="_blank" class="btn btn-primary select-market-btn">
                                            Order now <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" target="_blank" class="btn btn-primary select-market-btn">
                                            Order now <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" target="_blank" class="btn btn-primary select-market-btn">
                                            Order now <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
    </div>
    	</div>
    </section>
    
<script>
var app = angular.module("mainApp",[]);
app.controller("appcnt",function($scope,$http){
   $http.get("<?=base_url()?>home/get_price_data")  
   .success(function(data){  
       $scope.datas = data;
   }); 

    
})
</script>