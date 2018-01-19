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


  <div class="box-header with-border">
    <h3 class="box-title">Slip Setoran Sampah</h3>
  </div><!-- /.box-header -->

  <form class="form-horizontal" action="<?= $form_action ?>" enctype="multipart/form-data" onsubmit="return Validate(this);" method="POST">
    <div class="box-body">  
      <div class="form-group">
        <input required type="hidden" class="form-control" id="id_transaksi" name="id_transaksi" value="<?= $get_transaksi_by_id->id_transaksi?>">

        <label class="col-sm-2 control-label">No Nota</label>
        <div class="col-sm-2">
          <input required type="text" class="form-control" id="no_nota" disabled="disabled" name="nota_transaksi" placeholder="No Nota" value="<?= $get_transaksi_by_id->nota_transaksi?>">
        </div>
        <label class="col-sm-2 control-label">No Rekening</label>
        <div class="col-sm-2">

           <input type="text" class="form-control" name="nomor_rekening" id="nomor_rekening" value="<?= $get_nasabah->nomor_rekening?>" disabled="disabled">
        
        </div>
      </div>

     <div class="form-group">
      <label class="col-sm-2 control-label">Hari</label>
      <div class="col-sm-2"> 
        <input type="text" class="form-control" name="hari" value="<?=$get_transaksi_by_id->hari?>" disabled="disabled">
      </div>   

      <label class="col-sm-2 control-label">Jenis Sampah</label>
      <div class="col-sm-2">
        <select class="form-control" name="jenis" id="jenis">
        <option>-Pilih-</option>
        <option value="sepatu">-Sepatu-</option>
        <option value="plastik">-Plastik-</option>
        </select>
      </div>  
     </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Tanggal </label>
      <div class="col-sm-2">
        <input required type="text" data-date-format="yyyy-mm-dd"  name="tanggal_transaksi" id="tanggal" value="<?=$get_transaksi_by_id->tanggal_transaksi?>" disabled="disabled">
      </div>

      <label class="col-sm-2 control-label">Berat kg/satuan</label>
      <div class="col-sm-2">
        <input required type="text" class="form-control" id="berat" name="berat" placeholder="misal : 0.2">
      </div>
    </div>

      <div class="col-sm-offset-8">
          <a href="<?= site_url().'/Admin/Setoran_nasabah/Detail_transaksi/'.$get_id_transaksi->id_transaksi ?>" class="btn btn-warning">Selesai</a>

          <button type="<?= site_url().'/Admin/Setoran_nasabah/Tambah_setoran/.$id_transaksi'?>" class="btn btn-info">Simpan</button>

          <button type="<?= site_url().'/Admin/Setoran_nasabah/Tambah_setoran/.$id_transaksi'?>" class="btn btn-danger">Batal</button>
      </div>

  <div class="box-header with-border">
    <h5 class="box-title center">Daftar Transaksi Setoran No Nota</h5>
  </div>
  <table id="example" class="table table-bordered table-striped">
        <br> <br> <br> 
          <thead>
            <tr>
              <th>No</th>
              <th>Jenis</th>
              <th>Berat</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th width="50">Aksi</th>
            </tr>
          </thead>

          <tbody>

            <?php $no=1;foreach ($get_transaksi_nasabah as $gn){ 

              ?>

              <tr>
                <td><?= $no++ ?> </td>
                <td><?= $gn->jenis ?></td>
                <td><?= $gn->berat ?></td>
                <td><?= $gn->harga_beli ?></td>
                <td><?= $gn->berat * $gn->harga_beli ?></td>
                <td width="200">
                  <a class="btn btn-warning" title='edit' href="" ><i class='glyphicon glyphicon-edit'></a></i>

                   <a class="btn btn-danger" title='hapus' href="" onClick="return confirm('Hapus data ?')" data-toggle="tooltip" data-placement="bottom"><i class='glyphicon glyphicon-trash'></a></i>  
      
              </tr>
              <?php } ?>
            </tbody> 
          </table>

 </div>
 


<script type="text/javascript">
$('#tanggal').datepicker();

</script>