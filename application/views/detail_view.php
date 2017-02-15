<?php $this->load->view('template/header');?>

	<table class="table">
		<tr>
			<td>Nama Barang</td>
			<td><?php echo $d['nama_barang'] ?></td>
		</tr>
		<tr>
			<td>Harga Beli</td>
			<td><?php echo $d['harga_beli'] ?></td>
		</tr>
		<tr>
			<td>Harga Jual</td>
			<td>Rp.<?php echo number_format($d['harga_jual']); ?>,-</td>
		</tr>
		<tr>
			<td>ID Suplier</td>
			<td><?php echo $d['id_suplier'] ?></td>
		</tr>
		<tr>
			<td>Jumlah Stok</td>
			<td><?php echo $d['stok'] ?></td>
		</tr>
	</table>
