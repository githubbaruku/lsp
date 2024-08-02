
<div class="content-wrapper">
	
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">DETAIL DATA TBL_DATA_TUK</h3>
			</div>
		
		<table class='table table-bordered'>        

	
			<tr>
				<td>Kode</td>
				<td><?php echo $kode; ?></td>
			</tr>
	
			<tr>
				<td>Nama</td>
				<td><?php echo $nama; ?></td>
			</tr>
	
			<tr>
				<td>Jenis</td>
				<td><?php echo $jenis; ?></td>
			</tr>
	
			<tr>
				<td>Penanggung Jawab</td>
				<td><?php echo $penanggung_jawab; ?></td>
			</tr>
	
			<tr>
				<td>Alamat</td>
				<td><?php echo $alamat; ?></td>
			</tr>
	
			<tr>
				<td></td>
				<td><a href="<?php echo site_url('data_tuk') ?>" class="btn btn-default">Kembali</a></td>
			</tr>
	
		</table>
		</div>
	</section>
</div>