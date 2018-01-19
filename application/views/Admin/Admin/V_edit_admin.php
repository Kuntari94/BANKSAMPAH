<div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Data Admin</h3>

  </div><!-- /.box-header -->

  <form class="form-horizontal" action="<?= $form_action ?>" enctype="multipart/form-data" onsubmit="return Validate(this);" method="POST">
   <input  type="hidden" class="form-control" id="id_admin" name="id_admin" value="<?=$edit_data_admin->id_admin?>">
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Username</label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="username" name="username" value="<?=$edit_data_admin->username?>">
        </div>
      </div>
      <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Password Baru</label>
        <div class="col-sm-5">
          <input  type="password" class="form-control" id="password1" name="password1"  placeholder="Password">
          <label>Jika tidak mengganti password silahkan dikosongi</label>
        </div>
      </div>
      <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label"> Ulangi Password</label>
        <div class="col-sm-5">
          <input  type="password" class="form-control" id="password2" name="password2" placeholder="Password">
          <label>Jika tidak mengganti password silahkan dikosongi</label>
        </div>
      </div>
      <div class="box-body">
      <div class="form-group">
      <label class="col-sm-2 control-label">Hak Akses</label>
      <div class="col-sm-2">
        <select class="form-control" name="hak_akses">
           <option id="" value="">-Pilih-</option>
          <option value="1" <?php if($edit_data_admin->hak_akses=='1'){echo "selected";}?> >Admin</option>
          <option  value="2" <?php if($edit_data_admin->hak_akses=='2'){echo "selected";}?>>Operator</option>
        </select>
      </div>
    </div>
    </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <a href="<?= site_url().'/Admin/Admin/Daftar_admin' ?>" class="btn btn-default">Batal</a>
          
          <button type="submit" class="btn btn-info">Simpan</button>
        </div>
      </div>
    </div><!-- /.box-body -->
    <div class="box-footer">

    </div><!-- /.box-footer -->
  </form>
</div><!-- /.box -->
