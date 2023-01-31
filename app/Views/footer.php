<!-- Footer -->

<?php $session = \Config\Services::session();?>
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                            </script>
              </div>
            </footer>
<!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url('');?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url('');?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url('');?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url('');?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url('');?>/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url('');?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url('');?>/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url('');?>/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
<?php if ($session->getFlashdata('sukses')) { ?>
// Notifikasi
swal ( "Berhasil" ,  "<?= $session->getFlashdata('sukses'); ?>" ,  "success" )
<?php } ?>

<?php if ($session->getFlashdata('warning')) { ?>
// Notifikasi
swal ( "Mohon maaf" ,  "<?= $session->getFlashdata('warning'); ?>" ,  "warning" )
<?php } ?>  
</script>
  </body>
</html>
