<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA TBL_SKEMA</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">

				<table class='table table-bordered'>

					<tr>
						<td width='200'>Nama Skema <?php echo form_error('nama_skema') ?></td>
						<td><input type="text" class="form-control" name="nama_skema" id="nama_skema" placeholder="Nama Skema" value="<?php echo $nama_skema; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Gambar Skema <?php echo form_error('gambar_skema') ?></td>
						<td><input type="text" class="form-control" name="gambar_skema" id="gambar_skema" placeholder="Gambar Skema" value="<?php echo $gambar_skema; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Kategori Skema <?php echo form_error('kategori_skema') ?></td>
						<td><input type="text" class="form-control" name="kategori_skema" id="kategori_skema" placeholder="Kategori Skema" value="<?php echo $kategori_skema; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Jenis Skema <?php echo form_error('jenis_skema') ?></td>
						<td><input type="text" class="form-control" name="jenis_skema" id="jenis_skema" placeholder="Jenis Skema" value="<?php echo $jenis_skema; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Deskripsi <?php echo form_error('deskripsi') ?></td>
						<td> <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea></td>
					</tr>

					<tr>
						<td width='200'>Kode Skema <?php echo form_error('kode_skema') ?></td>
						<td><input type="text" class="form-control" name="kode_skema" id="kode_skema" placeholder="Kode Skema" value="<?php echo $kode_skema; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Unit Kompetensi <?php echo form_error('unit_kompetensi') ?></td>
						<td><input type="text" class="form-control" name="unit_kompetensi" id="unit_kompetensi" placeholder="Unit Kompetensi" value="<?php echo $unit_kompetensi; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Harga Skema <?php echo form_error('harga_skema') ?></td>
						<td><input type="text" class="form-control" name="harga_skema" id="harga_skema" placeholder="Harga Skema" value="<?php echo $harga_skema; ?>" /></td>
					</tr>

					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_skema" value="<?php echo $id_skema; ?>" />
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button>
							<a href="<?php echo site_url('skema') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>

				</table>
			</form>
		</div>
	</section>
</div>