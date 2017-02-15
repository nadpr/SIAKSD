<?php $this->load->view('template/header');?>

<h3 style="text-align : center"><span class="glyphicon glyphicon-list-alt"></span> &nbsp; Detail Barang</h3>

<a href= "<?php echo site_url('c_supplier');?>" class="btn btn-info"><span class="glyphicon glyphicon-backward"></span> Kembali</a>
<br/>
<br/>

<form action="<?php echo site_url('c_supplier/index'); ?>" method="post" >
		<table class="table">
			<tr>
				<th  class="col-md-2">ID Supplier</th>
				<th  class="col-md-3"><?php echo $query->supplier_id ?></th>
			</tr>
			<tr>
				<td>Nama Supplier</td>
				<td class="col-md-3"><?php echo $query->supplier_nm; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td class="col-md-3"><?php echo $query->alamat; ?></td>
			</tr>
			<tr>
				<td>ID department</td>
				<td class="col-md-3"><?php echo $query->department_id; ?></td>
			</tr>
		</table>
	</form>