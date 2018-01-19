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

<script src="<?php echo base_url('assets');?>/assets/js2/jquery.js"></script>
<script src="<?php echo base_url('assets');?>/assets/js2/jquery.min.js"></script>
<script src="<?php echo base_url('assets');?>/assets/js2/bootstrap-datepicker.js"></script>  

<link  rel="stylesheet" href="<?php echo base_url('assets');?>/assets/css/datepicker.css">


<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets');?>/datetimepicker/css/bootstrap-datetimepicker.min.css">

<script type="text/javascript" src="<?php echo base_url('assets');?>/datetimepicker/js/bootstrap-datetimepicker.min.js"></script> 

<script type="text/javascript" src="<?php echo base_url('assets');?>/datetimepicker/js/bootstrap-datetimepicker.pt-BR.js"></script> 

  <script type="text/javascript" src="<?php echo base_url('assets');?>/datetimepicker/js/bootstrap.min.js"></script>

<div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title"> Rekap Slip Setoran Pengepul</h3>
  </div><!-- /.box-header -->
<br><br>
  <form class="form-horizontal" action="<?= $form_action ?>" enctype="multipart/form-data" onsubmit="return Validate(this);" method="POST">
    <div class="box-body">
      <div class="form-group">
      <input required type="hidden" class="form-control" id="id_transaksi_pengepul" name="id_transaksi_pengepul" value="<?= $get_id_transaksi->id_transaksi_pengepul?>">

        <label class="col-sm-2 control-label">No Nota</label>
        <div class="col-sm-2">
          <input required type="text" disabled="disabled"  class="form-control" id="nota_transaksi" name="nota_transaksi" value="<?= $get_transaksi_by_id->nota_transaksi?>">
        </div>
      </div>

     <div class="form-group">
      <label class="col-sm-2 control-label">Hari</label>
      <div class="col-sm-2"> 
         <input required type="text" disabled="disabled"  class="form-control" id="nota_transaksi" name="nota_transaksi" value="<?= $get_transaksi_by_id->hari?>">
      </div>   
      <label class="col-sm-2 control-label">Jenis Sampah</label>
      <div class="col-sm-2">
        <select class="form-control" name="jenis" id="jenis">
        <?php $t_sampah=$this->db->query("SELECT * from t_sampah");
        foreach ($t_sampah->result() as $row) {
          ?>
          <option value="<?php echo $row->id_sampah;?>"<?php if($this->input->post('jenis')){echo "selected";}?>><?php echo $row->jenis; ?></option>
       <?php }?>
        </select>
      </div>  
     </div>
      
    <div class="form-group">
      <label class="col-sm-2 control-label">Tanggal </label>
      <div class="col-sm-2">
        <input required type="text" disabled="disabled" data-date-format="dd-mm-yyyy"  name="tanggal" id="tanggal" value="<?= $get_transaksi_by_id->tanggal?>">
      </div>
      <label class="col-sm-2 control-label">Berat kg/satuan</label>
      <div class="col-sm-2">
        <input required type="text" class="form-control" id="berat" name="berat" placeholder="misal : 0.2">
      </div>
    </div>
    <div class="form-group">
     <label class="col-sm-2 control-label">Nama Pengepul</label>
      <div class="col-sm-2">
         <input required type="text" disabled="disabled" class="form-control" id="nama" name="nama" value="<?= $get_transaksi_by_id->nama?>">
      </div>
    <label class="col-sm-2 control-label">Harga(Rp)</label>
      <div class="col-sm-2">
        <input required type="text" class="form-control" id="harga" name="harga" placeholder="misal :400">
      </div>
    </div>
      <div class="col-sm-offset-8 ">
          <a href="<?= site_url().'/Admin/Setoran_pengepul/Detail_transaksi/'.$get_id_transaksi->id_transaksi_pengepul ?>" class="btn btn-default">Selesai</a>
          <button type="submit" class="btn btn-info">Simpan</button>
      </div>
  <div class="box-header with-border">
    <h5 class="box-title center">Daftar Transaksi Setoran Pengepul No Nota <b> <?= $get_transaksi_by_id->nota_transaksi?> </b></h5>
  </div>
  <table id="example" class="table table-bordered table-striped">

          <thead>
            <tr>
              <th>No</th>
              <th>Jenis Sampah </th>
              <th>Berat</th>
              <th>Harga</th>
              <th>Jumlah (Rp)</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
          <?php $no=1; foreach ($get_all_transaksi_byid as $k) {?>
             <tr>
                <td><?= $no++?></td>
                <td><?= $k->jenis?></td>
                <td><?= $k->berat?></td>
                <td><?= $k->harga?></td>
                <td><?= $k->berat * $k->harga?></td>
                <td width="200">
                  <a class="btn btn-warning" title='edit' href="" ><i class='glyphicon glyphicon-edit'></a></i>

                   <a class="btn btn-danger" title='hapus' href="" onClick="return confirm('Hapus data ?')" data-toggle="tooltip" data-placement="bottom"><i class='glyphicon glyphicon-trash'></a></i>
              </tr>
            <?php }?>
            </tbody> 
          </table>

    </div><!-- /.box-body -->
    <div class="box-footer">

    </div><!-- /.box-footer -->
  </form>
</div><!-- /.box -->

<script type="text/javascript">
$('#tanggal').datepicker();

</script>