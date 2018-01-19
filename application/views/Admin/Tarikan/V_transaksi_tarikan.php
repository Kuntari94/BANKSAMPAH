<script src="<?php echo base_url('assets');?>/assets/js2/jquery.js"></script>
<script src="<?php echo base_url('assets');?>/assets/js2/jquery.min.js"></script>
<script src="<?php echo base_url('assets');?>/assets/js2/bootstrap-datepicker.js"></script>  

<link  rel="stylesheet" href="<?php echo base_url('assets');?>/assets/css/datepicker.css">


<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets');?>/datetimepicker/css/bootstrap-datetimepicker.min.css">

<script type="text/javascript" src="<?php echo base_url('assets');?>/datetimepicker/js/bootstrap-datetimepicker.min.js"></script> 

<script type="text/javascript" src="<?php echo base_url('assets');?>/datetimepicker/js/bootstrap-datetimepicker.pt-BR.js"></script> 

  <script type="text/javascript" src="<?php echo base_url('assets');?>/datetimepicker/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->

    <!--[if lte IE 8]>
      <script src="assets/js/excanvas.min.js"></script>
    <![endif]-->
 
<div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title">Slip Tarikan</h3>
    <div class="box-tools pull-right">
    </div>
  </div><!-- /.box-header -->
  <?php 
                    if($this->session->flashdata('sukses'))
                    {
                  ?>
                      <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4>  <i class="icon fa fa-check"></i>Sukses</h4>
                        <?= $this->session->flashdata('sukses') ?>
                      </div>
                  <?php
                    }
                    if($this->session->flashdata('gagal'))
                    {
                  ?>
                  <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4>  <i class="icon fa fa-check"></i>Gagal</h4>
                        <?= $this->session->flashdata('gagal') ?>
                      </div>
                  <?php
                    }
                  ?>

 <form class="form-horizontal" action="<?= $form_action ?>" enctype="multipart/form-data" onsubmit="return Validate(this);" method="POST">
    <div class="box-body">
    <div class="form-group">
      <label class="col-sm-2 control-label">No Nota </label>
      <div class="col-sm-5">
         <input required type="text" class="form-control" disabled="disabled" id="no_nota" name="nota_tarikan" placeholder="" value="<?= $kdtarik?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">No Rekening </label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="nomor_rekening" name="nomor_rekening" placeholder="Nomor Rekening">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama </label>
        <div class="col-sm-5">
          <input  type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Alamat </label>
        <div class="col-sm-5">
          <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat" value=""></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Saldo</label>
        <div class="col-sm-5">
          <input  type="text" class="form-control" id="saldo" name="saldo" placeholder="Saldo">
        </div>
      </div>
      <div class="form-group">
      <label class="col-sm-2 control-label">Hari</label>
      <div class="col-sm-2"> 
        <select class="form-control" name="hari" value="hari">
          <option value="">-Pilih-</option>
          <option id="hari_1" value="Senin">Senin</option>
          <option id="hari_2" value="Selasa">Selasa</option>
          <option id="hari_3" value="Rabu">Rabu</option>
          <option id="hari_4" value="Kamis">Kamis</option>
          <option id="hari_5" value="Jumat">Jumat</option>
          <option id="hari_6" value="Sabtu">Sabtu</option>
          <option id="hari_7" value="Minggu">Minggu</option>
        </select>
      </div> 
      </div>
      <div class="form-group"> 
        <label class="col-sm-2 control-label">Tanggal </label>
        <div class="col-sm-6">
        <input required type="text" data-date-format="dd-mm-yyyy"  name="tanggal" id="tanggal">
          <span class="add-on"><i class="glyphicon glyphicon-calendar"  data-date-icon="glyphicon glyphicon-calendar"></i></span>
        </div>
      </div> 
      <div class="form-group">
        <label class="col-sm-2 control-label">Jumlah Tarik Tunai</label>
        <div class="col-sm-5">
          <input  type="text" class="form-control" id="jumlah_tarikan" name="jumlah_tarikan" placeholder="misal : 50000">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
           <a href="<?= site_url().'/Admin/Tarikan' ?>" class="btn btn-default">Kembali</a>
          <button type="submit" class="btn btn-info">Simpan</button>
        </div>
      </div>
    </div><!-- /.box-body -->
    <div class="box-footer">

    </div><!-- /.box-footer -->
  </form>
</div><!-- /.box -->  

<script type="text/javascript">
$('#tanggal').datepicker();

</script>
