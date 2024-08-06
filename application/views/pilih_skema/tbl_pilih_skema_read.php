<div class="content-wrapper">

	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">Silahkan Klik Button Pilih Skema di bawah ini Untuk Mengikuti Uji sertifikasi
				</h3>
			</div>

			<table class='table table-bordered'>


				<tr>
					<td>Skema</td>
					<td><?php echo $skema; ?></td>
				</tr>

				<tr>
					<td>Biaya</td>
					<td><?php echo $biaya; ?></td>
				</tr>

				<tr>
					<td><a href="<?php echo site_url('pilih_skema') ?>" class="btn btn-default">Kembali</a></td>
					<td><a href="<?php echo site_url('form_apl01') ?>" class="btn btn-success">Pilih skema dan isi form APL 01</a></td>
				</tr>

			</table>
		</div>
	</section>
</div>