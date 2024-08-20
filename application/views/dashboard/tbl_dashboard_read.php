
<div class="content-wrapper">
	
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">DETAIL DATA TBL_DASHBOARD</h3>
			</div>
		
		<table class='table table-bordered'>        

	
			<tr>
				<td>Title</td>
				<td><?php echo $title; ?></td>
			</tr>
	
			<tr>
				<td>Description</td>
				<td><?php echo $description; ?></td>
			</tr>
	
			<tr>
				<td>Image</td>
				<td><?php echo $image; ?></td>
			</tr>
	
			<tr>
				<td></td>
				<td><a href="<?php echo site_url('dashboard') ?>" class="btn btn-default">Kembali</a></td>
			</tr>
	
		</table>
		</div>
	</section>
</div>