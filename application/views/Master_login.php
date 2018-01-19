<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

     <!-- Preloader -->
    <link rel="stylesheet" href="<?php echo base_url('') ;?>assetz/css/preloader.css" type="text/css" media="screen, print"/>

    <!-- Icon Font-->
    <link rel="stylesheet" href="<?php echo base_url('') ;?>assetz/style.css">
    <link rel="stylesheet" href="<?php echo base_url('') ;?>assetz/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url('') ;?>assetz/css/owl.theme.default.css">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="<?php echo base_url('') ;?>assetz/css/animate.css">

    <!-- Bootstrap -->
    <link href="<?php echo base_url('') ;?>assetz/css/bootstrap.min.css" rel="stylesheet">



    <!-- Style -->
    <link href="<?php echo base_url('') ;?>assetz/css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php echo base_url('') ;?>assetz/css/responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/lte-ie7.js"></script>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
                <!-- Preloader -->
                <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>




    <header id="HOME" style="background-position: 50% -125px;">
	        <div class="section_overlay">
	            <nav class="navbar navbar-default navbar-fixed-top">
	              <div class="container">
	                <!-- Brand and toggle get grouped for better mobile display -->
	                <div class="navbar-header">
	                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                  </button>
	                  <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
	                </div>

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                  <ul class="nav navbar-nav navbar-right">
	                     <li><a href="<?= site_url().'/Home/Home'?>">Home</a></li>
	                    <li><a href="<?= site_url().'/Home/Home#Tentang'?>">Tentang</a></li>
	                    <li><a href="<?= site_url().'/Home/Home#Kontak'?>">Kontak</a></li>
	                     <li><a href="<?= site_url().'/Login/Login'?>">Login</a></li>
	                  </ul>
	                </div><!-- /.navbar-collapse -->
	              </div><!-- /.container -->
	            </nav>           
	        </div>  
	    </section>         
    </header>

    <section class="testimonial text-center wow fadeInUp animated" id="LOGIN">
        <div class="container">
           <?php echo @$main; ?>         
        </div>
    </section>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright_text   wow fadeInUp animated">
                   
                    	<span class="bigger-120">
                    		<span class="blue bolder">Ktr</span>
                    		&copy; 2017
                    	</span>

                    	&nbsp; &nbsp;
                    	<span class="action-buttons">
                    		<a href="#">
                    			<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                    		</a>

                    		<a href="#">
                    			<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                    		</a>

                    		<a href="#">
                    			<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                    		</a>
                    	</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>












<!-- =========================
     SCRIPTS 
============================== -->


    <script src="<?php echo base_url('') ;?>assetz/js/jquery.min.js"></script>
    <script src="<?php echo base_url('') ;?>assetz/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('') ;?>assetz/js/jquery.nicescroll.js"></script>
    <script src="<?php echo base_url('') ;?>assetz/js/owl.carousel.js"></script>
    <script src="<?php echo base_url('') ;?>assetz/js/wow.js"></script>
    <script src="<?php echo base_url('') ;?>assetz/js/script.js"></script>




</body>

</html>