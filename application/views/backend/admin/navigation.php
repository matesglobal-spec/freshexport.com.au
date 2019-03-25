<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/admin/dist/img/logo.png" class="img-circle" alt="User Image" style="width:72px;border-radius:0">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
<!--          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="<?=base_url()?>admin/">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
    
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>admin/add_cat"><i class="fa fa-circle-o"></i> Add Category</a></li>
            <li><a href="<?=base_url()?>admin/view_cat"><i class="fa fa-circle-o"></i> View Category</a></li>
            
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span>Sub Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>admin/add_subcat"><i class="fa fa-circle-o"></i> Add Sub-Cat</a></li>
            <li><a href="<?=base_url()?>admin/view_subcat"><i class="fa fa-circle-o"></i> View Sub-Cat</a></li>
            
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i>
            <span>Sub sub Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>admin/addSubSubcat"><i class="fa fa-circle-o"></i> Add Sub sub Category</a></li>
            <li><a href="<?=base_url()?>admin/viewSubSsubcat"><i class="fa fa-circle-o"></i> View Sub sub Category</a></li>
            
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-ol" aria-hidden="true"></i>
            <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>admin/add_product"><i class="fa fa-circle-o"></i> Add Product</a></li>
            <li><a href="<?=base_url()?>admin/view_product"><i class="fa fa-circle-o"></i> View Product</a></li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-ol" aria-hidden="true"></i>
            <span>Grade</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>admin/add_grade"><i class="fa fa-circle-o"></i> Add Grade</a></li>
            <li><a href="<?=base_url()?>admin/view_grade"><i class="fa fa-circle-o"></i> View Grade</a></li>
            
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-list-ol" aria-hidden="true"></i>
            <span>Places</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>admin/add_place"><i class="fa fa-circle-o"></i> Add Place</a></li>
            <li><a href="<?=base_url()?>admin/view_place"><i class="fa fa-circle-o"></i> View Place</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-ol" aria-hidden="true"></i>
            <span>Blogs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>admin/addBlogs"><i class="fa fa-circle-o"></i> Post</a></li>
            <li><a href="<?=base_url()?>admin/view_post"><i class="fa fa-circle-o"></i> View post</a></li>
            <li><a href="<?=base_url()?>admin/edit_post"><i class="fa fa-circle-o"></i> Edit post</a></li>
            
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
