 <div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Pengaturan Saldo Minimum </h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
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
      
        <table id="example2" class="table table-bordered table-striped">
        <br> <br> <br> 
          <thead>
            <tr>
              <th>Jumlah Minimum Saldo</th>
              <th width="200">Aksi</th>
            </tr>
          </thead>

          <tbody>

            <?php $no=1;foreach ($tampil_saldo as $saldo){ 

              ?>

              <tr>
                <td><?= $saldo->min_saldo ?></td>
                <td width="200">
                  <a href="<?php echo site_url('Admin/Saldo_minimum/Edit/'.$saldo->id_min_saldo); ?>" class="btn btn-sm btn-warning ">
                    <i class="ace-icon fa fa-pencil-square-o"></i>
                    Ubah Saldo
                  </a>

              </tr>
              <?php } ?>
            </tbody> 
          </table>

        </div><!-- /.box-body -->
      </div><!-- /.box-body -->
    </div><!-- /.box -->
</div><!-- /.col -->


