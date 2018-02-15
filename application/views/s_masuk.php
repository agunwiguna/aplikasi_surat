<?php
$this->load->view('user/template/header');
?>
<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<?php
$this->load->view('user/template/topbar');
$this->load->view('user/template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header" style="margin-bottom:0px;background-color:#dfe1e2; padding-bottom:10px">
  <h1 style="">
    Surat Masuk
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo site_url('user') ?>"><i class="fa fa-home"></i> Home</a></li>
    <li class="active"><i class="fa fa-envelope"></i> Surat Masuk</li>
  </ol>
</section>

<section class="content">
  <table class="table table-bordered" cellspacing="0" style="margin-bottom:0px;">
    <thead>
      <tr>
        <td colspan="3" style="padding-left:0px;">
          <form class="navbar-form" action="<?php echo base_url('s_masuk/hasil')?>" role="search" style="padding-left:0px;">
            <div class="input-group add-on">
              <input class="form-control" name="cari" type="date" size="55" required>
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit" value="Search"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
          </form>  
        </td>
      </tr>
      <tr style="background-color:#3c8dbc; color:white;">
        <th style="text-align: center; width:10px; ">No.</th>
        <th style="text-align: center;">Nomor Surat</th>
        <th style="text-align: center;">Tanggal</th>
        <th style="text-align: center;">Pengirim</th>
        <th style="text-align: center;">Penerima</th>
        <th style="text-align: center;">Perihal</th>
        <th style="text-align: center;">Lampiran</th>
      </tr>
      <?php 
      $no = $this->uri->segment('3') + 1;
      if(count($user)>0)
      {
        foreach($user as $key){ 
          ?>
          <tr style="background-color:#dfe1e2; color:black;">
            <td style="text-align: center;"><?php echo $no++; ?></td>
            <td style="text-align: center;"><?php echo $key->no_surat ?></td>
            <td style="text-align: center;"><?php echo $key->tanggal_masuk ?></td>
            <td style="text-align: center;"><?php echo $key->pengirim ?></td>
            <td style="text-align: center;"><?php echo $key->penerima ?></td>
            <td style="text-align: center;"><?php echo $key->perihal ?></td>
            <td style="text-align: center;"><?php echo $key->lampiran ?></td>
          </thead>
          <?php }
        } else { ?> 
        <tr>
          <td colspan="8" align="center">
            Data Tidak ditemukan
          </td>
        </tr>  
        <?php
      } ?>
    </table>
    <?php 
    echo $this->pagination->create_links();
    ?>
  </div>
</section>

<?php
$this->load->view('user/template/footer');
?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane" id="control-sidebar-home-tab">
     
    </a>
  </li>
</ul>
</div>
</div>
</aside>
<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->
 <!-- jQuery 3 -->
 <script src="<?php echo base_url()?>assets/template/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="<?php echo base_url()?>assets/template/bower_components/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()?>assets/template/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>assets/template/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>assets/template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()?>assets/template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>assets/template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>assets/template/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>assets/template/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/template/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()?>assets/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>assets/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>assets/template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>assets/template/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/template/dist/js/demo.js"></script>
</body>
</html>
