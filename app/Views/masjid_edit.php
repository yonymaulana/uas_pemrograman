<?= $this->include('header'); ?>
<?= $this->include('sidemenu'); ?> 

<section class="section">

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <form class="form-horizontal" action="<?= base_url('masjid/pro_edit') ?>" method="POST" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <?php foreach($masjid as $masjid){ ?>      
              <div class="row">
              <h5 class="card-title">Edit Data Masjid</h5>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Nama Masjid / Musholla</h5>
                    <div class="card-body">
                      <div>
                        <input type="text"class="form-control" name="nama_masjid"placeholder="Masjid/Musholla"
                        aria-describedby="defaultFormControlHelp"
                         required value="<?= $masjid->nama_masjid; ?>"/>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Kategori</h5>
                    <div class="card-body">
                      <div class="form-floating">
                                    <select class="form-control" Placeholder="Kategori" name="kategori" required>
                                        <option value="0">--Pilih--</option>
                                        <?php
                      foreach ($opt_kategori as $row) {
                        if ($row->id == $masjid->kategori) {
                          echo "<option value=" . $row->id . " selected=selected>" . $row->kategori . "</option>";
                        } else {
                        echo "<option value=" . $row->id . ">" . $row->kategori . "</option>";
                        }
                      }
                      ?>
                                    </select>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Form controls -->
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Form Dasar</h5>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Luas Tanah</label>
                        <input type="text" class="form-control" name="luas_tanah" placeholder="Luas Tanah" required value="<?= $masjid->luas_tanah; ?>"/>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInput1" class="form-label">Luas Bangunan</label>
                        <input class="form-control" type="text" name="luas_bangunan" placeholder="Luas Bangunan" required value="<?= $masjid->luas_bangunan; ?>"/>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Daya Tampung</label>
                        <input type="text" class="form-control" name="daya_tampung" placeholder="Daya Tampung" required value="<?= $masjid->daya_tampung; ?>"/>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Peresemian</label>
                        <input type="date" class="form-control" name="tgl_resmi" placeholder="Tanggal Peresmian" required value="<?= $masjid->tgl_resmi; ?>"/>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat"placeholder="Alamat" required value="<?= $masjid->alamat; ?>"/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Provinsi</label>
                        <select name="provinsi" class="form-control form-control-sm" data-placeholder="Provinsi" required>
                      <option value="0">--Pilih--</option>
                      <?php
                      foreach ($opt_provinsi as $row) {
                        if ($row->id == $masjid->provinsi) {
                          echo "<option value=" . $row->id . " selected=selected>" . $row->provinsi . "</option>";
                        } else {
                        echo "<option value=" . $row->id . ">" . $row->provinsi . "</option>";
                        }
                      }
                      ?>
                    </select>
                      </div>
                      <div class="mb-3">
                      <label class="form-label">Tipologi</label>
                      <select name="tipologi" class="form-control form-control-sm" data-placeholder="Tipologi" required>
                      <option value="0">--Pilih--</option>
                      <?php
                      foreach ($opt_tipologi as $row) {
                        if ($row->id == $masjid->tipologi) {
                          echo "<option value=" . $row->id . " selected=selected>" . $row->tipologi . "</option>";
                        } else {
                        echo "<option value=" . $row->id . ">" . $row->tipologi . "</option>";
                      }
                    }
                      ?>
                    </select>
                            <br>
                            <?php } ?>
                            <div class="text-right">
                <button type="button" class="btn btn-danger btn-rounded pull-right" onClick="javascript:history.go(-1)">
                  <i class="far fa-times-circle fa-lg"></i><b> Back</b>
                </button>
                <button type="submit" class="btn btn-warning btn-rounded pull-right">
                  <i class="far far fa-paper-plane fa-lg"></i><b> Submit</b>
                </button>
              </div>
              <br>  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</form>

</section>
            <!-- / Content -->

<?= $this->include('footer'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
<script>
  $(document).ready(function() {
    $('#example').DataTable({
      ajax: '<?php echo base_url("masjid/data_masjid_json") ?>'
    });
  });
</script>