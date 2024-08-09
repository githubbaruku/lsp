<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">

                    <div class="box-header">
                        <h3 class="box-title">Form Pengajuan Jadwal Sertifikasi

                        </h3>
                        <h5>Silahkan Isi Form Dibawah ini Untuk Pengajuan Jadwal Sertifikasi
                        </h5>
                    </div>

                    <div class="box-body">
                        <div class='row'>
                            <div class='col-md-9'>
                                <div style="padding-bottom: 10px;"'>
            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <?php
        $queryJadwal = "SELECT * FROM `tbl_jadwal`";
        $jadwal = $this->db->query($queryJadwal)->result_array();
        ?>

<?php foreach ($jadwal as $j) : ?>
    
<?php endforeach; ?>
<form action="<?= base_url('jadwal'); ?>" role="form" method="post" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Uji Sertifikasi</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Pilih tanggal" value="<?= isset($j['tanggal']) ? $j['tanggal'] : ''; ?>">
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Skema</label>
                  <select class="form-control" id="skema" name="skema" required>
       <option value="<?= $j['skema']; ?>"><?= $j['skema']; ?></option>

       <?php
        // Mengambil data dari database tbl_formapl01
        $querySkema = "SELECT * FROM `tbl_formapl01`";
        $skema = $this->db->query($querySkema)->result_array();

        // Looping untuk menampilkan opsi skema
        foreach ($skema as $row) {
            echo '<option value="' . $row['id'] . '">' . $row['skema'] . '</option>';
        }
        ?>
   </select>
                </div>
                <!-- select -->
                <div class="form-group">
                  <label>Pilih TUK</label>
                  <select class="form-control" id="skema" name="tuk" required>
                        <option value="<?= $j['tuk']; ?>"><?= $j['tuk']; ?></option>

                        <?php
                        // Mengambil data dari database tbl_formapl01
                        $queryjadwal = "SELECT * FROM `tbl_jadwal`";
                        $jadwal = $this->db->query($queryJadwal)->result_array();

                        // Looping untuk menampilkan opsi skema
                        foreach ($jadwal as $row) {
                            echo '<option value="' . $row['id'] . '">' . $row['tuk'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </section>
</div>