<?php $this->load->view('template/header');?>

<h3 style="text-align : center"><span class="glyphicon glyphicon-briefcase"></span> &nbsp; Data Unit</h3>
<a href= "<?php echo site_url()?>/data_unit/tambah" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Unit</a>
<br/>
<br/>
<br/>
<br/>

<table class="table table-hover">
	<tr>
		<th class="col-md-2"> KODE UNIT </th>
		<th class="col-md-3"> NAMA UNIT </th>
		<th class="col-md-2"> LOKASI </th>
		<th class="col-md-2"> ALAMAT </th>
		<th class="col-md-2"> NO TELEPON </th>
	</tr>

<?php foreach ($query->result() as $baris ) { ?>
	<tr>
		<td><?php echo $baris->unit_id; ?></td>
		<td><?php echo $baris->unit_nm; ?></td>
		<td><?php echo $baris->lokasi; ?></td>
		<td><?php echo $baris->alamat; ?></td>
		<td><?php echo $baris->no_telp; ?></td>
	</tr>
<?php
}
?>
</table>
