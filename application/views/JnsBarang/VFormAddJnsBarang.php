<div class="card">
	<div class="card-header">Tambah JnsBarang</div>
    <div class="card-body">
		<font color="red"><?php echo validation_errors(); ?></font>
    	<form action="<?php echo site_url('Penjualan/AddDataJnsBarang'); ?>" method="post">
		
		<!-- Token CSRF -->
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		<!-- Token CSRF -->

			<table class="table table-bordered">
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" class="form-control" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="simpan" value="Simpan" class="btn btn-primary"></td>
				</tr>
			</table>
		</form>
    </div>
</div>
