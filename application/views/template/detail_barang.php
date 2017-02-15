<?php $this->load->view('header');?>

<h3 style="text-align : center"><span class="glyphicon glyphicon-list-alt"></span> &nbsp; Detail Barang</h3>

<a href= "<?php echo site_url('data_barang');?>" class="btn btn-info"><span class="glyphicon glyphicon-backward"></span> Kembali</a>
<br/>
<br/>

<form action="<?php echo site_url('data_barang/index'); ?>" method="post" >
		<table class="table">
			<tr>
				<th  class="col-md-2">Kode Barang</th>
				<th  class="col-md-3"><?php echo $query->barang_id ?></th>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td class="col-md-3"><?php echo $query->barang_nm; ?></td>
			</tr>
			<tr>
				<td>Kelompok Barang</td>
				<td class="col-md-3"><?php echo $query->department_id; ?></td>
			</tr>
			<tr>
				<td>Harga Beli</td>
				<td class="col-md-3"><?php echo $query->harga_beli; ?></td>
			</tr>
			<tr>
				<td>Harga Jual</td>
				<td class="col-md-3"><?php echo $query->harga_jual; ?></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td class="col-md-3"><?php echo $query->stok; ?></td>
			</tr>
			<tr>
				<td>Id Suplier</td>
				<td class="col-md-3"><?php echo $query->supplier_id; ?></td>
			</tr>
		</table>
	</form>
