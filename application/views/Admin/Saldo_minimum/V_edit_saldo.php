
<div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title">Ubah Saldo Minimum</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div><!-- /.box-header -->

  <form class="form-horizontal" action="<?= $form_action ?>" enctype="multipart/form-data" onsubmit="return Validate(this);" method="POST">
   <input type="hidden" name="id_min_saldo" value="<?= $edit_data_saldo->id_min_saldo?>">
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Jumlah Saldo Minimum</label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="min_saldo" name="min_saldo" placeholder="misal : 5000" value="<?=$edit_data_saldo->min_saldo?>">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <a href="<?= site_url().'/Admin/Saldo_minimum' ?>" class="btn btn-default">Cancel</a>
          
          <button type="submit" class="btn btn-info">Simpan</button>
        </div>
      </div>
    </div><!-- /.box-body -->
    <div class="box-footer">

    </div><!-- /.box-footer -->
  </form>
</div><!-- /.box -->
