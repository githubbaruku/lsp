<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">
					<!-- <?php echo strtoupper($button) ?> -->
					Silahkan Lakukan Pembayaran Untuk Mengikuti Uji sertifikasi
				</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">

				<table class='table table-bordered'>

					<tr>
						<td width='200'>Nama Skema yang dipilih <?php echo form_error('skema') ?></td>
						<td><input type="text" class="form-control" name="skema" id="skema" placeholder="Skema" value="<?php echo $skema; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Jumlah yang harus dibayarkan <?php echo form_error('jumlah') ?></td>
						<td><input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $jumlah; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Nama Peserta <?php echo form_error('nama') ?></td>
						<td><input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" /></td>
					</tr>

					<tr>
						<td width='200'>Email Peserta <?php echo form_error('email') ?></td>
						<td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" /></td>
					</tr>

					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id" value="<?php echo $id; ?>" />
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#paymentModal">Silahkan lakukan pembayaran untuk mengikuti uji sertifikasi</button>
							<a href="<?php echo site_url('pembayaran') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
							<!-- Payment Information Modal -->
							<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="paymentModalLabel">Informasi Pembayaran</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!-- Konten Informasi Pembayaran -->
											<p>Bank: BCA</p>
											<p>No. Rekening: 123-456-789</p>
											<p>Nama Pemilik Rekening: LSP Darul Qur'an</p>
											<p>Jumlah yang harus dibayar: Rp 1.000.000,-</p>
											<p>Tanggal Jatuh Tempo: 31 Agustus 2024</p>
											<p>Instruksi: Silakan lakukan pembayaran sebelum tanggal jatuh tempo.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
											<button type="button" class="btn btn-primary">Konfirmasi Pembayaran</button>
										</div>
									</div>
								</div>
							</div>

						</td>
					</tr>

				</table>
			</form>
		</div>
	</section>
</div>