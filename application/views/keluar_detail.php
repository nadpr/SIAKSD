<?php $this->load->view('header');?>

<h3 style="text-align : center"><span class="glyphicon glyphicon-list-alt"></span> &nbsp; Detail Barang Keluar</h3>

<a href= "<?php echo site_url('barang_keluar');?>" class="btn btn-info"><span class="glyphicon glyphicon-backward"></span> Kembali</a>
<br/>
<br/>


<form action="<?php echo site_url('barang_keluar/index'); ?>" method="post" >
		<table class="table">
			<tr>
				<th  class="col-md-2">Kode Barang Keluar</th>
				<th  class="col-md-3"><?php echo $query->keluar_id ?></th>
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
				<td>Id Unit</td>
				<td class="col-md-3"><?php echo $query->unit_id; ?></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td class="col-md-3"><?php echo $query->jumlah; ?></td>
			</tr>
			<tr>
				<td>Id Karyawan</td>
				<td class="col-md-3"><?php echo $query->karyawan_id; ?></td>
			</tr>
		</table>
	</form>


