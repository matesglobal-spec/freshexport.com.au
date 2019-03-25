
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
                  <th>Category Name</th>
                  <th>Sub Category Name</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php $sl=1; foreach ($subcategories as $key => $value) { ?>
                <tr>
                  <td><?=$sl++;?></td>
                  <td><?=$this->db->get_where('categories', array('status'=>1, 'id'=>$value['catId']))->row()->name;?></td>
                  <td><?=$value['name'];?></td>
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