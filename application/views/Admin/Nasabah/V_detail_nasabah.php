 <div class="row">
  <div class="content">
    <div class="box">
    <?php foreach ($data_nasabah as $dn) {
        ?>

      <div class="box-header">
        <h3 class="box-title">Data Nasabah Nomor Rekening <?= $dn->nomor_rekening;?></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
       <hr>

       
        <div class="form-group">
          <label class="col-sm-2 control-label">Nama </label>
          <div class="col-sm-10">
           <label><?php echo $dn->nama; ?></label>
         </div>
       </div>

       <div class="form-group">
        <label class="col-sm-2 control-label">Nomor Rekening</label>
        <div class="col-sm-10">
          <label><?php echo $dn->nomor_rekening; ?></label>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal lahir</label>
        <div class="col-sm-10">
          <label><?php echo $dn->tgl_lahir; ?></label>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Tempat Lahir</label>
        <div class="col-sm-10">
          <label><?php echo $dn->tempat_lahir; ?></label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
          <label><?php echo $dn->alamat; ?></label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Pekerjaan</label>
        <div class="col-sm-10">
          <label><?php echo $dn->pekerjaan; ?></label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Alasan</label>
        <div class="col-sm-10">
          <label><?php echo $dn->alasan; ?></label>
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-2 control-label">No Handphone</label>
        <div class="col-sm-10">
          <label><?php echo $dn->no_hp; ?></label>
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-2 control-label">Pendidikan</label>
        <div class="col-sm-10">
          <label><?php echo $dn->pendidikan; ?></label>
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Bergabung</label>
        <div class="col-sm-10">
          <label><?php echo $dn->join_date; ?></label>
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
          <label><?php echo $dn->username; ?></label>
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <label><?php echo $dn->password; ?></label>
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-2 control-label">Saldo</label>
        <div class="col-sm-10">
          <label><?php echo $dn->saldo; ?></label>
        </div>
      </div>
<?php }?>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <br>
          <a href="<?= site_url().'/Admin/Nasabah' ?>" class="btn btn-info">Kembali</a>
        </div>
      </div>

    </div>
  </div>
</div>
 
</div>
</div>
</div>

    
 
