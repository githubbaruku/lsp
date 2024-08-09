<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA TBL_KOMPETENSI_TAHMUD</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Kode Kompetensi <?php echo form_error('kode_kompetensi') ?></td><td><input type="text" class="form-control" name="kode_kompetensi" id="kode_kompetensi" placeholder="Kode Kompetensi" value="<?php echo $kode_kompetensi; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>Judul Kompetensi <?php echo form_error('judul_kompetensi') ?></td><td><input type="text" class="form-control" name="judul_kompetensi" id="judul_kompetensi" placeholder="Judul Kompetensi" value="<?php echo $judul_kompetensi; ?>" /></td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id" value="<?php echo $id; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('kompetensi_tahmud') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>