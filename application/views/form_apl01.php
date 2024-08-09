<div class="content-wrapper">
    <section class="content">
        <h3>
            Persyaratan Uji Kompetensi
        </h3>
        <p>Untuk Bisa Mengikuti Uji Kompetensi Silahkan Lengkapi Persyaratan dan Dokumen Berikut Ini:
        </p>
        <div class="container">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo $this->session->flashdata;
            }
            ?>
            <h2>
                FR-APL-01. Formulir Permohonan Sertifikasi Kompetensi
            </h2>
            <h4>Bagian 1: Rincian Data Pemohon Sertifikasi
            </h4>

            <form action="<?= base_url('form/submit_form'); ?>" method="post" enctype="multipart/form-data">
                <!-- Skema -->
                <div class="form-group">
                    <label for="skema">Skema*</label>
                    <select class="form-control" id="skema" name="skema" required>
                        <option value="">- Pilih -</option>

                        <?php
                        // Mengambil data dari database tbl_formapl01
                        $querySkema = "SELECT * FROM `tbl_skema`";
                        $skema = $this->db->query($querySkema)->result_array();

                        // Looping untuk menampilkan opsi skema
                        foreach ($skema as $row) {
                            echo '<option value="' . $row['id'] . '">' . $row['nama_skema'] . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <!-- TUK -->
                <div class="form-group">
                    <label for="tuk">TUK*</label>
                    <select class="form-control" id="tuk" name="tuk" required>
                        <option value="">- Pilih -</option>
                        <option value="STMIK Antar Bangsa">STMIK Antar Bangsa</option>
                        <option value="Daqu Center">Daqu Center</option>
                        <!-- <?php foreach ($skema as $row) {
                                    echo '<option value="' . $row['id'] . '">' . $row['tuk'] . '</option>';
                                }
                                ?> -->
                    </select>
                </div>

                <!-- Nama Kampus/Instansi/Sekolah -->
                <div class="form-group">
                    <label for="nama_kampus">Nama Kampus/Instansi/Sekolah</label>
                    <input type="text" class="form-control" id="nama_kampus" name="nama_kampus" placeholder="Nama Kampus">
                </div>

                <h3>A. Data Pribadi **</h3>
                <!-- Nama Lengkap -->
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="" required>
                </div>

                <!-- NIK -->
                <div class="form-group">
                    <label for="nik">Nik (Nomor Induk Kependudukan)</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="" required>
                </div>

                <!-- Tempat Lahir -->
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
                </div>

                <!-- Tanggal Lahir -->
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>

                <!-- Jenis Kelamin -->
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="radio">
                        <label><input type="radio" name="jenis_kelamin" value="Laki-Laki" required>Laki-Laki</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan</label>
                    </div>
                </div>

                <!-- Kebangsaan -->
                <div class="form-group">
                    <label for="kebangsaan">Kebangsaan</label>
                    <input type="text" class="form-control" id="kebangsaan" name="kebangsaan" placeholder="Kebangsaan" required>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="akunenggalabdi@gmail.com" required>
                </div>

                <!-- No Telepon -->
                <div class="form-group">
                    <label for="no_telepon">No Telepon</label>
                    <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="081287015711" required>
                </div>

                <!-- Pendidikan Terakhir -->
                <div class="form-group">
                    <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                    <select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
                        <option value="">- Pilih -</option>
                        <option value="SMA">SMA</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>

                <!-- Alamat Rumah -->
                <div class="form-group">
                    <label for="alamat_rumah">Alamat Rumah</label>
                    <input type="text" class="form-control" id="alamat_rumah" name="alamat_rumah" placeholder="Alamat Rumah" required>
                </div>

                <h3>B. Data Pekerjaan Sekarang</h3>
                <p>Note. Jika Belum Bekerja silahkan isi dengan -</p>

                <!-- Nama Pekerjaan -->
                <div class="form-group">
                    <label for="nama_pekerjaan">Nama Pekerjaan</label>
                    <select class="form-control" id="nama_pekerjaan" name="nama_pekerjaan">
                        <option value="">- Pilih -</option>
                        <option value="">Mahasiswa</option>
                        <option value="">Pegawai Negeri</option>
                        <option value="">Karyawan Swasta</option>
                        <!-- <?php foreach ($skema as $row) {
                                    echo '<option value="' . $row['id'] . '">' . $row['nama_pekerjaan'] . '</option>';
                                } ?> -->
                    </select>
                    </select>
                </div>

                <!-- Nama Perusahaan -->
                <div class="form-group">
                    <label for="nama_perusahaan">Nama Perusahaan</label>
                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan">
                </div>

                <!-- Jabatan -->
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
                </div>

                <!-- Alamat Perusahaan -->
                <div class="form-group">
                    <label for="alamat_perusahaan">Alamat Perusahaan</label>
                    <input type="text" class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" placeholder="Alamat Perusahaan">
                </div>

                <!-- No Telepon atau Email -->
                <div class="form-group">
                    <label for="no_telepon_email">No Telepon atau Email</label>
                    <input type="text" class="form-control" id="no_telepon_email" name="no_telepon_email" placeholder="No Telepon/Email">
                </div>

                <h3>C. Silahkan Upload Bukti dan Dokumen Persyaratan Sertifikasi **</h3>
                <p>Note: File yang bisa di Upload hanya dalam Bentuk Gambar</p>

                <!-- FotoKopi KTP -->
                <div class="form-group">
                    <label for="fotokopi_ktp">FotoKopi KTP</label>
                    <input type="file" class="form-control" id="fotokopi_ktp" name="fotokopi_ktp" required>
                </div>

                <!-- Pas Foto 3x4 Latar Belakang Merah -->
                <div class="form-group">
                    <label for="pas_foto">Pas Foto 3x4 Latar Belakang Merah</label>
                    <input type="file" class="form-control" id="pas_foto" name="pas_foto" required>
                </div>

                <!-- FotoKopi Sertifikat Pelatihan/Praktek kerja Lapangan dibidang Digital Marketing -->
                <div class="form-group">
                    <label for="sertifikat_pelatihan">FotoKopi Sertifikat Pelatihan/Praktek kerja Lapangan dibidang Digital Marketing</label>
                    <input type="file" class="form-control" id="sertifikat_pelatihan" name="sertifikat_pelatihan" required>
                </div>
                <!-- FotoKopi Ijazah -->
                <div class="form-group">
                    <label for="fotokopi_ijazah">FotoKopi Ijazah SMA/SMK Sederajat Atau Fotocopy Ijazah D1-D4/S1-S2-S3</label>
                    <input type="file" class="form-control" id="fotokopi_ijazah" name="fotokopi_ijazah" required>
                </div>

                <!-- Tanggal -->
                <div class="form-group">
                    <label for="tanggal">Tanggal :</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</div>

</section>
</div>