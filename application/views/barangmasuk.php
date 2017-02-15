<?php $this->load->view('template/header'); 
        $this->load->view('template/scrip-add-in'); 
?>

<div style="margin-left:20px;">
<h3 style="text-align:center"><span class="glyphicon glyphicon-briefcase"></span> Entri Barang Masuk</h3>
        <form action="<?php echo site_url('c_barangmasuk/tambah'); ?>" method="post">
            <div class="row">
                <div class="col-lg-2"><label>Tanggal</label></div>
                <div class="col-lg-6">
                    <h5 class="form-control-static" name="tanggal"><?php echo date("Y-m-d"); ?></h5>
                </div>
                <div class="col-lg-6"></div>
            </div>
            <div class="row">
                <div class="col-lg-2"><label>Supplier</label></div>
                <div class="col-lg-6"><input class="form-control" placeholder="Nama Supplier" name="supplier_nm"></div>
                <div class="col-lg-2"><input class="form-control" placeholder="ID Supplier" name="supplier_id"></div>
            </div>
            <!-- 
            </select> -->
            <div  id="box">
                <datalist id="barang_k">
                    <?php foreach ($query->result() as $row){ ?>
                        <option value="<?php echo $row->barang_id; ?>"><?php echo $row->barang_id; ?></option>
                    <?php } ?>
                </datalist>
                
                <div class="row">

                    <label style="width:17.5%; display:inline-block; margin-left:17px;">Barang</label>
                    <input name="barang_id1" type="text" id="name" list="barang_k" class="form-control" style="width:15%; display:inline-block; margin-left:-15px;" placeholder="Barang 1">
                    <input name="jumlah1" type="text" id="name" class="form-control" style="width:14%; display:inline-block; margin-left:15px" placeholder="Jumlah 1">
                    <input name="harga_beli1" type="text" id="name" class="form-control" style="width:15%; display:inline-block; margin-left:15px;" placeholder="Harga Beli 1">
                    <input name="harga_jual1" type="text" id="name" class="form-control" style="width:15%; display:inline-block; margin-left:15px" placeholder="Harga Jual 1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/52/Fairytale_button_add.png" title="Tambah" width="32" height="32" border="0" align="top" class="add" id="add" />    
                </div>
            </div>
           
            <div class="row">
                <button type="submit" class="btn btn-primary" value="submit" name="submit" id="button_reg">Simpan</button>
            </div>
        </form>
</div>
<script>
            $(document).ready(function () {
                $(".select2").select2({
                    placeholder: "Please Select"
                });
            });
        </script>
 </body>
</html>