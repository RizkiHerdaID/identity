        <?php include ('header.php') ?>
        <title>Identity - Login</title>
    </head>

    <body>
        <div class="overlay"></div>
        <!-- BEGIN NAVBAR -->
        <?php include ('navbar.php') ?>
        <!-- END NAVBAR -->

        <!-- BEGIN LOGIN -->
        <div class="container padding-top-30 padding bottom-30">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="login">
                        <h2>Login</h2>
                        <form method="post" action="<?php echo base_url().'f/otentikasi';?>">
                            <input type="text" name="nim" placeholder="NIM" required/> <br>
                            <input type="password" name="password" placeholder="Password" required/> <br> 
                            <img src="<?php echo base_url().'assets/captcha/'.$captcha['filename'];?>"><br>
                            <input type="submit" name="loginBtn" value="Login"> 
                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <!-- END LOGIN -->
            
        <!-- END OF MVP -->
        <?php include('footer.php') ?>