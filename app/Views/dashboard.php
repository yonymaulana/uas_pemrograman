<?php
$session = \Config\Services ::session();
$user = $session->get('username');
?>
<?= $this->include('header'); ?>
<?= $this->include('sidemenu'); ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

                        <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <h5><span class="fw-semibold d-block mb-1">Total Tipologi</span></h5>
                          <h3 class="card-title mb-2"><?= $total_tipologi['jumlah_tipologi']; ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <h5><span>Total Kategori</span></h5>
                          <h3 class="card-title text-nowrap mb-1"><?= $total_kategori['jumlah_kategori']; ?></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                        <h5><span class="fw-semibold d-block mb-1">Total Masjid</span></h5>
                          <h3 class="card-title mb-2"><?= $total_masjid['jumlah_masjid']; ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                        <h5><span>Total Musholla</span></h5>
                          <h3 class="card-title text-nowrap mb-1"><?= $total_musholla['jumlah_musholla']; ?></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- / Content -->
    
<?= $this->include('footer'); ?>
