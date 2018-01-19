<div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Data Sampah</h3>
    <div class="box-tools pull-right">
    </div>
  </div><!-- /.box-header -->

 <form class="form-horizontal" action="<?= $form_action ?>" enctype="multipart/form-data" onsubmit="return Validate(this);" method="POST">
    <div class="box-body">
     <div class="form-group">
        <label class="col-sm-2 control-label">Nama Kategori </label>
        <div class="col-sm-5">
          <select class="form-control" name="id_kategori" id="nama_kategori">
          <?php $t_kategori=$this->db->query("SELECT * FROM t_kategori ");foreach ($t_kategori->result()as $row){
            ?> 
            <option value="<?php echo $row->id_kategori;?>" <?php if($this->input->post('nama_kategori
            ')){echo "selected";}?>><?php echo $row->nama_kategori; ?> </option>
            <?php }?>
          </select>
        </div>
      </div>
      <div class="form-group">
          <input required type="hidden" class="form-control" id="id_pasien" name="id_pasien" >
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Jenis </label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis">
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-2 control-label">Satuan </label>
        <div class="col-sm-5">
          <select class="form-control" name="satuan" id="satuan" >
            <option value=" " >-Pilih-</option>
            <option id="satuan" value="kg"> kg</option>
            <option id="satuan" value="biji">biji</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Harga Beli</label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" name="harga" id="harga" placeholder="misal : 700">
        </div>
      </div> 
      <div class="form-group">
        <label class="col-sm-2 control-label">Harga Jual</label>
        <div class="col-sm-5">
          <input required type="text" class="form-control" name="harga_jual" id="harga_jual" placeholder="misal : 700">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <a href="<?= site_url().'/Admin/Sampah/List_sampah' ?>" class="btn btn-default">Batal</a>
          
          <button type="submit" class="btn btn-info">Simpan</button>
        </div>
      </div>
    </div><!-- /.box-body -->
    <div class="box-footer">

    </div><!-- /.box-footer -->
  </form>
</div><!-- /.box -->  