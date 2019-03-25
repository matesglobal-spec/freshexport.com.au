
<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
              <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?=$page_title;?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Index</th>
                  <th>Place Name</th>
                  <th>Place Latitude</th>
                  <th>Place Longitude</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                	<?php $sl=1; foreach ($place as $key => $value) { ?>
	                <tr>
	                  <td><?=$sl++;?></td>
	                  <td><?=$value['name'];?></td>
	                  <td><?=$value['latitude'];?></td>
	                  <td><?=$value['longitude'];?></td>
	                  <td><a href="#">Delete</a></td>
	                </tr>
	                <?php } ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

        </div>
      </div>
    </section>
</div>