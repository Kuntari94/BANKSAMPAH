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
    <h3 class="box-title">Formulir Nasabah Baru</h3>
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
        <label class="col-sm-2 control-label">Nama </label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">No Rekening </label>
        <div class="col-sm-5">
          <input  type="text" disabled="disabled" class="form-control" id="nomor_rekening" name="nomor_rekening" placeholder="" value="<?=$rekunik?>" >
        </div>
      </div>
     <div class="form-group"> 
      <label class="col-sm-2 control-label">Tanggal lahir</label>
      <div class="col-sm-6">
        <input required type="text" data-date-format="yyyy-mm-dd"  name="tgl_lahir" id="tgl_lahir">
          <span class="add-on"><i class="glyphicon glyphicon-calendar"  data-date-icon="glyphicon glyphicon-calendar"></i></span>
      </div>
    </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tempat Lahir </label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="tempat_lahir">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Alamat </label>
        <div class="col-sm-5">
          <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat"></textarea>
        </div>
      </div> 
      <div class="form-group">
        <label class="col-sm-2 control-label">Pekerjaan </label>
        <div class="col-sm-5">
          <select class="form-control" name="pekerjaan" id="pekerjaan" >
            <option value=" " >-Pilih-</option>
            <option id="pekerjaan_1" value="Tidak_bekerja")>Tidak Bekerja</option>
            <option id="pekerjaan_2" value="PNS">PNS</option>
            <option id="pekerjaan_3" value="POLRI" >POLRI</option>
            <option id="pekerjaan_4" value="TNI">TNI</option>
            <option id="pekerjaan_5" value="Pedagang">Pedagang</option>
            <option id="pekerjaan_6" value="Petani" >Petani</option>
            <option id="pekerjaan_7" value="Nelayan">Nelayan</option>
            <option id="pekerjaan_8" value="Wiraswasta">Wiraswasta</option>
            <option id="pekerjaan_9" value="Buruh">Buruh</option>
            <option id="pekerjaan_10" value="Karyawan Swasta">Karyawan Swasta</option>
            <option id="pekerjaan_11" value="Pamong Desa">Pamong Desa</option>
            <option id="pekerjaan_12" value="Anggota DRP/DPD" >Anggota DPR/DPD</option>
            <option id="pekerjaan_13" value="Dokter">Dokter</option>
            <option id="pekerjaan_14" value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
            <option id="pekerjaan_16" value="Pegawai Pemerintah">Pegawai Pemerintah</option>
            <option id="pekerjaan_15" value="Lain-lain">Lain-lain</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Alasan </label>
        <div class="col-sm-5">
          <textarea class="form-control" name="alasan" id="alasan" placeholder="Alasan"></textarea>
        </div>
      </div>  
      <div class="form-group">
        <label class="col-sm-2 control-label">No. Handphone </label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No. Handphone">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Pendidikan </label>
        <div class="col-sm-5">
           <select class="form-control" name="pendidikan" id="pendidikan" >
            <option id="pendidikan" value=" ">-Pilih-</option>
            <option id="pendidikan" value="SD">SD</option>
            <option id="pendidikan" value="SMP">SMP</option>
            <option id="pendidikan" value="SMA">SMA</option>
            <option id="pendidikan" value="D3">D3</option>
            <option id="pendidikan" value="S1">S1</option>
            <option id="pendidikan" value="S2">S2</option>
            <option id="pendidikan" value="S3">S3</option>
            <option id="pendidikan" value="non_formal">Non Formal</option>
            <option id="pendidikan" value="Lain-lain">Lain-lain</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Username </label>
        <div class="col-sm-5">
          <input required type="text" disabled="disabled" class="form-control" id="username" name="username" placeholder="Username" value="<?=$rekunik?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Password </label>
        <div class="col-sm-5">
          <input  type="text" disabled="disabled" class="form-control" id="password" name="password" value= "<?=$items ?>">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-info">Simpan</button>
        </div>
      </div>
    </div><!-- /.box-body -->
    <div class="box-footer">

    </div><!-- /.box-footer -->
  </form>
</div><!-- /.box -->  

<script type="text/javascript">
$('#tgl_lahir').datepicker();

</script>
