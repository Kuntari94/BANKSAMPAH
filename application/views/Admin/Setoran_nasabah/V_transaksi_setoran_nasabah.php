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

<div class="row">
<div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title">Slip Setoran Sampah</h3>
  </div><!-- /.box-header -->

  <form class="form-horizontal" action="<?= $form_action ?>" enctype="multipart/form-data" onsubmit="return Validate(this);" method="POST">
    <div class="box-body">  
      <div class="form-group">
  
        <label class="col-sm-2 control-label">No Nota</label>
        <div class="col-sm-2">
          <input required type="text" class="form-control" id="no_nota" name="nota_transaksi" placeholder="No Nota" value="<?= $kodeunik?>">
        </div>
        <label class="col-sm-2 control-label">No Rekening</label>
        <div class="col-sm-2">

           <select class="form-control" name="nomor_rekening" id="nomor_rekening">
          <option>-Pilih-</option> 
        <?php $t_nasabah=$this->db->query("SELECT * from t_nasabah");
        foreach ($t_nasabah->result() as $row) {
          ?>
          <option value="<?php echo $row->id_nasabah;?>"<?php if($this->input->post(' ')){echo "selected";}?>><?php echo $row->nomor_rekening; ?></option>
       <?php }?>
        </select>
        </div>
      </div>

     <div class="form-group">
      <label class="col-sm-2 control-label">Hari</label>
      <div class="col-sm-2"> 
        <select class="form-control" name="hari" value="hari">
          <option value="">-Pilih-</option>
          <option id="hari_1" value="Senin">Senin</option>
          <option id="hari_2" value="Selasa">Selasa</option>
          <option id="hari_3" value="Rabu">Rabu</option>
          <option id="hari_4" value="Kamis">Kamis</option>
          <option id="hari_5" value="Jumat">Jumat</option>
          <option id="hari_6" value="Sabtu">Sabtu</option>
          <option id="hari_7" value="Minggu">Minggu</option>
        </select>
      </div>   
      <label class="col-sm-2 control-label">Jenis Sampah</label>
      <div class="col-sm-2">
        <select class="form-control" name="jenis" id="jenis">
        <option>-Pilih-</option>
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
        <input required type="text" data-date-format="yyyy-mm-dd"  name="tanggal_transaksi" id="tanggal">
      </div>
      <label class="col-sm-2 control-label">Berat kg/satuan</label>
      <div class="col-sm-2">
        <input required type="text" class="form-control" id="berat" name="berat" placeholder="misal : 0.2">
      </div>
    </div>

      <div class="col-sm-offset-8 ">
          <a href="<?= site_url().'/Admin/Setoran_nasabah/Detail_transaksi' ?>" class="btn btn-default">Selesai</a>

          <button type="<?= site_url().'/Admin/Setoran_nasabah/Tambah_setoran/.$id_transaksi'?>" class="btn btn-info">Simpan</button>
      </div>
 
  <div class="box-header with-border">
    <h5 class="box-title center">Daftar Transaksi Setoran No Nota</h5>
  </div>
  <table id="example" class="table table-bordered table-striped">
    
          <thead>
            <tr>
              <th>No</th>
              <th>Jenis Sampah </th>
              <th>Berat</th>
              <th>Jumlah (Rp)</th>
              <th>Aksi</th>
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

    </div><!-- /.box-body -->
    <div class="box-footer">

    </div><!-- /.box-footer -->
  </form>
</div><!-- /.box -->
</div>

<script type="text/javascript">
$('#tanggal').datepicker();

</script>