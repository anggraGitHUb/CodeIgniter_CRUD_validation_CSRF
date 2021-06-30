<div class="card">
	<div class="card-header">Tambah Pembelian</div>
    <div class="card-body">
    	<form action="<?php echo site_url('Penjualan/AddDataPembelian'); ?>" method="post">
			<table class="table table-bordered">
				<tr>
					<td>Struk</td>
					<td><input type="text" name="struk" class="form-control"></td>
				</tr>
				<tr>
					<td>Barang</td>
					<td>
						<select class="form-control" name="kd_barang">
				            <?php 
				            foreach($DataBarang as $row)
				            { 
				              echo '<option value="'.$row->kd_barang.'">'.$row->nama.'</option>';
				            }
				            ?>
			            </select>
			        </td>
				</tr>
				<tr>
					<td>Jumlah beli</td>
					<td><input type="text" name="jml_beli" class="form-control"></td>
				</tr>
				<tr>
					<td>tgl beli</td>
					<td><input type="date" name="tgl_beli" class="form-control"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="simpan" value="Simpan" class="btn btn-primary"></td>
				</tr>
			</table>
		</form>
    </div>
</div>
