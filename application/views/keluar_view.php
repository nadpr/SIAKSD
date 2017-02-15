<?php $this->load->view('template/header');?>

<h3 style="text-align : center"><span class="glyphicon glyphicon-briefcase"></span> &nbsp; Barang Keluar</h3>
<br/>
<br/>
<br/>
<br/>

<table class="table table-hover">
	<tr>
		<th class="col-md-2"> KODE BARANG KELUAR </th>
		<th class="col-md-2"> TANGGAL</th>
		<th class="col-md-2"> ID BARANG </th>
		<th class="col-md-2"> NAMA BARANG </th>
		<th class="col-md-1"> ID UNIT </th>
		<th class="col-md-1"> JUMLAH </th>
		<th class="col-md-2"> ID KARYAWAN </th>
		<th class="col-md-2"> OPSI </th>
	</tr>

<?php foreach ($query->result() as $baris ) { ?>
	<tr>
		<td><?php echo $baris->keluar_id; ?></td>
		<td><?php echo $baris->tanggal; ?></td>
		<td><?php echo $baris->barang_id; ?></td>
		<td><?php echo $baris->barang_nm; ?></td>
		<td><?php echo $baris->unit_id; ?></td>
		<td><?php echo $baris->jumlah; ?></td>
		<td><?php echo $baris->karyawan_id; ?></td>
		<td>
			<?php $id = $baris->keluar_id; ?>
				<a href= "barang_keluar/detail/<?php echo $baris->keluar_id; ?>" class="btn btn-info">Detail  </a>
		</td>
	</tr>
<?php
}
?>
</table>
