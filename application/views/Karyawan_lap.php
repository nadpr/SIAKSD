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
	  			<th class="normal">ID Karyawan</th>
	  			<th class="normal">Nama Karyawan</th>
	  			<th class="normal">Jabatan</th>
          <th class="normal">Bagian</th>
          <th class="normal">No Telp</th>
	  		</tr>
	  	</thead>
	  	<tbody>
	  		<?php $no=1; ?>
	  		<?php foreach($karyawan_lap->result() as $row){
          echo "<tr><td>".$no.
          '</td><td>'.$row->karyawan_id.
          "</td><td>".$row->karyawan_nm.
          "</td><td>".$row->jabatan.
          "</td><td>".$row->bagian.
          "</td><td>".$row->no_telp.
          "</td></tr>";
        ?>
	  		<?php $no++; }?>

	  	</tbody>
	  </table>
	 </div>
</body>
</html>
