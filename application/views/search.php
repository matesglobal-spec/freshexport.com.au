<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!--  ==========================  Quick view   ========================== -->
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


<section id="product-amazon" class="product-shop-page product-shop-full-grid">
   <div class="container">
      <div class="row">
      <div class="col-12 p0 ">
        <div class="page-location">
           <ul>
              <li><a href="<?=base_url();?>">
                 Home <span class="divider">/</span>
             </a></li>
             <li><a class="page-location-active" href="#">
                 Search
                 <span class="divider">/</span>
             </a></li>
         </ul>
     </div>
 </div>

<div class=" order-sm-1 order-md-2   col-12 col-md-8 col-lg-9 product-grid">
   <div class="row">
      <div class="col-12">
         <div class="filter row">
            <div class="col-8 col-md-3">
               <h6 class="result">Showing <?=@$catname;?> <?=(@$subcatname)?"->".$subcatname:" "?> <?=count(@$products);?> results</h6>
           </div>

    </div>
</div>
</div>
<div class="tab-content col-12">
    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row">
        	<?php 
        	foreach ($products as $key => $value) { ?>
            <div class="col-12 col-md-4 col-lg-4 reviews-load-more">
                <figure class="figure product-box row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12 p0">
                        <div class="product-box-img">
                            <a href="<?=base_url()?>home/single/<?=$value['id'];?>">
                                <img src="<?=base_url()?>uploads/products/<?=$value['imgpath'];?>" class="figure-img img-fluid" alt="<?=$this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$value['subsubid']))->row()->name;?>">
                            </a>
                        </div>
                        <div class="quick-view-btn">
                            
                        </div>
                        <!--<span class="badge badge-secondary wd-badge text-uppercase">New</span>-->
                        <div class="wishlist">
                            <i class="fa fa-heart active-wishlist" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12 p0">
                        <div class="figure-caption text-center">
                            <div class="price-start">
                                <p><?=$this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$value['subsubid']))->row()->name;?>   <strong class="active-color"><u>$<?=$value['currentPrice'];?></u></strong></p>
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
                        </div>
                    </div>
                </figure>
            </div>
            <?php } ?>
        </div>
    </div>
    
</div>
<div class="col-12 text-center">
 	<a href="#" id="loadMore" class="btn btn-primary wd-shop-btn">
    	Show more
	</a>
</div>
</div>
</div>


</section>

