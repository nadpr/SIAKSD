<?php $this->load->view('template/header');?>

<h3 style="text-align : center"><span class="glyphicon glyphicon-edit"></span> &nbsp; Edit Unit</h3>
</br>

<?php foreach($unit as $query) { ?>
<form action="<?php echo site_url('data_unit/update'); ?>" method="post" >
		<table class="table">
			<tr>
				<th  class="col-md-2">Kode Unit</th>
				<th  class="col-md-3" ><input class="form-control" id="disabledInput" type="text" name="unit_id" value="<?php echo $query->unit_id ?>" readonly="readonly"></th>
				<th  class="col-md-2"></th>
			</tr>
			<tr class="form-group has-warning">
				<td>Nama Unit</td>
				<td class="col-md-3"><input type="text" class="form-control" id="inputWarning" name="unit_nm" value="<?php echo $query->unit_nm; ?>"></td>
			</tr>
			<tr class="form-group has-warning">
				<td>Lokasi</td>
				<td class="col-md-3"><input type="text" class="form-control" id="inputWarning" name="lokasi" value="<?php echo $query->lokasi; ?>"></td>
			</tr>
			<tr class="form-group has-warning">
				<td>Alamat</td>
				<td class="col-md-3"><input type="text" class="form-control" id="inputWarning" name="alamat" value="<?php echo $query->alamat; ?>"></td>
			</tr>
			<tr class="form-group has-warning">
				<td>No Telponl</td>
				<td class="col-md-3"><input type="text" class="form-control" id="inputWarning" name="no_telp" value="<?php echo $query->no_telp; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td class="col-lg-6"><button type="submit" class="btn btn-warning" name="simpan" > Simpan </button>
			</tr>
		</table>
	</form>
<?php } ?>
