<table>
	<tr><td><input id="input-nama" type="text" /></td><td><input type="submit" /></td><td><button id="tutup">tutup</button></td></tr>
</table>
<script>
$("#tutup").click(function(){
			$("#CSSTableGenerator").empty();
		});
$('#input-nama').keyup(function(){
var nama = $('#input-nama').val();
$.ajax({
type:"POST",
url:"<?php echo site_url('adminController/proses_cari_agenda');?>",
data:'nama='+nama,
success:function(html){
$('#view-list-agenda').html(html);
}
});
});
</script>