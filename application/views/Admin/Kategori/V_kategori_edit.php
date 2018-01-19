
<div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Data Kategori</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div><!-- /.box-header -->

  <form class="form-horizontal" action="<?= $form_action ?>" enctype="multipart/form-data" onsubmit="return Validate(this);" method="POST">
   <input type="hidden" name="id_kategori" value="<?= $edit_data_kategori->id_kategori?>">
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Kategori</label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama  Kategori" value="<?=$edit_data_kategori->nama_kategori?>">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <a href="<?= site_url().'/Admin/Kategori' ?>" class="btn btn-default">Batal</a>
          
          <button type="submit" class="btn btn-info">Simpan</button>
        </div>
      </div>
    </div><!-- /.box-body -->
    <div class="box-footer">

    </div><!-- /.box-footer -->
  </form>
</div><!-- /.box -->
