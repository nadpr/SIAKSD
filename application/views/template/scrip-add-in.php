<script>
  <?php $i = 1; ?>
$(document).ready(function(){
  var i = 2;
   
  $('#add').click(function(){
   
  var inp = $('#box');
   
  // var i = $('input').size() + 1;
   
   $('<div id="box' + i +'"><label style="width:17.5%; display:inline-block;">Barang</label><input type="text" list="barang_k" id="name" class="form-control" style="width:15%; display:inline-block;margin-left:-5px;" name="barang' + i +'" placeholder="Barang '+i+'"/><input type="text" id="name" class="form-control" style="width:14%; display:inline-block;margin-left:30px;" name="jumlah' + i +'" placeholder="Jumlah '+i+'"/><input name="harga_beli'+i+'" type="text" id="name" class="form-control" style="width:15%; display:inline-block; margin-left:15px;" placeholder="Harga Beli '+i+'"><input name="harga_jual'+i+'" type="text" id="name" class="form-control" style="width:15%; display:inline-block; margin-left:15px" placeholder="Harga Jual'+i+'"><img src="http://findicons.com/files/icons/753/gnome_desktop/64/gnome_edit_delete.png" title="Hapus"  width="32" height="32" border="0" align="top" class="add" id="remove" /> </div>').appendTo(inp);
  // // $('<div id="box' + i +'"><tr><td><input type="text" id="name" class="name" name="nameA' + i +'" placeholder="Input '+i+'"/></td><td><input type="text" id="name" class="name" name="nameB' + i +'" placeholder="Input '+i+'"/></td><td><img src="http://findicons.com/files/icons/753/gnome_desktop/64/gnome_edit_delete.png" title="Hapus"  width="32" height="32" border="0" align="top" class="add" id="remove" /></td></div>').appendTo(inp);
  //$('<div id="box' + i +'" class="row"><input type="text" id="name" class="form-control"" name="nameA' + i +'" placeholder="Input '+i+'"/><input type="text" id="name" class="form-control"" name="nameB' + i +'" placeholder="Input '+i+'"/><img src="http://findicons.com/files/icons/753/gnome_desktop/64/gnome_edit_delete.png" title="Hapus"  width="32" height="32" border="0" align="top" class="add" id="remove" /></div>').appendTo(inp);

  i++;
  <?php $i++; ?>
   
  });
   
   
  $('body').on('click','#remove',function(){
   
  	$(this).parent('div').remove();
   
  });
   
});
</script>
<?php echo $i; ?>