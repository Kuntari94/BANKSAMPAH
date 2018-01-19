
<div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Data Pengepul</h3>
  </div><!-- /.box-header -->

  <form class="form-horizontal" action="<?= $form_action ?>" enctype="multipart/form-data" onsubmit="return Validate(this);" method="POST">
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="nama" name="nama" placeholder="Nama  Pengepul">
        </div>
      </div>

     <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-5">
          <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
        </div>
      </div>

      <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">No Handphone</label>
        <div class="col-sm-5">
          <input required type="textarea" class="form-control" id="no_handphone" name="no_handphone" placeholder="No Handphone">
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
