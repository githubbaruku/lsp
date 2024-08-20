<!-- <div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA TBL_FORMAPL01</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">

				<table class='table table-bordered'>

					<tr>
						<td width='200'>Skema <?php echo form_error('skema') ?></td>
						<td><input type="text" class="form-control" name="skema" id="skema" placeholder="Skema" value="<?php echo $skema; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Tuk <?php echo form_error('tuk') ?></td>
						<td><input type="text" class="form-control" name="tuk" id="tuk" placeholder="Tuk" value="<?php echo $tuk; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Nama Kampus <?php echo form_error('nama_kampus') ?></td>
						<td><input type="text" class="form-control" name="nama_kampus" id="nama_kampus" placeholder="Nama Kampus" value="<?php echo $nama_kampus; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Nama Lengkap <?php echo form_error('nama_lengkap') ?></td>
						<td><input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $nama_lengkap; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Nik <?php echo form_error('nik') ?></td>
						<td><input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Tempat Lahir <?php echo form_error('tempat_lahir') ?></td>
						<td><input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Tanggal Lahir <?php echo form_error('tanggal_lahir') ?></td>
						<td><input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></td>
						<td><input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Kebangsaan <?php echo form_error('kebangsaan') ?></td>
						<td><input type="text" class="form-control" name="kebangsaan" id="kebangsaan" placeholder="Kebangsaan" value="<?php echo $kebangsaan; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Email <?php echo form_error('email') ?></td>
						<td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>No Telepon <?php echo form_error('no_telepon') ?></td>
						<td><input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="No Telepon" value="<?php echo $no_telepon; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Pendidikan Terakhir <?php echo form_error('pendidikan_terakhir') ?></td>
						<td><input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir" value="<?php echo $pendidikan_terakhir; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Alamat Rumah <?php echo form_error('alamat_rumah') ?></td>
						<td> <textarea class="form-control" rows="3" name="alamat_rumah" id="alamat_rumah" placeholder="Alamat Rumah"><?php echo $alamat_rumah; ?></textarea></td>
					</tr>

					<tr>
						<td width='200'>Nama Pekerjaan <?php echo form_error('nama_pekerjaan') ?></td>
						<td><input type="text" class="form-control" name="nama_pekerjaan" id="nama_pekerjaan" placeholder="Nama Pekerjaan" value="<?php echo $nama_pekerjaan; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Nama Perusahaan <?php echo form_error('nama_perusahaan') ?></td>
						<td><input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" value="<?php echo $nama_perusahaan; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Jabatan <?php echo form_error('jabatan') ?></td>
						<td><input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Alamat Perusahaan <?php echo form_error('alamat_perusahaan') ?></td>
						<td> <textarea class="form-control" rows="3" name="alamat_perusahaan" id="alamat_perusahaan" placeholder="Alamat Perusahaan"><?php echo $alamat_perusahaan; ?></textarea></td>
					</tr>

					<tr>
						<td width='200'>No Telepon Email <?php echo form_error('no_telepon_email') ?></td>
						<td><input type="text" class="form-control" name="no_telepon_email" id="no_telepon_email" placeholder="No Telepon Email" value="<?php echo $no_telepon_email; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Fotokopi Ktp <?php echo form_error('fotokopi_ktp') ?></td>
						<td><input type="text" class="form-control" name="fotokopi_ktp" id="fotokopi_ktp" placeholder="Fotokopi Ktp" value="<?php echo $fotokopi_ktp; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Pas Foto <?php echo form_error('pas_foto') ?></td>
						<td><input type="text" class="form-control" name="pas_foto" id="pas_foto" placeholder="Pas Foto" value="<?php echo $pas_foto; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Sertifikat Pelatihan <?php echo form_error('sertifikat_pelatihan') ?></td>
						<td><input type="text" class="form-control" name="sertifikat_pelatihan" id="sertifikat_pelatihan" placeholder="Sertifikat Pelatihan" value="<?php echo $sertifikat_pelatihan; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Fotokopi Ijazah <?php echo form_error('fotokopi_ijazah') ?></td>
						<td><input type="text" class="form-control" name="fotokopi_ijazah" id="fotokopi_ijazah" placeholder="Fotokopi Ijazah" value="<?php echo $fotokopi_ijazah; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Tanggal <?php echo form_error('tanggal') ?></td>
						<td><input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" /></td>
					</tr>

					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id" value="<?php echo $id; ?>" />
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button>
							<a href="<?php echo site_url('formapl01') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>

				</table>
			</form>
		</div>
	</section>
</div> -->

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

			<?php if ($this->session->flashdata('pesan')): ?>
				<div class="alert alert-success">
					<?php echo $this->session->flashdata('pesan'); ?>
				</div>
			<?php endif; ?>


			<h2>
				FR-APL-01. Formulir Permohonan Sertifikasi Kompetensi
			</h2>
			<h4>Bagian 1: Rincian Data Pemohon Sertifikasi
			</h4>

			<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
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