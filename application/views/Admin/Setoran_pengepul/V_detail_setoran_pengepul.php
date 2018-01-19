 <style type="text/css" title="currentStyle">

  @import "<?php echo base_url(); ?>assets/datatable/media/css/demo_page.css";

  @import "<?php echo base_url(); ?>assets/datatable/media/css/demo_table_jui.css";

  @import "<?php echo base_url(); ?>assets/datatable/examples_support/themes/smoothness/jquery-ui-1.8.4.custom.css";

</style>

<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/datatable/media/js/jquery.js"></script> 

<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/datatable/media/js/jquery.dataTables.js"></script>


<script type="text/javascript" charset="utf-8">

  $(document).ready(function(){

    oTable = $('#example').dataTable({

      "bJQueryUI": true,

      "sPaginationType": "full_numbers"

      

    });

  }); 

</script>
 <div class="row">
  <div class="content">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Detail Transaksi Pengepul</h3>
      </div>
      <!-- /.box-header -->
      <br>
<?php foreach ($get_detail as $g) {?>

       <div class="form-group">
         <label class="col-sm-2 control-label">No Nota  </label>
          <div class="col-sm-0">
          <label><?=$g->nota_transaksi?> </label>
         </div>
       </div>
       <div class="form-group">
         <label class="col-sm-2 control-label">Nama Pengepul  </label>
          <div class="col-sm-0">
          <label><?=$g->nama?> </label>
         </div>
       </div>
       <div class="form-group">
         <label class="col-sm-2 control-label">Alamat  </label>
          <div class="col-sm-0">
          <label><?=$g->alamat?> </label>
         </div>
       </div>
       <div class="form-group">
         <label class="col-sm-2 control-label">No Handphone  </label>
          <div class="col-sm-0">
          <label><?=$g->no_handphone?> </label>
         </div>
       </div>
       <div class="form-group">
         <label class="col-sm-2 control-label">Hari  </label>
          <div class="col-sm-0">
          <label><?=$g->hari?> </label>
         </div>
       </div>
      <div class="form-group">
         <label class="col-sm-2 control-label">Tanggal  </label>
          <div class="col-sm-0">
          <label> <?=$g->tanggal?></label>
         </div>
       </div>
<?php }?>
        <table id="example" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Jenis Sampah </th>
              <th>Berat</th>
              <th>Harga</th>
              <th>Jumlah (Rp)</th>
            </tr>
          </thead>

          <tbody>
              <tr>
              <?php $no=1; foreach($get_all_transaksi_byid as $k){?>
                <td><?=$no++ ?></td>
                <td><?=$k->jenis ?></td>
                <td><?=$k->berat?></td>
                <td><?=$k->harga?></td>
                <td><?= $k->harga * $k->berat?></td>
              </tr>
              <?php }?>
           </tbody> 
          </table>
         <div class="form-group">
          <h3><b>Total</b></h3>
         </div>
        <div class="form-group">
        <div class="col-sm-offset-8 ">
          <a href="<?= site_url().'/Admin/Setoran_pengepul/Tambah_setoran_pengepul' ?>" class="btn btn-default">Kembali</a>
          <button type="submit" class="btn btn-info">Cetak</button>
        </div>
      </div> 
        </div><!-- /.box-body -->
      </div><!-- /.box-body -->
    </div><!-- /.box -->
</div><!-- /.col -->


