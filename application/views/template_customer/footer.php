<!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 Company Name
                        - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

       <!-- Modal -->
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" >Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-us">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>
    

    <!-- jQuery -->
    <script src="<?= base_url('assets/assets_customer/')?>/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?= base_url('assets/assets_customer/')?>/js/popper.js"></script>
    <script src="<?= base_url('assets/assets_customer/')?>/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?= base_url('assets/assets_customer/')?>/js/scrollreveal.min.js"></script>
    <script src="<?= base_url('assets/assets_customer/')?>/js/waypoints.min.js"></script>
    <script src="<?= base_url('assets/assets_customer/')?>/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url('assets/assets_customer/')?>/js/imgfix.min.js"></script> 
    <script src="<?= base_url('assets/assets_customer/')?>/js/mixitup.js"></script> 
    <script src="<?= base_url('assets/assets_customer/')?>/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="<?= base_url('assets/assets_customer/')?>/js/custom.js"></script>

  </body>
</html>