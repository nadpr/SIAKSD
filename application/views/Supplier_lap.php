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
	  			<th class="normal">ID Supplier</th>
	  			<th class="normal">Nama Supplier</th>
	  			<th class="normal">Alamat</th>
          <th class="normal">ID Department</th>
	  		</tr>
	  	</thead>
	  	<tbody>
	  		<?php $no=1; ?>
	  		<?php foreach($supplier_lap->result() as $row){
          echo "<tr><td>".$no.
          '</td><td>'.$row->supplier_id.
          "</td><td>".$row->supplier_nm.
          "</td><td>".$row->alamat.
          "</td><td>".$row->department_id.
          "</td></tr>";
        ?>
	  		<?php $no++;} ?>

	  	</tbody>
	  </table>
	 </div>
</body>
</html>
