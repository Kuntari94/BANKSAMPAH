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
    <h3 class="box-title">Edit Data Nasabah</h3>
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
 <input type="hidden" name="id_nasabah" value="<?= $edit_data_nasabah->id_nasabah ?>">
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama </label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="nama" name="nama" value="<?= $edit_data_nasabah->nama ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">No Rekening </label>
        <div class="col-sm-5">
          <input required type="text" disabled="disabled" class="form-control" id="nomor_rekening" name="nomor_rekening" value="<?= $edit_data_nasabah->nomor_rekening ?>">
        </div>
      </div>
     <div class="form-group"> 
      <label class="col-sm-2 control-label">Tanggal lahir</label>
      <div class="col-sm-6">
        <input required type="text" data-date-format="yyyy-mm-dd"  name="tgl_lahir" id="tgl_lahir" value="<?=$edit_data_nasabah->tgl_lahir?>">
          <span class="add-on"><i class="glyphicon glyphicon-calendar"  data-date-icon="glyphicon glyphicon-calendar"></i></span>
      </div>
    </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tempat Lahir </label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $edit_data_nasabah->tempat_lahir?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Alamat </label>
        <div class="col-sm-5">
          <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat"><?= $edit_data_nasabah->alamat ?></textarea>
        </div>
      </div> 
      <div class="form-group">
        <label class="col-sm-2 control-label">Pekerjaan </label>
        <div class="col-sm-5">
          <select class="form-control" name="pekerjaan" id="pekerjaan" >
            <option value=" " >-Pilih-</option>
            <option id="pekerjaan_1" value="Tidak_bekerja" <?php if($edit_data_nasabah->pekerjaan=='Tidak Bekerja'){echo "selected";}?>)>Tidak Bekerja</option>
            <option id="pekerjaan_2" value="PNS"<?php if($edit_data_nasabah->pekerjaan=='PNS'){echo "selected";}?>>PNS</option>
            <option id="pekerjaan_3" value="POLRI" <?php if($edit_data_nasabah->pekerjaan=='POLRI'){echo "selected";}?>>POLRI</option>
            <option id="pekerjaan_4" value="TNI"<?php if($edit_data_nasabah->pekerjaan=='TNI'){echo "selected";}?>>TNI</option>
            <option id="pekerjaan_5" value="Pedagang"<?php if($edit_data_nasabah->pekerjaan=='Pedagang'){echo "selected";}?>>Pedagang</option>
            <option id="pekerjaan_6" value="Petani"<?php if($edit_data_nasabah->pekerjaan=='Petani'){echo "selected";}?> >Petani</option>
            <option id="pekerjaan_7" value="Nelayan"<?php if($edit_data_nasabah->pekerjaan=='Nelayan'){echo "selected";}?>>Nelayan</option>
            <option id="pekerjaan_8" value="Wiraswasta"<?php if($edit_data_nasabah->pekerjaan=='Wiraswasta'){echo "selected";}?>>Wiraswasta</option>
            <option id="pekerjaan_9" value="Buruh"<?php if($edit_data_nasabah->pekerjaan=='Buruh'){echo "selected";}?>>Buruh</option>
            <option id="pekerjaan_10" value="Karyawan Swasta" <?php if($edit_data_nasabah->pekerjaan=='Karyawan Swasta'){echo "selected";}?>>Karyawan Swasta</option>
            <option id="pekerjaan_11" value="Pamong Desa" <?php if($edit_data_nasabah->pekerjaan=='Pamong Desa'){echo "selected";}?>>Pamong Desa</option>
            <option id="pekerjaan_12" value="Anggota DRP/DPD"<?php if($edit_data_nasabah->pekerjaan=='Anggota DPR/DPD'){echo "selected";}?> >Anggota DPR/DPD</option>
            <option id="pekerjaan_13" value="Dokter"<?php if($edit_data_nasabah->pekerjaan=='Dokter'){echo "selected";}?>>Dokter</option>
            <option id="pekerjaan_14" value="Pelajar/Mahasiswa" <?php if($edit_data_nasabah->pekerjaan=='Pelajar/Mahasiswa'){echo "selected";}?>>Pelajar/Mahasiswa</option>
            <option id="pekerjaan_15" value="Lain-lain"<?php if($edit_data_nasabah->pekerjaan=='Lain-lain'){echo "selected";}?>>Lain-lain</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Alasan </label>
        <div class="col-sm-5">
          <textarea class="form-control" name="alasan" id="alasan" placeholder="Alasan"><?= $edit_data_nasabah->alasan ?></textarea>
        </div>
      </div>  
      <div class="form-group">
        <label class="col-sm-2 control-label">No. Handphone </label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $edit_data_nasabah->no_hp?>" placeholder="No. Handphone">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Pendidikan </label>
        <div class="col-sm-5">
           <select class="form-control" name="pendidikan" id="pendidikan" >
            <option id="pendidikan" value=" ">-Pilih-</option>
            <option id="pendidikan" value="SD" <?php if($edit_data_nasabah->pendidikan=='SD'){echo "selected";}?>>SD</option>
            <option id="pendidikan" value="SMP" <?php if($edit_data_nasabah->pendidikan=='SMP'){echo "selected";}?>>SMP</option>
            <option id="pendidikan" value="SMA" <?php if($edit_data_nasabah->pendidikan=='SMA'){echo "selected";}?>>SMA</option>
            <option id="pendidikan" value="D3" <?php if($edit_data_nasabah->pendidikan=='D3'){echo "selected";}?>>D3</option>
            <option id="pendidikan" value="S1" <?php if($edit_data_nasabah->pendidikan=='S1'){echo "selected";}?>>S1</option>
            <option id="pendidikan" value="S2"<?php if($edit_data_nasabah->pendidikan=='S2'){echo "selected";}?>>S2</option>
            <option id="pendidikan" value="S3" <?php if($edit_data_nasabah->pendidikan=='S3'){echo "selected";}?>>S3</option>
            <option id="pendidikan" value="non_formal" <?php if($edit_data_nasabah->pendidikan=='Non Formal'){echo "selected";}?>>Non Formal</option>
            <option id="pendidikan" value="Lain-lain" <?php if($edit_data_nasabah->pendidikan=='Lain-lain'){echo "selected";}?>>Lain-lain</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Username </label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="username" name="username" value="<?= $edit_data_nasabah->username?>" placeholder="Username">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Password </label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="password" name="password" value="<?= $edit_data_nasabah->password?>" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Bergabung </label>
        <div class="col-sm-5">
          <input required type="text" disabled="disabled" class="form-control" id="join_date" name="join_date" value="<?= $edit_data_nasabah->join_date?>" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <a href="<?= site_url().'/Admin/Nasabah' ?>" class="btn btn-default">Batal</a>
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
