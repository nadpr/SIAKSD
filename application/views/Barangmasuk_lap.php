<!DOCTYPE html>
<html>
<head>
  <title>Report Table</title>
  <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      width:600px;
      border-radius: 5px;
    }

    .short{
      width: 50px;
    }

    .normal{
      width: 150px;
    }

    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }

    thead th{
      text-align: left;
      padding: 10px;
    }

    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }

    tbody tr:nth-child(even){
      background: #F6F5FA;
    }

    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
</head>
<body>
	<div id="outtable">
	  <table>
	  	<thead>
	  		<tr>
          <th class="short">No</th>
	  			<th class="normal">ID Masuk</th>
	  			<th class="normal">Tanggal</th>
	  			<th class="normal">ID Barang</th>
          <th class="normal">Nama Barang</th>
          <th class="normal">Harga Beli</th>
          <th class="normal">Harga Jual</th>
          <th class="normal">Jumlah</th>
          <th class="normal">ID Supplier</th>
	  		</tr>
	  	</thead>
	  	<tbody>
	  		<?php $no=1; ?>
	  		<?php foreach($barangmasuk_lap->result() as $row){
          echo "<tr><td>".$no.
          '</td><td>'.$row->masuk_id.
          "</td><td>".$row->tanggal.
          "</td><td>".$row->barang_id.
          "</td><td>".$row->barang_nm.
          "</td><td>".$row->harga_beli.
          "</td><td>".$row->harga_jual.
          "</td><td>".$row->jumlah.
          "</td><td>".$row->supplier_id.
          "</td></tr>";
        ?>
	  		<?php $no++; }?>

	  	</tbody>
	  </table>
	 </div>
</body>
</html>
