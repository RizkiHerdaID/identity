<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <!-- BEGIN LEVEL STYLESHEET-->

        <link href="<?php echo base_url().'assets/global/css/bootstrap.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/home/css/shome.css';?>" rel="stylesheet">

        <!-- FAVICON -->
        <link rel="icon" type="image/png" href="" sizes="32x32">

        <div class="overlay"></div>
        <!-- BEGIN HEADER  -->
        <?php include('navbar.php') ?>
        <!-- END OF HEADER -->
        
        <div class="container">
            <hr>
        </div>

        <!-- BEGIN QUOTE -->
        <br>

        <!-- LOAD HEADER DARI HOME -->
          <div class="container padding-bottom-40">
	          <div class="col-md-12 col-sm-12">
	            <div class="login page-404">
	               <div class="number">
	                  404
	               </div>
	               <div class="details">
	                <h3><?=$judul?></h3>
	                <p style="font-size:18px">
	                    <?=$pesan?>
	                <p>                
                    <a href="<?=$link?>">
                    <button class="btn btn-primary">
                        <?=$nama_tombol?>
                    </button>
                    </a>
	               </div>
	            </div>
	          </div>
          </div>
        <!-- LOAD FOOTER DARI HOME -->


        <!-- BEGIN PAGE JAVASCRIPT-->
        <script src="<?php echo base_url().'assets/plugins/jquery-2.1.4.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/plugins/bootstrap/bootstrap.min.js';?>" type="text/javascript"></script>
        <!-- END OF JAVASCRIPT -->

    </body>
</html>
