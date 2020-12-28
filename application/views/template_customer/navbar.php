
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="<?= base_url('customer/dashboard')?>" class="logo">Rental Mobil<em> Tegal</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <!-- <li><a href="index.html">Home</a></li> -->
                            <li><a href="<?= base_url('customer/dashboard')?>" class="active">Home</a></li>
                            <li><a href="#section">Mobil</a></li>
                            <li><a href="<?= base_url('register')?>">Register</a></li>
                           
                            
                                <?php if ($this->session->userdata('nama')) {?>
                                    <a class="nav-link mb-3" href="<?= base_url('auth/logout')?>">
                                    <li> Welcome <?= $this->session->userdata('nama')?>
                                    <span class=" btn btn-sm btn-warning mb-3 "> LogOut</span> </li>
                                </a>
                                    <?php } else {  ?>
                                    <a class="nav-link" href="<?= base_url('auth/login')?>"><span class=" btn btn-sm btn-success mb-3"> Login</span> </a>
                                <?php } ?>
          
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->