<?php $this->load->view('template/header');?>

<h3 style="text-align : center"><span class="glyphicon glyphicon-edit"></span> &nbsp; Edit supplier</h3>
</br>

<?php foreach($supplier as $query) { ?>
<form action="<?php echo site_url('c_supplier/update'); ?>" method="post" >
		<table class="table">
			<tr>
				<th  class="col-md-2">ID supplier</th>
				<th  class="col-md-3" ><input class="form-control" id="disabledInput" type="text" name="supplier_id" value="<?php echo $query->supplier_id ?>" readonly="readonly"></th>
				<th  class="col-md-2"></th>
			</tr>
			<tr class="form-group has-warning">
				<td>Nama supplier</td>
				<td class="col-md-3"><input type="text" class="form-control" id="inputWarning" name="supplier_nm" value="<?php echo $query->supplier_nm; ?>"></td>
			</tr>
			<tr class="form-group has-warning">
				<td>Alamat</td>
				<td class="col-md-3"><input type="text" class="form-control" id="inputWarning" name="alamat" value="<?php echo $query->alamat; ?>"></td>
			</tr>
			<tr class="form-group has-warning">
				<td>Department</td>
				<td class="col-md-3"><input type="text" class="form-control" id="inputWarning" name="department_id" value="<?php echo $query->department_id; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td class="col-lg-6"><button type="submit" class="btn btn-warning" name="simpan" > Simpan </button>
			</tr>
		</table>
	</form>
<?php } ?>