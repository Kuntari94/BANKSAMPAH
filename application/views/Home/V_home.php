<script src="<?php echo base_url('assets');?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url('assets');?>/assets/js/bootstrap-carousel.js"></script>

<div id="landing">
  <div class="container">  
	<div class="row">
	<!-- -->
	<?php echo $this->session->flashdata('info_crud'); ?>
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
			<img src="<?php echo base_url();?>assets/gambar/1.jpg" alt="">
			<div class="carousel-caption">
			  <h4>Gedung Sekolah Vokasi UGM</h4>
			  <p>Berada di Sekip UGM</p>
			</div>
		  </div>
		  <div class="item">
			<img src="<?php echo base_url();?>assets/gambar/2.jpg" alt="">
			<div class="carousel-caption">
			  <h4>Gedung Pusat UGM</h4>
			  <p>Pusat administrasi Universitas Gadjah Mada</p>
			</div>
		  </div>
		  <div class="item">
			<img src="<?php echo base_url();?>assets/gambar/3.jpg" alt="">
			<div class="carousel-caption">
			  <h4>Universitas Gadjah Mada</h4>
			  <p>Kampus Biru. Kampus Tercinta.</p>
			</div>
		  </div>
		  <div class="item">
			<img src="<?php echo base_url();?>assets/gambar/4.jpg" alt="">
			<div class="carousel-caption">
			  <h4>Kampusku, UGM</h4>
			  <p>Tetap kampus tercinta</p>
			</div>
		  </div>
		</div>
		
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div>
	</div>
	
	<!-- -->
	</div>
  </div>
</div>
</div>

<script>
	$(document).ready(function(){
		$('.carousel').carousel();
	});
</script>