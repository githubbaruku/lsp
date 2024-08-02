
<div class="content-wrapper">
	
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">DETAIL DATA TBL_PESERTA</h3>
			</div>
		
		<table class='table table-bordered'>        

	
			<tr>
				<td>Nama</td>
				<td><?php echo $nama; ?></td>
			</tr>
	
			<tr>
				<td>Nik</td>
				<td><?php echo $nik; ?></td>
			</tr>
	
			<tr>
				<td>Nomor Hp</td>
				<td><?php echo $nomor_hp; ?></td>
			</tr>
	
			<tr>
				<td></td>
				<td><a href="<?php echo site_url('peserta') ?>" class="btn btn-default">Kembali</a></td>
			</tr>
	
		</table>
		</div>
	</section>
</div>