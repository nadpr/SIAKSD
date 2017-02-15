<?php $this->load->view('template/header');?>
<h3 style="text-align:center"><span class="glyphicon glyphicon-briefcase">&nbsp;</span>Daftar Data Karyawan</h3>
<a href="#" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Karyawan</a>
<br/>
<br/>
<br/>
<br/>

<table class="table table-hover">
	<tr>
		<th class="col-md-1"> ID KARYAWAN </th>
		<th class="col-md-3"> NAMA KARYAWAN </th>
		<th class="col-md-3"> ALAMAT</th>
		<th class="col-md-1"> BAGIAN </th>
		<th class="col-md-2"> NOMOR TELEPON </th>
		<th class="col-md-3">Opsi</th>
	</tr>

<?php foreach ($query->result() as $baris ) { ?> 
	<tr>
		<td><?php echo $baris->karyawan_id; ?></td>
		<td><?php echo $baris->karyawan_nm; ?></td>
		<td><?php echo $baris->alamat; ?></td>
		<td><?php echo $baris->jabatan; ?></td>
		<td><?php echo $baris->no_telp; ?></td>
		<td>
			<?php $id = $baris->karyawan_id; ?>
				<a href= "c_karyawan/edit/<?php echo $baris->karyawan_id; ?>" class="btn btn-warning">Edit  </a>
				<a href= "c_karyawan/hapus/<?php echo $baris->karyawan_id; ?>" class="btn btn-danger">  Delete </a>
		</td>
	</tr>
<?php 
} 
?>
</table>



</body>
</html>