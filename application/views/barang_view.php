<?php $this->load->view('template/header');?>

<h3 style="text-align : center"><span class="glyphicon glyphicon-briefcase"></span> &nbsp; Data Barang</h3>

<br/>
<br/>
<br/>
<br/>

<table class="table table-hover">
	<tr>
		<th class="col-md-1"> KODE BARANG </th>
		<th class="col-md-3"> NAMA BARANG </th>
		<th class="col-md-1"> KELOMPOK BARANG </th>
		<th class="col-md-1"> HARGA BELI </th>
		<th class="col-md-1"> HARGA JUAL </th>
		<th class="col-md-1"> STOK </th>
		<th class="col-md-1"> ID SUPLLIER </th>
		<th class="col-md-3">Opsi</th>
	</tr>

<?php foreach ($query->result() as $baris ) { ?>
	<tr>
		<td><?php echo $baris->barang_id; ?></td>
		<td><?php echo $baris->barang_nm; ?></td>
		<td><?php echo $baris->department_id; ?></td>
		<td><?php echo $baris->harga_beli; ?></td>
		<td><?php echo $baris->harga_jual; ?></td>
		<td><?php echo $baris->stok; ?></td>
		<td><?php echo $baris->supplier_id; ?></td>
		<td>
			<?php $id = $baris->barang_id; ?>
				<a href= "data_barang/detail/<?php echo $baris->barang_id; ?>" class="btn btn-info">Detail  </a>
				<a href= "data_barang/edit/<?php echo $baris->barang_id; ?>" class="btn btn-warning">Edit  </a>
				<a href= "data_barang/hapus/<?php echo $baris->barang_id; ?>" class="btn btn-danger">  Delete </a>
		</td>
	</tr>
<?php
}
?>
</table>

<!-- <?php
$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from barang");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

<ul class="pagination">
			<?php
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x; ?></a></li>
				<?php
			}
			?>
</ul> -->
