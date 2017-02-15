<?php $this->load->view('template/head'); ?>
<body style="background-color : black">
<div class="container"> 
            <form action="<?php echo site_url('c_login/aksi_login'); ?>" method="post">
                <div class="col-md-4 col-md-offset-4 kotak" style="background-color:#428bca ; border: 2px solid black; box-shadow: 0 3px 9px rgba(0, 0, 0, .5);">
                    <h2 style="text-align:center; font-family : calibri; color: white ;"><b>LOGIN</b></h2>
                    <br>
                    <br>
                   
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                        <?php echo form_error('username'); ?>
                    </div>
                    <br>
                    <br>
              
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <?php echo form_error('password'); ?>
                    </div>
                    <br>
                    <br>
                    <div class="input-group">           
                        <input type="submit" class="btn btn-primary" value="Login" style="">
                    </div>
                    <br>
                     <div class="input-group">           
                        <p style="text-align:center; font-family:calibri; color : black">Anda belum punya akun? <a href="#" style="color:blue;">Klik Disini</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>