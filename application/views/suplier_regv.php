<?php $this->load->view('template/header'); ?>
<!--form-->
       <form action="suplier_reg/sup" method="POST">
        <div class="row text-center">
            <h2>Tambah Supplier</h2>
        </div>
        <div id="form_pad">
            <label for="firstname" class="col-md-2">
                ID Supplier:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="id" placeholder="Masukkan ID Suplier">
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div id="form_pad">
            <label for="lastname" class="col-md-2">
                Nama Supplier:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Suplier">
            </div>
             <div class="col-md-1">
            </div>
        </div>
        <div id="form_pad">
            <label for="emailaddress" class="col-md-2">
                Alamat:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Departemen">
            </div>
             <div class="col-md-1">
            </div>
        </div>
        <div id="form_pad">
            <label for="password" class="col-md-2">
                Departemen:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="departemen" placeholder="Masukkan Nama Departemen">
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
</div>
  <?php $this->load->view('template/footer'); ?>
