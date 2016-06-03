<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="">
<head>
			<meta name="keywords" content=" " />
			<meta name="description" content=" " />
			<meta charset="utf-8" />
			<link rel="stylesheet" href="style.css: " />
			<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
			<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
			<link href="<?php echo base_url();?>css/bootstrap-responsive.min.css" rel="stylesheet">
			<link href="<?php echo base_url();?>assets/css/style-home.css" rel="stylesheet">
			<style type="text/css">
			.background1{background-color:orange;background-size:7% 7%;background-image:url('<?php echo base_url(); ?>images/faviconpimpi.png');background-repeat:repeat}
			#header{background-size:1% 1%;background-image:url('<?php echo base_url();?>images/header-admin.png');background-repeat:repeat-x}
			.admin-background{height:65pt;background-color:rgb(245,245,245);background-size:5pt 65pt;background-image:url('<?php echo base_url();?>images/header-admin.png');
			background-position: top;
			background-repeat: repeat-x}
			.admin-footer{background-image:url('<?php echo base_url(); ?>images/footer-admin.png');background-repeat:repeat-x;width:100%;text-align:center;color:black;margin:32pt 0pt 0pt 0pt}
			.admin-logo{background: orange url("<?php echo base_url();?>images/PIMPI2013.png") no-repeat}
			div.Blue_orange_menu {
    background:url('<?php echo base_url(); ?>images/blue_v_menu_bottom.gif') no-repeat bottom;
    width:216px;
    padding-bottom:3px;
    float:left;
    }
    div.Blue_orange_menu h2 {
    background:url('<?php echo base_url(); ?>images/blue_v_menu_header.gif') no-repeat left top;
    height:32px;
    line-height:32px;
    font-weight:normal;
    color:#FFFFFF;
    font-size:14px;
    margin:0;
    padding:0 0 0 28px;
    font-size:16px;
    }
    
    div.Blue_orange_menu ul li a {
    background:#737171 url('<?php echo base_url(); ?>images/blue_v_menu_a_left.gif') no-repeat left top;
    color:#ffffff;
    float:left;
    margin:4px 2px 1px 2px;
    padding:0;
    font-size:12px;
    text-decoration:none;
    width:205px;
    font: bold 12px Verdana, Arial, Helvetica, sans-serif
    }
    div.Blue_orange_menu ul li a span {
    background:url('<?php echo base_url(); ?>images/blue_v_menu_a_right.gif') no-repeat right top;
    color:#ffffff;
    padding:7px 0 7px 25px;
    display:block;
    margin:0 0 0 0;
    }
    div.Blue_orange_menu ul li a:hover {
    background:#737171 url('<?php echo base_url(); ?>images/blue_v_menu_a_left_o.gif') no-repeat left top;
    }
    div.Blue_orange_menu ul li a:hover span {
    background:url('<?php echo base_url(); ?>images/blue_v_menu_a_right_o.gif') no-repeat right top;
    }
	 </style>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/css/styles.css">
<script type="text/javascript">
$(document).ready(function(){
		$("#cari").click(function(){
			$("#CSSTableGenerator").load('<?php echo site_url('admin/cari'); ?>');
		});
		$("#list").click(function(){
			$("#CSSTableGenerator").load('<?php echo site_url('admin/home'); ?>');
		});
$(".CSSTableGenerator").load('<?php echo site_url('admin/list_peserta'); ?>');
	});
</script>
<title>Formulir Seminar PIMPI</title>
</head>
<body class="admin-background">
<div class="logo"><img src="<?php echo base_url();?>images/PIMPI2013.png"  width="9%" height="7%" align="center"/> <img align="center" src="<?php echo base_url();?>images/admin.png"  width="43%" height="20%" /></div>
<div class="garis admin-margin">
	<div id="kiri">
	 
		<div class="Blue_orange_menu">
    <h2>Menu</h2>
    <ul class="leftmenu">
    <li><a id="list" href="#"><span>List Peserta</span></a></li>
    <li><a id="cari" href="javascript:void(0)"><span>Cari</span></a></li>
    <li><a href="<?php echo site_url('admin/cetak');?>" alt="_blank"><span>Print</span></a></li>
    <li><a href="<?php echo site_url('admin/logout'); ?>" title="Css menu"><span>Logout</span></a></li>
    </ul>
    </div>
		</div>
	<div id="kanan" >
	<div id="CSSTableGenerator"></div>
		<div class="CSSTableGenerator">
		<div><?php echo $halaman; ?></div>
				<table border="1" width="100%">
					<tr><td width="22.5%">Nama</td><td  width="15%">No Hp</td><td>Email</td><td width="4%">Status</td><td width="21%">Univ / SMA</td><td width="4%">Tingkat</td></tr>
						<?php foreach($query as $data){?>
					<tr><td><?php echo $data->nama; ?></td><td><?php echo $data->no_hp; ?></td><td><?php echo $data->email; ?></td><td><?php echo $data->pendidikan; ?></td><td><?php echo $data->univ; ?></td><td> <?php echo $data->tingkat; ?></td></tr>
						<?php } ?>
				</table>
<?php echo $halaman; ?>
		<?php echo $total_rows; ?> peserta telah mendaftar.
		</div>
	</div>
</div>
<footer class="admin-footer">
<table  height="35px">
 <tr valign="center" ><td width="7%" align="right"></td><td width="40%" align="left"> </td><td width="40%" align="right"><div style="font-size:10pt">Copyright &copy; 2014 Scientist of Forces. All rights reserved </div></td></tr>
</table>
</footer>
</body>
</html>