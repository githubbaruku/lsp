
<div class="content-wrapper">
	
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">DETAIL DATA TBL_JADWAL</h3>
			</div>
		
		<table class='table table-bordered'>        

	
			<tr>
				<td>Tanggal</td>
				<td><?php echo $tanggal; ?></td>
			</tr>
	
			<tr>
				<td>Skema</td>
				<td><?php echo $skema; ?></td>
			</tr>
	
			<tr>
				<td>Tuk</td>
				<td><?php echo $tuk; ?></td>
			</tr>
	
			<tr>
				<td></td>
				<td><a href="<?php echo site_url('jadwal') ?>" class="btn btn-default">Kembali</a></td>
			</tr>
	
		</table>
		</div>
	</section>
</div>