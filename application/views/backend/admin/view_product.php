
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
                  <th>Category</th>
                  <th>Sub Category Name</th>
                  <th>Product Title</th>
                  <th>Image</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                	<?php $sl = 1; foreach ($products as $key => $value) { ?>
	                <tr>
	                  <td><?=$sl++;?></td>
	                  <td><?=$this->db->get_where('categories', array('status'=>1, 'id'=>$value['proCat']))->row()->name;?></td>
	                  <td><?=$this->db->get_where('subcategories', array('status'=>1, 'id'=>$value['proSubCat']))->row()->name;?></td>
	                  <td><?=$this->db->get_where('subsubcategories', array('status'=>1, 'id'=>$value['subsubid']))->row()->name;?></td>
	                  <td><?php if($value['imgpath']){ ?><img src="<?=base_url()."uploads/products/".$value['imgpath'];?>" style="width:60px;"><?php } ?></td>
	                  <td><a href="">Delete</a></td>
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