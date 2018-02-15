<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel" >
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="padding-top:10px;"><?php echo $this->session->userdata('username'); ?></p>
          
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><center>NAVIGASI UTAMA</li></center> 
        <li><a href="<?php echo site_url('user') ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('s_masuk') ?>"><i class="fa fa-envelope-o"></i> Surat Masuk</a></li>
            <li class="active"><a href="<?php echo site_url('s_keluar') ?>"><i class="fa fa-envelope-open-o"></i> Surat Keluar</a></li>
          </ul>
        </li>
        <li><a href="<?php echo site_url('n_rapat') ?>"><i class="fa fa-address-book-o"></i> <span>Notulensi Rapat</span></a></li>
        
         <li><a href="<?php echo base_url(); ?>profil/update_user"><i class="fa fa-cog"></i> <span>Setting</span></a></li>
         
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height:870px;">