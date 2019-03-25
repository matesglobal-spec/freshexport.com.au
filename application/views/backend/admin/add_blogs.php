
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
            <form role="form" method="post" action="<?=base_url();?>admin/addBlogs/create" enctype="multipart/form-data">
              <div class="box-body">
               <div class="form-group">
                  <label for="">Category</label>
                  <select class="form-control" id="proCat" onchange="categorychange(this.value)" name="proCat" required>
                      <option value="">Choose</option>
                      <?php foreach ($categories as $key => $value) { ?>
                      	<option value="<?=$value['id'];?>"><?=$value['name'];?></option>
                  	  <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Sub Category</label>
                  <select class="form-control" name="proSubCat" id="prosubcat" required>
                      <option value="">Choose</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Post title</label>
                  <input type="text" class="form-control" name="post_title" id="" placeholder="Enter Product Title" required>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Post Description</label>
                  <textarea class="textarea form-control" name="descriptions"></textarea>
                </div>
                                    
	              <div class="form-group">
	                  <label>Blog Image</label>
	                  <input type="file" name="blogimg" class="form-control" accept="image/*" value="" required>
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
