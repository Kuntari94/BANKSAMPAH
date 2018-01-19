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
        <h3 class="box-title">Detail Transaksi Setoran</h3>
      </div>
      <!-- /.box-header -->
      <br>

  
<?php foreach ($get_nota as $n ) {?>
       <div class="form-group">
         <label class="col-sm-2 control-label">No Nota  </label>
          <div class="col-sm-0">
          <label> <?= $n->nota_transaksi?> </label>
         </div>
       </div>
      
       <div class="form-group">
         <label class="col-sm-2 control-label">No Rekening  </label>
          <div class="col-sm-0">
          <label> <?= $n->nomor_rekening?></label>
         </div>
       </div>

       <div class="form-group">
         <label class="col-sm-2 control-label">Nama Nasabah  </label>
          <div class="col-sm-0">
          <label><?= $n->nama?></label>
         </div>
       </div>

       <div class="form-group">
         <label class="col-sm-2 control-label">Hari  </label>
          <div class="col-sm-0">
          <label> <?= $n->hari?></label>
         </div>
       </div>
       <div class="form-group">
         <label class="col-sm-2 control-label">Tanggal  </label>
          <div class="col-sm-0">
          <label><?= $n->tanggal_transaksi?> </label>
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
              <th>Jumlah</th>
            </tr>
          </thead>

          <tbody>
           <?php $no=1;foreach ($get_transaksi_nasabah as $k) {?>
              <tr>
                <td><?=$no++ ?></td>
                <td><?= $k->jenis?></td>
                <td><?= $k->berat?></td>
                <td><?= $k->harga_beli?></td>
                <td><?= $k->berat * $k->harga_beli?></td>
              </tr>
           <?php }?>

           </tbody>
          </table>
        
         <div class="form-group">
          <label class="col-sm-2 control-label"><b>Total Setoran (Rp) :</b></label>
          <div class="col-sm-2"> 
          <label><b> 
        
            <?php echo ($k->berat * $k->harga_beli)+($k->berat * $k->harga_beli)?>          </b></label>
         </div>
         
         </div>
        <div class="form-group">
        <div class="col-sm-offset-8 ">
          <a href="<?= site_url().'/Admin/Setoran_nasabah/Tambah_setoran' ?>" class="btn btn-default">Kembali</a>
          <button type="submit" class="btn btn-info">Cetak Nota</button>
        </div>
      </div>

         </div><!-- /.box-body -->
      </div><!-- /.box-body -->
    </div><!-- /.box -->
</div><!-- /.col -->


