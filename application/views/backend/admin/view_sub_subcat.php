
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
                  <th>Sub Sub Category</th>
                  <th>Descriptions/Taste</th>
                  <th>Growing location</th>
                  <th>Harvest</th>
                  <th>Availablity</th>
                  <th>Minimum price</th>
                  <th>Maximum price</th>
                  <th>Images</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php $sl=1; foreach ($subsubcategories as $key => $value) { ?>
                <tr>
                  <td><?=$sl++;?></td>
                  <td><?=$this->db->get_where('categories', array('status'=>1, 'id'=>$value['catid']))->row()->name;?></td>
                  <td><?=$this->db->get_where('subcategories', array('status'=>1, 'id'=>$value['subCat']))->row()->name;?></td>
                  <td><?=$value['name'];?></td>
                  <td><?=$value['descriptions'];?></td>
                  <td><?php if($value['growinglocation']!=null){ $gl = json_decode($value['growinglocation']); for($i=0; $i<count($gl); $i++){ echo $this->db->get_where('marketplace', array('status'=>1, 'id'=>$gl[$i]))->row()->name." "; } } ?></td>
                  <td><?php if($value['harvest']!=null){ $har = json_decode($value['harvest']); for($i=0; $i<count($har); $i++){ echo date("F", mktime(0, 0, 0, $har[$i], 10))." "; } } ?></td>
                  <td><?php if($value['availablity']!=null){ $av = json_decode($value['availablity']); for($i=0; $i<count($av); $i++){ echo date("F", mktime(0, 0, 0, $av[$i], 10))." "; }}?></td>
                  <td>$<?=$value['minimum_price'];?></td>
                  <td>$<?=$value['maximum_price'];?></td>
                  <td><?php if($value['imgpath']){ ?><img src="<?=base_url()."uploads/products/".$value['imgpath'];?>" style="width:60px;"><?php } ?></td>
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