
    <footer class="footer wow fadeInUp animated footer-2" data-wow-delay="900ms">
    	<div class="container-fluid custom-width">
    		<div class="row">
    			<div class="col-md-12 col-lg-2">
    	
    				<div class="footer-about">
    					<a href="<?=base_url()?>" class="footer-about-logo">
    						<img src="<?=base_url()?>assets/img/logo.png" alt="Logo" style="background:#fff">
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
	    					<li><a href="<?=base_url()?>privacy">Privacy</a></li>
	    					<li><a href="<?=base_url()?>retrun_policy">Return Policy</a></li>
	    					<li><a href="<?=base_url()?>terms_condition">Terms &#38; Conditions</a></li>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php if ($this->session->flashdata('error') != '') { ?>
<script type="text/javascript">
	sweetAlert("Error!!",
	"<?php echo $this->session->flashdata('error');?>",
	"error");
</script>
<?php } ?>
<?php if ($this->session->flashdata('success') != '') { ?>
<script type="text/javascript">
	sweetAlert("Success!!",
	"<?php echo $this->session->flashdata('success');?>",
	"success");
</script>
<?php } ?>

 <script> 

function viewproduct(id){
	$.ajax({  
    	url:"<?=base_url();?>ajax/singleProduct",  
    	method:"POST", 
    	data: {id:id}, 
    	success:function(html){  
       		$('#viewdataModel').html(html);
    	}  
   });
}
function categorychange(id){
	$.ajax({  
    	url:"<?=base_url();?>home/getcat",  
    	method:"POST", 
    	data: {id:id}, 
    	success:function(html){  
       		$('#prosubcat').html(html);
    	}  
   }); 
}

function subcategorychange(id){
	$.ajax({  
    	url:"<?=base_url();?>home/getsubcat",  
    	method:"POST", 
    	data: {id:id}, 
    	success:function(html){  
       		//$('#prosubsubcat').html(html);
    	}  
   }); 
}
 </script>
  </body>
</html>
