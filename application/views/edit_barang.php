<?php $this->load->view('template/header');?>

<h3 style="text-align : center"><span class="glyphicon glyphicon-edit"></span> &nbsp; Edit Barang</h3>
</br>

<?php foreach($barang as $query) { ?>
<form action="<?php echo site_url('data_barang/update'); ?>" method="post" >
		<table class="table">
			<tr>
				<th  class="col-md-2">Kode Barang</th>
				<th  class="col-md-3" ><input class="form-control" id="disabledInput" type="text" name="barang_id" value="<?php echo $query->barang_id ?>" readonly="readonly"></th>
				<th  class="col-md-2"></th>
			</tr>
			<tr class="form-group has-warning">
				<td>Nama Barang</td>
				<td class="col-md-3"><input type="text" class="form-control" id="inputWarning" name="barang_nm" value="<?php echo $query->barang_nm; ?>"></td>
			</tr>
			<tr class="form-group has-warning">
				<td>Harga Beli</td>
				<td class="col-md-3"><input type="text" class="form-control" id="inputWarning" name="harga_beli" value="<?php echo $query->harga_beli; ?>"></td>
			</tr>
			<tr class="form-group has-warning">
				<td>Harga Jual</td>
				<td class="col-md-3"><input type="text" class="form-control" id="inputWarning" name="harga_jual" value="<?php echo $query->harga_jual; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td class="col-lg-6"><button type="submit" class="btn btn-warning" name="simpan" > Simpan </button>
			</tr>
		</table>
	</form>
<?php } ?>
