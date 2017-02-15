<?php $this->load->view('template/header'); ?>

<!--form-->
       <form action="karyawan_reg/kar" method="POST">
        <div class="row text-center">
            <h2>Tambah Karyawan</h2>
        </div>
        <div id="form_pad">
            <label for="firstname" class="col-md-2">
                ID Karyawan:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="id" placeholder="Masukkan ID Karyawan">
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div id="form_pad">
            <label for="lastname" class="col-md-2">
                Nama Karyawan:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
            </div>
             <div class="col-md-1">
            </div>
        </div>
        <div id="form_pad">
            <label for="lastname" class="col-md-2">
                Username:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="unama" placeholder="Masukkan Username">
            </div>
             <div class="col-md-1">
            </div>
        </div>
        <div id="form_pad">
            <label for="password" class="col-md-2">
                Password:
            </label>
            <div class="col-md-9">
                <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
            </div>
             <div class="col-md-1">
            </div>
        </div>
        <div id="form_pad">
            <label for="jabatan" class="col-md-2">
                Jabatan:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan">
            </div>
        </div>
        <div id="form_pad">
            <label for="bagian" class="col-md-2">
                Bagian:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="bagian" placeholder="Masukkan Bagian">
            </div>
        </div>
        <div id="form_pad">
            <label for="notelp" class="col-md-2">
                No Telpon:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="no" placeholder="Masukkan Nomor Telpon">
            </div>
        </div>
        <div id="form_pad">
            <label for="uploadimage" class="col-md-2">
                Upload Image:
            </label>
            <div class="col-md-10">
                <input type="file" name="foto" id="uploadimage">
                <p class="help-block">
                    Allowed formats: jpeg, jpg, gif, png
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
                <button type="submit" class="btn btn-primary" value="submit" name="submit" id="button_reg">
                    Register
                </button>
            </div>
        </div>
    </form>

<?php $this->load->view('template/footer'); ?>
