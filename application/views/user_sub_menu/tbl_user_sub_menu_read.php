
<div class="content-wrapper">
	
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">DETAIL DATA TBL_USER_SUB_MENU</h3>
			</div>
		
		<table class='table table-bordered'>        

	
			<tr>
				<td>Menu Id</td>
				<td><?php echo $menu_id; ?></td>
			</tr>
	
			<tr>
				<td>Title</td>
				<td><?php echo $title; ?></td>
			</tr>
	
			<tr>
				<td>Url</td>
				<td><?php echo $url; ?></td>
			</tr>
	
			<tr>
				<td>Icon</td>
				<td><?php echo $icon; ?></td>
			</tr>
	
			<tr>
				<td>Is Active</td>
				<td><?php echo $is_active; ?></td>
			</tr>
	
			<tr>
				<td></td>
				<td><a href="<?php echo site_url('user_sub_menu') ?>" class="btn btn-default">Kembali</a></td>
			</tr>
	
		</table>
		</div>
	</section>
</div>