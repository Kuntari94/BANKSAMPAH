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
        <h3 class="box-title" align="center">Laporan Pengepul Bank Sampah</h3>
        <h3 align="center">"Gemah Ripah Bantul"</h3>
        <br><br>
      </div>
      <!-- /.box-header -->
      <br>
     <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Transaksi </label>
        <div class="col-sm-2">
          <input required type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Pilih Tanggal">
        </div>
       <div class="form-group">
        <div class="col-sm-5">
         <a href="<?= site_url().'' ?>" class="btn btn-success">Tampil</a>
        </div>
       </div>
     </div>
<br><br><br>
        <table id="example" class="table table-bordered table-striped">

          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal </th>
              <th>Nama Pengepul</th>
              <th>No Nota Transaksi</th>
              <th>Jumlah(Rp) </th>
            </tr>
          </thead>

          <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
           </tbody> 
          </table>
        <br>
        <div class="form-group">
        <b> Total</b>
        </div>
        <div class="form-group">
        <div class="col-sm-offset-8 col-sm-10">
          <a href="<?= site_url().'' ?>" class="btn btn-default">Kembali</a>
          <button type="submit" class="btn btn-info">Cetak Setoran Pengepul</button>
        </div>
      </div> 
        </div><!-- /.box-body -->
      </div><!-- /.box-body -->
    </div><!-- /.box -->
</div><!-- /.col -->


