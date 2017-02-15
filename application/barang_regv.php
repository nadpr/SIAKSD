<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Dark Admin</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

      <style>

        div {
            padding-bottom:20px;
        }

    </style>
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Back to Admin</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.html"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="portfolio.html"><i class="fa fa-tasks"></i> Daftar Barang</a></li>
                    <li><a href="blog.html"><i class="fa fa-globe"></i> Tambah Barang Baru</a></li>
                    <li><a href="signup.html"><i class="fa fa-list-ol"></i> Daftar Suplier</a></li>
                    <li class="selected"><a href="register.html"><i class="fa fa-font"></i> Daftar Karyawan</a></li>
                    <li><a href="timeline.html"><i class="fa fa-font"></i> Tambah Karyawan</a></li>
                    <li><a href="forms.html"><i class="fa fa-list-ol"></i> Daftar Unit</a></li>
                    <li><a href="typography.html"><i class="fa fa-font"></i> Tambah Unit</a></li>
                    <li><a href="bootstrap-elements.html"><i class="fa fa-list-ul"></i> Entri Barang</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">2 New Messages</li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                        </ul>
                    </li>
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Steve Miller<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
<!--form-->
       <form action="barang_reg/bar" method="POST">
        <div class="row text-center">
            <h2>Tambah Barang</h2>
        </div>
        <div>
            <label for="firstname" class="col-md-2">
                ID Barang:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="id" placeholder="Masukkan ID Barang">
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div>
            <label for="lastname" class="col-md-2">
                Nama Barang:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Barang">
            </div>
             <div class="col-md-1">
            </div>
        </div>
        <div>
            <label for="departemen" class="col-md-2">
                Departemen:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="departemen" placeholder="Masukkan Departemen">
            </div>
             <div class="col-md-1">
            </div>
        </div>
        <div>
            <label for="hargabeli" class="col-md-2">
                Harga Beli:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="beli" placeholder="Masukkan Harga Beli">
            </div>
        </div>
        <div>
            <label for="hargajual" class="col-md-2">
                Harga Jual:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="jual" placeholder="Masukkan Harga Jual">
            </div>
        </div>
        <div>
            <label for="stok" class="col-md-2">
                Stok:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="stok" placeholder="Masukkan Jumlah Stok">
            </div>
        </div>
        <div>
            <label for="idsup" class="col-md-2">
                ID Supplier:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="idsup" placeholder="Masukkan ID supplier">
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

</body>
</html>
