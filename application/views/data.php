<!-- silakan desain dengan menggunakan CSS -->
<style type="text/css">
.CSSTableGenerator {
	margin:0px;padding:0px;
	width:100%;
	box-shadow: 
	border:1px solid blue;
	font-size:25pt;
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:50%;
	margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
	
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#aad4ff; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
	vertical-align:middle;
	
	
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:4px;
	font-size:10px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}
.margin{margin:22pt 22pt 22pt 22pt}
#header{font-weigth:bold;text-align:center;font-size:11pt}
#body{font-size:10pt}
#tabel{text-align:center}
#time{text-align:right}
#i{background-image:url('<?php echo base_url(); ?>images/indro surono.jpg');}
</style>
<div class="margin">
<h1><b>Gaji Karyawan Kalusa Cake</b></h1>
<h3>ID Pegawai</h3>
<div id="i"></div>
<em id="time"><?php echo date('Y-m-d H:i:s'); ?></em><br />
<div class="">
<table width="500px">
<tr ><td>No</td><td id="header">Nama</td><td id="header">NIM/NRP</td><td id="header">Email</td><td id="header">No HP</td><td id="header">Pendidikan</td><td id="header">Universitas</td><td id="header">Keterangan</td></tr>
<?php
$no=1;
foreach($data->result() as $row) 
{
	echo '<tr ><td id="body">'.$id.'</td><td id="body">'.$row->nama.'</td><td id="body">'.$row->nim_nrp.'</td><td id="body">'.$row->email.'</td><td id="body">'.$row->no_hp.'</td><td id="body">'.$row->pendidikan.'</td><td id="body">'.$row->univ.'</td><td></td></tr>';
	$no++;
}
?>
</table>
</div>
</div>