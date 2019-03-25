
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
                 Shop
                 <span class="divider">/</span>
             </a></li>
         </ul>
     </div>
 </div>
 <div class="order-sm-2 order-md-1  col-12 col-md-4 col-lg-3 ">
        <div class="side-bar category category-md">
                <h5 class="title">Filter</h5>
                <ul class="dropdown-list-menu">
                    <li>
                        <input type="radio" name="filter" value="best_view"> <span>Best View</span>
                    </li>
                    <li>
                        <input type="radio" name="filter" value="best_view"> <span> Most Popular</span>
                    </li>
                    <li>
                    	<input type="radio" name="filter" value="best_view"> <span>Latset Price</span>
                    </li>
                    <li>
                       <input type="radio" name="filter" value="best_view"> <span> Highest Price </span>
                    </li>
            </ul>
        </div>
        
        <!--<div class="side-bar category category-md">
                <h5 class="title">Category</h5>
                <ul class="dropdown-list-menu">
                	<?php $categoriess = $this->db->get_where("categories", array('status'=>1))->result_array(); 
				 		foreach ($categoriess as $key => $cat) { 
				 	?>
				 		<li><a href="<?=base_url()?>home/categories/<?=$cat['id'];?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?=$cat['name'];?></a></li>
				 	<?php } ?>
            </ul>
        </div>-->    
        
            <div class="side-bar category category-md">
                <h5 class="title">Place</h5>
                <ul class="dropdown-list-menu">
                	<?php $place = $this->db->get_where("marketplace", array('status'=>1))->result_array(); 
				 		foreach ($place as $key => $plac) { 
				 	?>
				 		<li> 
				 			<input type="radio" name="place" value="<?=@$plac['id'];?>"> <span><?=$plac['name'];?></span>
				 		</li>

				 	<?php }  ?>
            </ul>
        </div>      
   </div>
<div class=" order-sm-1 order-md-2   col-12 col-md-8 col-lg-9 product-grid">
   <div class="row">
      <div class="col-12">
         <div class="filter row">
            <div class="col-8 col-md-3">
               <h6 class="result">All Product</h6>
             </div>
    </div>
</div>
</div>
<div class="tab-content col-12">
    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row">
        	<?php foreach ($categorypro as $key => $product) { ?>
            <div class="col-12 col-md-6 col-lg-4 reviews-load-more">
                <figure class="figure product-box row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12 p0">
                        <div class="product-box-img">
                            <a href="<?=base_url()?>home/single/<?=$product['id'];?>">
                                <img src="<?=base_url()?>uploads/products/<?=$product['imgpath'];?>" class="figure-img img-fluid" alt="Product Img">
                            </a>
                        </div>
                        <div class="quick-view-btn">
                            <div class="compare-btn">
                                
                            </div>
                        </div>
                        <span class="badge badge-secondary wd-badge text-uppercase">New</span>
                        <div class="wishlist">
                            <i class="fa fa-heart active-wishlist" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12 p0">
                        <div class="figure-caption text-center">
                            <div class="price-start">
                                <center><?=$this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$product['subsubid']))->row()->name;?> <br> $<?=$product['currentPrice'];?></center>
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


