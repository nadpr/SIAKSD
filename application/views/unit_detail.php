<?php $this->load->view('template/header');?>

<h3 style="text-align : center"><span class="glyphicon glyphicon-list-alt"></span> &nbsp; Detail Unit</h3>

<a href= "<?php echo site_url('data_unit');?>" class="btn btn-info"><span class="glyphicon glyphicon-backward"></span> Kembali</a>
<br/>
<br/>

<form action="<?php echo site_url('data_unit/index'); ?>" method="post" >
		<table class="table">
			<tr>
				<th  class="col-md-2">Kode Unit</th>
				<th  class="col-md-3"><?php echo $query->unit_id ?></th>
			</tr>
			<tr>
				<td>Nama Unit</td>
				<td class="col-md-3"><?php echo $query->unit_nm; ?></td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td class="col-md-3"><?php echo $query->lokasi; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td class="col-md-3"><?php echo $query->alamat; ?></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td class="col-md-3"><?php echo $query->no_telp; ?></td>
			</tr>
		</table>
	</form>
