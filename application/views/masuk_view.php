<?php $this->load->view('template/header');?>

<h3 style="text-align : center"><span class="glyphicon glyphicon-briefcase"></span> &nbsp; Barang Masuk</h3>
<br/>
<br/>
<br/>
<br/>

<table class="table table-hover">
	<tr>
		<th class="col-md-2"> KODE BARANG MASUK</th>
		<th class="col-md-2"> TANGGAL</th>
		<th class="col-md-2"> ID BARANG </th>
		<th class="col-md-2"> NAMA BARANG </th>
		<th class="col-md-1"> HARGA BELI </th>
		<th class="col-md-1"> HARGA JUAL </th>
		<th class="col-md-2"> JUMLAH </th>
		<th class="col-md-2"> ID SUPPLIER </th>
	</tr>

<?php foreach ($query->result() as $baris ) { ?>
	<tr>
		<td><?php echo $baris->masuk_id; ?></td>
		<td><?php echo $baris->tanggal; ?></td>
		<td><?php echo $baris->barang_id; ?></td>
		<td><?php echo $baris->barang_nm; ?></td>
		<td><?php echo $baris->harga_beli; ?></td>
		<td><?php echo $baris->harga_jual; ?></td>
		<td><?php echo $baris->jumlah; ?></td>
		<td><?php echo $baris->supplier_id; ?></td>
		<td>
			<?php $id = $baris->masuk_id; ?>
				<a href= "barang_masuk/detail/<?php echo $baris->masuk_id; ?>" class="btn btn-info">Detail  </a>
		</td>
	</tr>
<?php
}
?>
</table>
