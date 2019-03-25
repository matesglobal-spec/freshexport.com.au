
<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?=$page_title;?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?=base_url();?>admin/add_product/create" enctype="multipart/form-data">
              <div class="box-body">
               <div class="form-group">
                  <label for="">Category</label>
                  <select class="form-control" id="proCat" onclick="categorychange(this.value)" name="proCat" required>
                      <option value="">Choose</option>
                      <?php foreach ($categories as $key => $value) { ?>
                      	<option value="<?=$value['id'];?>"><?=$value['name'];?></option>
                  	  <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Sub Category</label>
                  <select class="form-control" name="proSubCat" id="prosubcat" onclick="subcategorychange(this.value)" required>
                      <option value="">Choose</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Sub Sub Category</label>
                  <select class="form-control" name="subsubid" id="prosubsubcat" required>
                      <option value="">Choose</option>
                  </select>

                <!--   <input type="text" class="form-control" name="title" id="" placeholder="Enter Product Title" required> -->
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Price</label>
                  <input type="text" class="form-control" id="" placeholder="Price" name="currentPrice" required>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Product Description</label>
                  <textarea class="textarea form-control" name="descriptions"></textarea>
                </div>
            
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" class="form-control" id=""  name="quantity" required>
                </div>
                
                <div class="form-group">
                  <label>Units</label>
                  <select class="form-control" name="proUnits">
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
                  <label>Use by date/Expiry date</label>
                     <input type="date" class="form-control" id=""  name="expiry_date">
                  </div>
                  
                  <div class="form-group">
                  <label>Place</label>
                  <select class="form-control" name="place">
                      <option value="">Select</option>
                      <?php foreach ($marketplace as $key => $value) { ?>
                      	<option value="<?=$value['id'];?>"><?=$value['name'];?></option>
                  	  <?php } ?>
                  </select>
                  </div>
                  
                  <div class="form-group">
                      <label>Front Image</label>
                      <input type="file" name="proimg" class="form-control" accept="image/*" value="" required>
                  </div>
                  <div class="form-group">
                      <label>More Images</label>
                      <input type="file" name="promultiimg[]" multiple="" accept="image/*" class="form-control" value="" required>
                  </div>
              </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit" name="submit"/>
              </div>
              
              
            </form>
          </div>
          </div>
        </div>
    </section>
</div>
