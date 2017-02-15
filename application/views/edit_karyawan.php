<?php $this->load->view('template/header');?>

<h3 style="text-align : center"><span class="glyphicon glyphicon-edit"></span> &nbsp; Edit karyawan</h3>
</br>

<?php foreach($karyawan as $query) { ?>
<form action="<?php echo site_url('c_karyawan/update'); ?>" method="post" >
		<table class="table">
			<tr>
				<th  class="col-md-2">ID Karyawan</th>
				<th  class="col-md-3" ><input class="form-control" id="disabledInput" type="text" name="karyawan_id" value="<?php echo $query->karyawan_id ?>" readonly="readonly"></th>
				<th  class="col-md-2"></th>
			</tr>
			<tr class="form-group has-warning">
				<td>Nama karyawan</td>
				<td class="col-md-3"><input type="text" class="form-control" id="inputWarning" name="karyawan_nm" value="<?php echo $query->karyawan_nm; ?>"></td>
			</tr>
			<tr class="form-group has-warning">
				<td>Alamat</td>
				<td class="col-md-3"><input type="text" class="form-control" id="inputWarning" name="alamat" value="<?php echo $query->alamat; ?>"></td>
			</tr>
			<tr class="form-group has-warning">
				<td>Jabatan</td>
				<td class="col-md-3"><input type="text" class="form-control" id="inputWarning" name="jabatan" value="<?php echo $query->jabatan; ?>"></td>
			</tr>
			<tr class="form-group has-warning">
				<td>No Telepon</td>
				<td class="col-md-3"><input type="text" class="form-control" id="inputWarning" name="no_telp" value="<?php echo $query->no_telp; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td class="col-lg-6"><button type="submit" class="btn btn-warning" name="simpan" > Simpan </button>
			</tr>
		</table>
	</form>
<?php } ?>