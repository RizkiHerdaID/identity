 <!-- BEGIN HEADER  -->
        <nav class="navbar navbar-custom">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="<?php echo base_url().'assets/home/img/logo.png';?>" class="img-responsive" style="height:40px"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"> Daftar</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
                              Login              
                            </a>              
                            <ul class="dropdown-menu loginDrop">
                                <form method="post" action="<?php echo base_url().'f/otentikasi';?>">
                                    <input type="text" name="nim" placeholder="NIM" required/> <br>
                                    <input type="password" name="password" placeholder="Password" required/> <br>
                                    <input type="submit" value="login" />
                                </form> 
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- END OF HEADER -->