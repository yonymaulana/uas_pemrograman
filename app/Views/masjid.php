<?= $this->include('header'); ?>
<?= $this->include('sidemenu'); ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

              <!-- Responsive Table -->
              <div class="card">
                <h3 class="card-header"><b>Data Masjid</b></h3>
        <p style="padding-left:20px;"><a href="<?= base_url('masjid/add')?>" class="btn btn-primary">
            <i class="bi bi-plus"></i> Add </a></p>
                <div class="table-responsive text-nowrap">
                  <table class="table" id="example">
                    <thead>
                      <tr class="text-nowrap">
                        <th>No</th>
                        <th>Nama Masjid</th>
                        <th>Luas Tanah</th>
                        <th>Luas Bangunan</th>
                        <th>Daya Tampung</th>
                        <th>Tanggal Peresemian</th>
                        <th>Alamat</th>
                        <th>Provinsi</th>
                        <th>Kategori</th>
                        <th>Tipologi</th>
                        <th>Tanggal Masuk</th>
                        <th>Option</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->
            </div>
            <!-- / Content -->
<?= $this->include('footer'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
   <script>
  $(document).ready(function () {
    $('#example').DataTable({
        ajax: '<?php echo base_url("masjid/data_masjid_json"); ?>'
    });
});
</script>