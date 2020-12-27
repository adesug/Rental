


<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Rental Tegal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('register')?>">Register</a>
        </li>
        <li class="nav-item">
          <?php if ($this->session->userdata('nama')) {?>
            <a class="nav-link" href="<?= base_url('auth/logout')?>">Welcome <?= $this->session->userdata('nama')?> <span class=" btn btn-sm btn-warning"> LogOut</span> </a>
            <?php } else {  ?>
              <a class="nav-link" href="<?= base_url('auth/login')?>"><span class=" btn btn-sm btn-success"> Login</span> </a>
            <?php } ?>
          
        </li>
       
      </ul>
    </div>
  </div>
</nav>