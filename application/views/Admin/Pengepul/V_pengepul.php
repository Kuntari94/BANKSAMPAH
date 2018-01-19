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
        <h3 class="box-title">Data Pengepul</h3>
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
       <a href="<?= site_url().'/Admin/Pengepul/Tambah_pengepul' ?>" class="btn btn-primary pull-left"><i class="fa fa-plus"></i>&nbsp; Pengepul</a>
       <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
        <br> <br> <br> 
          <thead>
            <tr>
              <th>No</th>
              <th>Nama </th>
              <th>Alamat</th>
              <th>No HP</th>
              <th width="50">Aksi</th>
            </tr>
          </thead>

          <tbody>

            <?php $no=1;foreach ($tampil_pengepul as $p){ 

              ?>

              <tr>
                <td><?= $no++ ?> </td>
                <td><?= $p->nama ?></td>
                <td><?= $p->alamat ?></td>
                <td><?= $p->no_handphone ?></td>
                <td width="200">
                  <a class="btn btn-warning" title='edit' href="<?php echo site_url('Admin/Pengepul/Edit/'.$p->id_pengepul); ?>" ><i class='glyphicon glyphicon-edit'></a></i>

                   <a class="btn btn-danger" title='hapus' href="<?php echo site_url('Admin/Pengepul/Delete/'.$p->id_pengepul);?>" onClick="return confirm('Hapus data ?')" data-toggle="tooltip" data-placement="bottom"><i class='glyphicon glyphicon-trash'></a></i>   
                    
                  </a>
              </tr>
              <?php } ?>
            </tbody> 
          </table>

        </div><!-- /.box-body -->
      </div><!-- /.box-body -->
    </div><!-- /.box -->
</div><!-- /.col -->


