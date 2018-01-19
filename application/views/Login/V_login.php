<div id="landing">
  <div class="container">
  <div class="row">
  <br>
  <br>
  <br><br>
      <h2 class="txt-middle" align="center"><strong>Login</strong></h2>
      <br>
<?php 
    $message = $this->session->flashdata('info-gagal'); 
    if(@$message != '') :
  ?>
  <div class="alert alert-danger alert-dismissable">
    <a class="close" href="#" data-dismiss="alert">x</a>
    <strong><?php echo @$message; ?></strong>
  </div>
  <?php  endif ?>
    
      <form id="form-login" class="txt-lefty" method="POST" action="<?php echo site_url("Login/Login/Proses_cek");?>">
      <center>
      <div class="control-group">
        <div class="controls">
        <div class="input-prepend">
          <label class="control-sm-4 ">Username</label>
          <input type="text" name="username" placeholder="Username" class="span" required>
        </div>
        </div>
      </div>
      <br>
      <div class="control-group"> 
        <div class="controls">
        <div class="input-prepend">
          <label class="control-sm-4">Password</label>
          <input type="password" name="password" placeholder="Password" class="span" required>
        </div>
        </div>      
      </div>
      <br>
        <button class="btn btn-primary btn-large" type="submit">Masuk</button>
      </center>
      </form>
      <script type="text/javascript">
        $().ready(function() {
          // validate signup form on keyup and submit
          $("#form-login").validate({
            rules: {
              niu: "required",
              password: "required"
            },
            messages: {
              niu: "Kolom username harus diisi!.",
              password: "Kolom password harus diisi!"
            }
          });
          
          $("#form-login").live('submit',function(){
            
          });
        });
      </script>
    </div> 
  </div>
</div>  
