      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?= base_url('assets/assets_user/')?>gambar/bg1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= base_url('assets/assets_user/')?>gambar/bg2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= base_url('assets/assets_user/')?>gambar/bg3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
 
        <div class="row">

        <?php foreach($mobil  as $mb ) :  ?>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?= base_url('assets/upload/'.$mb->gambar) ?>" style="width: 200px; height: 130px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?= $mb ->merk?></a>
                </h4>
                <h5>No. Plat: <?= $mb->no_plat  ?></h5>
                
              </div>
              <div class="card-footer">
               <?php 
               if ($mb->status == "0"){
                 echo "<span class='btn btn-danger' disable>Telah di Rental</span>";
               }else{
                 echo anchor('user/rental/tambah_rental'.$mb->id_mobil, '<button class="btn btn-success">Rental</button>');
               }

               ?>
               <a class="btn btn-warning" href="<?= base_url('user/dashboard/detail_mobil/').$mb->id_mobil?>">Detail</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>  

          

        

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

 