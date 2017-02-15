<?php $this->load->view('template/head'); ?>
  <body>

      <div class="col-md-4 col-md-offset-4" style="margin-top:10%">
        <h3 align="center">Indah Inventory</h3>


      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row form-group">
          <form action="<?php echo site_url('login_ci/validasi') ?>" method="post">
            <label class="col-md-3" for="username">Username</label>
            <div class="col-md-9">
              <input type="text" name="username"/>

            </div>
          </div>

          <div class="row form-group">
            <label class="col-md-3" for="password">Password</label>
            <div class="col-md-9">
              <input type="password" name="password" />

            </div>
          </div>

          <div class="row form-group">
            <label class="col-md-3"></label>
            <div class="col-md-9">
              <button type="submit" name="btnSubmit" value="LOGIN" name="Login" class="btn btn-primary btn-sm">Login</button>
            </div>
          </div>
          </form>
        </div>


      </div>
    </div>

  </body>
<?php $this->load->view('template/footer') ?>
