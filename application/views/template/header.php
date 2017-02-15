<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDAH INVENTORY</title>

    <link rel="stylesheet" type="text/css" href=<?php echo  base_url("assets/bootstrap/css/bootstrap.min.css");?> />
    <link rel="stylesheet" type="text/css" href=<?php echo  base_url("assets/font-awesome/css/font-awesome.min.css");?> />
    <link rel="stylesheet" type="text/css" href=<?php echo  base_url("assets/css/local.css");?> />
    <link rel="stylesheet" type="text/css" href=<?php echo  base_url("assets/css/style.css");?> />

    <script type="text/javascript" src=<?php echo  base_url("assets/js/jquery-1.10.2.min.js");?>></script>
    <script type="text/javascript" src=<?php echo  base_url("assets/bootstrap/js/bootstrap.min.js");?>></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>
    <div id="wrapper">
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" id="navbar_logo" href="dashboard_c">Indah Inventory</a>
                <i class="fa fa-power-off"></i><a class="navbar-brand" id="navbar_logout" href="home"><?php echo anchor('home','Logout'); ?>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar_side">

                <ul class="nav navbar-nav side-nav">
                <!--    <li class=""><a href="#"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li> -->
                    <li><a href="data_barang"><i class="fa fa-list-ol"></i> Daftar Barang</a></li>
                    <li><a href="c_barangmasuk"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Barang Baru</a></li>
                    <li><a href="c_supplier"><i class="fa fa-list-ol"></i> Daftar Supplier</a></li>
                    <li><a href="suplier_reg"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Supplier</a></li>
                    <li><a href="c_karyawan"><i class="fa fa-list-ol"></i> Daftar Karyawan</a></li>
                    <li><a href="karyawan_reg"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Karyawan</a></li>
                    <li><a href="data_unit"; ><i class="fa fa-list-ol"></i> Daftar Unit</a></li>
                    <li><a href="data_unit"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Unit</a></li>
                    <li><a href="barang_masuk"><i class="fa fa-list-ol"></i> Daftar Entri Barang</a></li>
                    <li><a href="c_barangmasuk"><i class="glyphicon glyphicon-plus-sign"></i> Entri barang</a></li>
                    <li><a href="barang_keluar"><i class="fa fa-list-ol"></i>Daftar Barang Keluar</a></li>
                    <li><a href="c_barangKeluar"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Barang Keluar</a></li>
                    <li><a href="laporan"><i class="glyphicon glyphicon-book"></i>Cetak Laporan</a></li>
                </ul>

            </div>
        </nav>
