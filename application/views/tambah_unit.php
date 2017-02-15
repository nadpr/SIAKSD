<?php $this->load->view('template/header');?>

<h3 style="text-align : center"><span class="glyphicon glyphicon-edit"></span> &nbsp; Tambah Unit</h3>
</br>

<div class="row">
    <div class="col-lg-6">
		<form action="<?php echo site_url('data_unit/tambah_aksi'); ?>" method="post">

        	<div class="form-group">
                <label>Kode Unit</label>
                <input class="form-control" placeholder="Kode Unit" name="unit_id">
            </div>
            <div class="form-group">
                <label>Nama Unit</label>
                <input class="form-control" placeholder="Nama Unit" name="unit_nm">
            </div>
            <div class="form-group">
                <label>Lokasi</label>
                <input class="form-control" placeholder="Lokasi" name="lokasi">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" placeholder="Alamat" name="alamat">
            </div>
            <div class="form-group">
                <label>No Telepon</label>
                <input class="form-control" placeholder="No Telp" name="no_telp">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" value="submit" name="submit" id="button_reg">Simpan</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
