<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Market Place</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?=base_url();?>admin/add_place/create">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Place Name</label>
                  <input type="text" class="form-control" name="name" id="" required="" placeholder="Enter Category Title">
                </div>
           
                <div class="form-group">
                  <label for="exampleInputEmail1">Place Latitude</label>
                  <input type="text" class="form-control" name="latitude" id="" required="" placeholder="Enter latitude">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Place Longitude</label>
                  <input type="text" class="form-control" name="longitude" id="" required="" placeholder="Enter longitude">
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