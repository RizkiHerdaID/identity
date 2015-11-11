        <?php include ('header.php') ?>
        <title>Identity - Home</title>
    </head>

    <body>
        <div class="overlay"></div>
        <!-- BEGIN HEADER  -->
        <?php include('navbar.php') ?>
        <!-- END OF HEADER -->

        <!-- BEGIN QUOTE -->
        <br>
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8 quote padding-bottom-10">
<!--                 <div id="owl-demo" class="owl-carousel owl-theme">
                    <div> -->
                        <h2 style="text-align:center"> "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</h2>
                        <div class="col-md-2"></div>
                        <div class="col-md-4 padding-bottom-30 pull-right">
                            <p class="quote quote-title">- John Patrick Sebastian</p>
                        </div>
<!--                     </div>     
                </div> -->                
            </div>
        </div>
        <!-- END OF QUOTE -->
        <!-- BEGIN FORM PENCARIAN -->
        <div class="container">
            <div class="pencarian padding-bottom-30">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <input type="text" name="nim" placeholder="Masukkan NIM">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <center><input type="submit" name="searchBtn" value="Search"></center>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <!-- END FORM PENCARIAN -->

        <!-- BEGIN MVP -->
        <div class="container padding-bottom-30">
            <div class="col-md-12">
                <center>
                    <div class="col-md-3"></div>
                    <div class="col-md-2">
                        <h4>MVP1</h4>
                        <img src="<?php echo base_url().'assets/home/img/mvp.jpg';?>" style="height:60px" class="img-responsive img-circle">
                        <h4>Huda</h4>
                    </div>
                    <div class="col-md-2">
                        <h4>MVP2</h4>
                        <img src="<?php echo base_url().'assets/home/img/mvp.jpg';?>" style="height:60px" class="img-responsive img-circle">
                        <h4>Marcelli</h4>
                    </div>
                    <div class="col-md-2">
                        <h4>MVP2</h4>
                        <img src="<?php echo base_url().'assets/home/img/mvp.jpg';?>" style="height:60px" class="img-responsive img-circle">
                        <h4>Haris</h4>
                    </div>                    
                    <div class="col-md-3"></div>
                </center>                
            </div>
        </div>
        <!-- END OF MVP -->
        <?php include('footer.php') ?>