<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Sub Sub Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?=base_url();?>admin/addSubSubcat/create" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category</label>
                      <select class="form-control" name="cate" id="proCat" onclick="categorychange(this.value)">
                          <option value="">Choose</option>
	                      <?php foreach ($categories as $key => $value) { ?>
	                      	<option value="<?=$value['id'];?>"><?=$value['name'];?></option>
	                  	  <?php } ?>
                      </select>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Sub Category</label>
                      <select class="form-control" name="subcat" id="prosubcat" onclick="subcategorychange(this.value)">
                          <option>Select</option>
                      </select>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Sub sub Category Title</label>
                  <input type="text" id="" class="form-control" name="name" placeholder="name">
                </div>

                <div class="form-group">
                  <label>Descriptions/Taste</label>
                  <textarea class="textarea form-control" name="descriptions"></textarea>
                </div>
                <div class="form-group">
                  <label>Growing location</label><br>
                  <?php foreach ($location as $key => $pl) { ?>
                  	<input type="checkbox" name="growinglocation[]" value="<?=$pl['id'];?>"><?=$pl['name'];?><br>
                  <?php } ?>
                </div>
                <div class="form-group">
                  <label>Harvest months</label><br>
	                  <input type="checkbox" name="harvest[]" value="1"> January <br>
	                  <input type="checkbox" name="harvest[]" value="2"> February <br>
	                  <input type="checkbox" name="harvest[]" value="3"> March <br>
	                  <input type="checkbox" name="harvest[]" value="4"> April <br>
	                  <input type="checkbox" name="harvest[]" value="5"> May <br>
	                  <input type="checkbox" name="harvest[]" value="6"> June <br>
	                  <input type="checkbox" name="harvest[]" value="7"> July <br>
	                  <input type="checkbox" name="harvest[]" value="8"> August <br>
	                  <input type="checkbox" name="harvest[]" value="9"> September <br>
	                  <input type="checkbox" name="harvest[]" value="10"> October <br>
	                  <input type="checkbox" name="harvest[]" value="11"> November <br>
	                  <input type="checkbox" name="harvest[]" value="12"> December <br>
                 <!-- <input type="text" id="" class="form-control" name="harvest" placeholder="Harvest month">-->
                </div>
                <div class="form-group">
                  <label>Availablity months</label><br>
                  	  <input type="checkbox" name="availablity[]" value="1"> January <br>
	                  <input type="checkbox" name="availablity[]" value="2"> February <br>
	                  <input type="checkbox" name="availablity[]" value="3"> March <br>
	                  <input type="checkbox" name="availablity[]" value="4"> April <br>
	                  <input type="checkbox" name="availablity[]" value="5"> May <br>
	                  <input type="checkbox" name="availablity[]" value="6"> June <br>
	                  <input type="checkbox" name="availablity[]" value="7"> July <br>
	                  <input type="checkbox" name="availablity[]" value="8"> August <br>
	                  <input type="checkbox" name="availablity[]" value="9"> September <br>
	                  <input type="checkbox" name="availablity[]" value="10"> October <br>
	                  <input type="checkbox" name="availablity[]" value="11"> November <br>
	                  <input type="checkbox" name="availablity[]" value="12"> December <br>
                  <!--<input type="text" id="" class="form-control" name="availablity" placeholder="Availablity month">-->
                </div>

                <div class="form-group">
                  <label>Minimum price</label>
                  <input type="text" id="" class="form-control" name="minimum_price" placeholder="e.g: $25">
                </div>
                <div class="form-group">
                  <label>Maximum price</label>
                  <input type="text" id="" class="form-control" name="maximum_price" placeholder="e.g: $299">
                </div>
                <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="subsubimg" class="form-control" accept="image/*" value="" required>
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