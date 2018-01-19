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
        <h3 class="box-title" align="center">Buku Tabungan Bank Sampah</h3>
        <h3 align="center">"Gemah Ripah Bantul"</h3>
      </div>
      <!-- /.box-header -->
      <br>
       <div class="form-group">
         <label class="col-sm-5 control-label">Nama Nasabah  </label>
          <div class="col-sm-0">
          <label> </label>
         </div>
       </div>
       <div class="form-group">
         <label class="col-sm-2 control-label">No Rekening  </label>
          <div class="col-sm-0">
          <label> </label>
         </div>
       </div>
       <div class="form-group">
         <label class="col-sm-2 control-label">Alamat</label>
          <div class="col-sm-0">
          <label> </label>
         </div>
       </div>
       
        <table id="" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal </th>
              <th>Kode Sandi</th>
              <th>Setor</th>
              <th>Tarik</th>
              <th>Saldo </th>
            </tr>
          </thead>

          <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
           </tbody> 
          </table>
        <div class="form-group">
        <div class="col-sm-offset-8 col-sm-10">
          <a href="<?= site_url().'/Admin/Buku_tabungan' ?>" class="btn btn-default">Kembali</a>
          <button type="submit" class="btn btn-info">Cetak Tabungan</button>
        </div>
      </div> 
        </div><!-- /.box-body -->
      </div><!-- /.box-body -->
    </div><!-- /.box -->
</div><!-- /.col -->


