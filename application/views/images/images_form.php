<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA IMAGES</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Image Name <?php echo form_error('image_name') ?></td><td><input type="text" class="form-control" name="image_name" id="image_name" placeholder="Image Name" value="<?php echo $image_name; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>Image Path <?php echo form_error('image_path') ?></td><td><input type="text" class="form-control" name="image_path" id="image_path" placeholder="Image Path" value="<?php echo $image_path; ?>" /></td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id" value="<?php echo $id; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('images') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>