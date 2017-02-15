<?php $this->load->view('header');?>

<h3 style="text-align : center"><span class="glyphicon glyphicon-list-alt"></span> &nbsp; Detail Barang Masuk</h3>

<a href= "<?php echo site_url('barang_masuk');?>" class="btn btn-info"><span class="glyphicon glyphicon-backward"></span> Kembali</a>
<br/>
<br/>


<form action="<?php echo site_url('barang_masuk/index'); ?>" method="post" >
		<table class="table">
			<tr>
				<th  class="col-md-2">Kode Barang Masuk</th>
				<th  class="col-md-3"><?php echo $query->masuk_id ?></th>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td class="col-md-3"><?php echo $query->tanggal; ?></td>
			</tr>
			<tr>
				<td>Id Barang</td>
				<td class="col-md-3"><?php echo $query->barang_id; ?></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td class="col-md-3"><?php echo $query->barang_nm; ?></td>
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
				<td>Jumlah</td>
				<td class="col-md-3"><?php echo $query->jumlah; ?></td>
			</tr>
			<tr>
				<td>Id Supplier/td>
				<td class="col-md-3"><?php echo $query->supplier_id; ?></td>
			</tr>
		</table>
	</form>


