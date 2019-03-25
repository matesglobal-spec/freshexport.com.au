<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?=base_url();?>admin/add_cat/create" enctype="multipart/form-data" />
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Title</label>
                  <input type="text" class="form-control" name="catname" id="" required="" placeholder="Enter Category Title">
                </div>
           
                <div class="form-group">
                  <label for="exampleInputFile">Category icon</label>
                  <input type="file" id="" name="caticon">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
              </div>
            </form>
          </div>
          </div>
        </div>
    </section>
</div>