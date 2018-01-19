
<div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Data Pengepul</h3>
  </div><!-- /.box-header -->

  <form class="form-horizontal" action="<?= $form_action ?>" enctype="multipart/form-data" onsubmit="return Validate(this);" method="POST">
   <input type="hidden" name="id_pengepul" value="<?= $edit_data_pengepul->id_pengepul?>">
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="nama" name="nama" placeholder=" " value="<?=$edit_data_pengepul->nama?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-5">
          <textarea class="form-control" id="alamat" name="alamat" placeholder=" " ><?=$edit_data_pengepul->alamat?> </textarea>
        </div>      
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">No Handphone</label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="no_handphone" name="no_handphone" placeholder=" " value="<?=$edit_data_pengepul->no_handphone?>">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <a href="<?= site_url().'/Admin/Pengepul' ?>" class="btn btn-default">Batal</a>
          
          <button type="submit" class="btn btn-info">Simpan</button>
        </div>
      </div>
    </div><!-- /.box-body -->
    <div class="box-footer">

    </div><!-- /.box-footer -->
  </form>
</div><!-- /.box -->
