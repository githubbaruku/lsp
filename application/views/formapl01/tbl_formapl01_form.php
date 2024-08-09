<div class="content-wrapper">
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
</div>