
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
                  <select class="form-control" name="cat" required>
                      <option value="">Choose</option>
                      <?php foreach ($categories as $key => $value) { ?>
                      	<option value="<?=$value['id'];?>"><?=$value['name'];?></option>
                  	  <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Sub Category Title</label>
                  <input type="text" class="form-control" id="" required name="subcate" placeholder="Enter SubCategory Title">
                </div>
           
              </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
              </div>
            </form>
          </div>
          </div>
        </div>
    </section>
</div>