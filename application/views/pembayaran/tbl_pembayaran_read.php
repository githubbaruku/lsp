
<div class="content-wrapper">
	
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">DETAIL DATA TBL_PEMBAYARAN</h3>
			</div>
		
		<table class='table table-bordered'>        

	
			<tr>
				<td>Skema</td>
				<td><?php echo $skema; ?></td>
			</tr>
	
			<tr>
				<td>Jumlah</td>
				<td><?php echo $jumlah; ?></td>
			</tr>
	
			<tr>
				<td>Nama</td>
				<td><?php echo $nama; ?></td>
			</tr>
	
			<tr>
				<td>Email</td>
				<td><?php echo $email; ?></td>
			</tr>
	
			<tr>
				<td></td>
				<td><a href="<?php echo site_url('pembayaran') ?>" class="btn btn-default">Kembali</a></td>
			</tr>
	
		</table>
		</div>
	</section>
</div>