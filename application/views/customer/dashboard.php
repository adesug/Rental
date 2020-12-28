

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(<?= base_url('assets/assets_customer/')?>/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Sewa Dengan Harga <em> Terjangkau</em></h2>
                        <div class="animasiText">
                            <p>Mulai Dari 150 Ribu/Hari</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->


   <!-- ***** Fleet Starts ***** -->

    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
            <div class="row">
                    <?php foreach($mobil as $mb) : ?>
                        <div class="col-lg-3 col-md-3">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="<?= base_url('assets/upload/'.$mb->gambar)?>" style="width: 200px; height: 150px" alt="">
                                </div>
                                <div class="down-content">
                                    <br>
                                    <br>
                                    <h5><?= $mb ->merk?></h5>
                                    <h6 class="card-title">
                                        <a href="#">Rp.<?= number_format($mb->harga,0,',','.')  ?> / Hari</a>
                                    </h6>
                                    <!-- <h4>No. Plat: <?= $mb->no_plat  ?></h4> -->
                                    
                                    <p>
                                        <i><?php
                                            if ($mb->supir == "1"){
                                                echo "<i class='fa fa-check-square text-success'></i>";
                                            }else {
                                                    echo "<i class='fa fa-times-circle text-danger'></i>";
                                                }
                                            ?> sopir &nbsp;&nbsp;&nbsp;

                                        </i>
                                        <i><?php
                                            if ($mb->ac == "1"){
                                                echo "<i class='fa fa-check-square text-success'></i>";
                                            }else {
                                                    echo "<i class='fa fa-times-circle text-danger'></i>";
                                                }
                                            ?> ac &nbsp;&nbsp;&nbsp;
                                        </i>
                                        <i>
                                        <?php
                                            if ($mb->mp3_player == "1"){
                                                echo "<i class='fa fa-check-square text-success'></i>";
                                            }else {
                                                    echo "<i class='fa fa-times-circle text-danger'></i>";
                                                }
                                            ?> musik &nbsp;&nbsp;&nbsp;

                                        </i>

                                  
                                        
                                    </p>
                                    <ul class="social-icons">
                                    <div class="">
                                        <?php 
                                            if ($mb->status == "0"){
                                                echo "<button class='btn btn-danger' disable>Telah di Rental</button>";
                                            }else{
                                                echo anchor('user/rental/tambah_rental'.$mb->id_mobil, '<button class="btn btn-success">Rental</button>');
                                            }

                                        ?>
                                    <a class="btn btn-warning" href="<?= base_url('customer/dashboard/detail_mobil/').$mb->id_mobil?>">Detail</a>
                                    </div>
                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal">+ Book Now</a></li>
                                        </ul>
                                </div>  
                            </div>
                        </div>
                    <?php endforeach; ?>  
            </div>
               
            <br>
                
            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>
    </section>
    <script type="text/javascript">
		$(document).ready(function(){
			$('.animasiText p:not(:first)').hide();
			var text = $('.animasiText p:first').text();
			var i = 0;
			var newText = '';	
            
			
			setInterval(function(){
				newText += text.charAt(i);
				i++;
				
				if(i > text.length + 20){
					i = 0;
					newText = '';
					$('.animasiText p:first').appendTo('.animasiText');
					text = $('.animasiText p:first').text();
                  
				}
				
				$('.animasiText p:first').text(newText);
				$('.animasiText p:first').show();
				$('.animasiText p:not(:first)').hide();
                
			},100);
          
		});
    </script>
    <!-- <script type="text/javascript">
		$(document).ready(function(){	
			$('.cta-content p').hide();
			var i = 0;
			var posX = 220, newposX = 20;
			var text = $('.cta-content p:first').text();
				
				function buatHuruf(){
					for(j=0; j<=text.length; j++){
						$('<p class="huruf'+j+'">'+text.charAt(j)+'</p>')
							.appendTo('body')
							.css({'position': 'absolute'})
							.hide();
							
							if(j==0) posX=220;
							else if($('.huruf'+j).text()==' ') posX += 15;
							else posX += $('.huruf'+(j-1)).width() + 1;
							
							$('.huruf'+j).css({'left': posX});
					}
				}
			
			buatHuruf();
			
			setInterval(function(){				
				if(i > text.length + 20){					
					for(j=0; j<=i; j++){
						$('.huruf'+j).remove();
					}
					i = 0;
					$('.cta-content p:first').appendTo('.cta-content');
					text = $('.cta-content p:first').text();
					buatHuruf();
				}
				
				if(i==0) newposX=20;
				else if($('.huruf'+i).text()==' ') newposX += 15;
				else newposX += $('.huruf'+(i-1)).width() + 1;
				
				$('.huruf'+i).show().animate({'left': newposX}, 1000);
				
				i++;
			},200);
		});
	</script> -->
   
    <!-- ***** Fleet Ends ***** -->

    
    