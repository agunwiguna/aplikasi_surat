<?php
$this->load->view('admin/template/header');
?>
<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<?php
$this->load->view('admin/template/topbar');
$this->load->view('admin/template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header" style="margin-bottom:0px;background-color:#dfe1e2; padding-bottom:10px">
  <h1 style="">
    Update Data Surat Masuk
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo site_url('admin') ?>"><i class="fa fa-home"></i> Home</a></li>
    <li class="active"><i class="fa fa-envelope"></i> Surat Masuk</li>
  </ol>
</section>

<section class="content">

 <div class="box">
  <div class="box-header">
  </div>
  <div class="box-body">
    <?php foreach ($content->result() as $key): ?>
      <form action="<?php echo base_url(); ?>surat_masuk/action_update/<?php echo $key->id ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $key->id ?>">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nomor Surat</label>
            <input type="text" class="form-control" name="no_surat" autocomplete="off"  value="<?php echo $key->no_surat ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Masuk</label>
            <input type="date" class="form-control" name="tanggal_masuk" autocomplete="off" value="<?php echo $key->tanggal_masuk ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Pengirim</label>
            <input type="text" class="form-control" name="pengirim" autocomplete="off" value="<?php echo $key->pengirim ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Penerima</label>
            <input type="text" class="form-control" name="penerima" autocomplete="off" value="<?php echo $key->penerima ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Perihal</label>
            <input type="text" class="form-control" name="perihal" autocomplete="off" value="<?php echo $key->perihal ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Lampiran</label>
            <input type="text" class="form-control" name="lampiran" autocomplete="off" value="<?php echo $key->lampiran ?>">
          </div>
        </div>
        <!-- /.box-body --> 
        <!-- Button trigger modal -->
        <div class="box-footer">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="width: 70px;">
            Edit
          </button>
          <a href="" class="btn btn-danger" style="width: 70px;">Kembali</a>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PERINGATAN !!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Apakah anda sudah yakin?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              
            </div>
          </div>
        </div>
      </form>
    <?php endforeach?>
  </div>
</div>
</div>
</section>

<?php
$this->load->view('admin/template/footer');
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
