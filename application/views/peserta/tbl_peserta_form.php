<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA TBL_PESERTA</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">

				<table class='table table-bordered'>

					<tr>
						<td width='200'>Nama <?php echo form_error('nama_lengkap') ?></td>
						<td><input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama" value="<?php echo $nama_lengkap; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Nik <?php echo form_error('nik') ?></td>
						<td><input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Nomor Hp <?php echo form_error('no_telepon') ?></td>
						<td><input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="Nomor Hp" value="<?php echo $no_telepon; ?>" /></td>
					</tr>

					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id" value="<?php echo $id; ?>" />
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button>
							<a href="<?php echo site_url('peserta') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>

				</table>
			</form>
		</div>
	</section>
</div>