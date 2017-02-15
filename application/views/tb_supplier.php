<?php $this->load->view('template/header');?>
<h3 style="text-align:center"><span class="glyphicon glyphicon-briefcase">&nbsp;</span>Daftar Data Supplier</h3>
<a href="#" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Supplier</a>
<br/>
<br/>
<br/>
<br/>

<table class="table table-hover">
	<tr>
		<th class="col-md-1"> ID SUPPLIER </th>
		<th class="col-md-3"> NAMA SUPPLIER </th>
		<th class="col-md-3"> ALAMAT</th>
		<th class="col-md-1"> DEPARTMEN </th>
		<th class="col-md-3">Opsi</th>
	</tr>

<?php foreach ($query->result() as $baris ) { ?> 
	<tr>
		<td><?php echo $baris->supplier_id; ?></td>
		<td><?php echo $baris->supplier_nm; ?></td>
		<td><?php echo $baris->alamat; ?></td>
		<td><?php echo $baris->department_id; ?></td>

		<td>
			<?php $id = $baris->supplier_id; ?>
				<a href= "c_supplier/detail/<?php echo $baris->supplier_id; ?>" class="btn btn-info">Detail  </a>
				<a href= "c_supplier/edit/<?php echo $baris->supplier_id; ?>" class="btn btn-warning">Edit  </a>
				<a href= "c_supplier/hapus/<?php echo $baris->supplier_id; ?>" class="btn btn-danger">  Delete </a>
		</td>
	</tr>
<?php 
} 
?>
</table>



</body>
</html>