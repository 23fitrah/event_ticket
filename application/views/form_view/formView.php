<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="">
<head>
			<meta name="keywords" content=" " />
			<meta name="description" content=" " />
			<meta charset="utf-8" />
			<link rel="stylesheet" href="style.css: " />
			<script type="text/javascript" src="<?php echo base_url('asset/bootstrap/js/bootstrap.js');?>"></script>
			<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
			<link href="<?php echo base_url();?>assets/css/style-form.css" rel="stylesheet">
			<style type="text/css">
			.background1{background-color:orange;background-size:7% 7%;background-image:url('<?php echo base_url(); ?>images/faviconpimpi.png');background-repeat:repeat}
			</style>
<title>Formulir Seminar PIMPI</title>
</head>
<body class="background1 ">
<div class="garis margin ">
<div class="form">
<br />
<div class="title background2">
<br />
<div style="font-size:18pt"><b>Pendaftaran Seminar Nasional</b></div>
<div style="font-size:25pt"><b>Pekan Inovasi Mahasiswa Pertanian Indonesia 2014</b></div>
<div style="font-size:16pt"><b><i>"Gerakan Inovator Muda Inspirasi Pertanian Indonesia"</i></b></div><br />
<div class="header" align="center" style="text-align:center;font-size:9pt;color:black">
<table align="center"><tr>
<td><img src="<?php echo base_url(); ?>images/indro surono.jpg" width="115pt" height="110pt"/> <br />Ir. Indro Surono (ELSPPAT Institute for Sustainable Agriculture and Rural)</td>
<td><img src="<?php echo base_url(); ?>images/fadli padi.jpg" width="115pt" height="110pt" /> <br />Andi Fadly Ariffudin, SE (Vokalis Padi Band dan Tentor Indonesia Berkebun)</td>
<td><img src="<?php echo base_url(); ?>images/ridwan kamil.jpg" width="115pt" height="110pt" /> <br />M.Ridwan Kamil, ST. MUD(Walikota Bandung, Delegasi Bandung Berkebun)**</td>
<td><img src="<?php echo base_url(); ?>images/warsito taruno.jpg" width="115pt" height="110pt" /> <br /><br />Dr. Edi Sukur (Sekjen MITI Indonesia)**</td>
<td><img src="<?php echo base_url(); ?>images/kukuh roxa.jpg" width="115pt" height="110pt" />  <br /> Kukuh Roxa Putra Hadriyono, SP. (Inovator Pertanian Indonesia)</td>
</tr></table>
</div>
<div style="font-size:8pt;text-align:left;color:black"><i>**)Dalam Konfirmasi</i></div>

</div>
<br />
<div class="line" ></div>
<table width="100%" border="0">
<tr height="40px"><td colspan="3"> <div class="require">*) required </div></td> </tr>
<?php echo form_open('form/registration');?>
<tr height="40px"><td width="37%">Nama Lengkap<em class="require">*</em></td><td>  <?php echo form_input('nama');?><?php echo form_error('nama', '<div style="color:red">','</div>');?></td><td></td></tr>
<tr height="40px"><td width="37%">NIM/NRP Mahasiswa</td><td>  <?php echo form_input('nim/nrp');?></td><td></td></tr>
<tr height="40px"><td>No Handphone<em class="require">*</em></td><td> <?php echo form_input('no_hp');?> <?php echo form_error('no_hp', '<div style="color:red">','</div>');?></td><td></td></tr>
<tr height="40px"><td>Email<em class="require">*</em></td><td>  <?php echo form_input('email');?> <?php echo form_error('email', '<div style="color:red">','</div>');?></td><td></td></tr>
<tr height="40px"><td>Alamat <em class="require">*</em></td><td><?php $alamat=array(
                        'name'=>'alamat',
                        'id'=>'alamat',
                        'maxlength'=>'1000',
                        'size'=>'40'
                        );
       echo form_textarea($alamat); ?> <?php echo form_error('alamat', '<div style="color:red">','</div>');?></td><td></td></tr>
<tr height="40px"><td>Status Pendidikan<em class="require">*</em></td><td> <?php $option=array(
                     '-'=>"Pilih Pendidikan",
                     'sma'=>"SMA",
                     'mahasiswa'=>"Mahasiswa",
                     'umum'=>'Umum'
                     );
        echo form_dropdown('pendidikan',$option,'-'); ?> <?php echo form_error('pendidikan', '<div style="color:red">','</div>');?>
   </td><td></td></tr>
<tr height="40px"><td>Asal Universitas/SMA<td> <?php echo form_input('univ');?></td><td></td></tr>
<tr height="40px"><td>Untuk Mahasiswa pilih tingkatan anda</td><td>  <?php
        echo form_radio('tingkatan','S0').'S0';
		echo form_radio('tingkatan','S1').'S1';
        echo form_radio('tingkatan','S2').'S2';
   ?> </td><td></td></tr>
 <tr height="40px"><td width="37%">Facebook<em class="require">*</em></td><td>  <?php echo form_input('facebook');?><?php echo form_error('facebook', '<div style="color:red">','</div>');?></td><td></td></tr>
<tr height="40px"><td width="37%">Twitter<em class="require">*</em></td><td>  <?php echo form_input('twitter');?><?php echo form_error('twitter', '<div style="color:red">','</div>');?></td><td></td></tr>

	   <tr height="40px"><td></td><td>   <?php echo form_submit('kirim','Daftar');?></td><td></td></tr>
<?php echo form_close(); ?>
</table>
<br />
<div style="font-size:9pt">
Lokasi seminar berada di <b>Gedung Andi Hakim Nasution (AHN)</b> Kampus IPB Dramaga, Bogor. <b>Tanggal : 8 November 2014 jam 07.30-selesai</b>
<br />
Untuk melengkapi proses pendaftaran, mohon mengirimkan persyaratan administrasi di bawah ini.<br />
1. Untuk kategori pelajar-S1, mohon mentransfer biaya administrasi sebesar Rp. 20.000,00  , kategori S2-Umum sebesar Rp. 30.000,00 <br />
2. Transfer biaya administrasi ke REK BNI : 0261314237 A.N.  : Herfina Novita Dewi<br />
3. Kirimkan bukti transfer ke email : pimpi.ipb@gmail.com dengan subject: nama peserta_seminar_pimpi_2014, contoh : Alex_seminar_pimpi_2014.<br />
Seluruh persyaratan di atas sudah diterima oleh panitia PIMPI paling lambat <b>tanggal 6 November 2014</b>. Peserta akan mendapatkan tiket via email jika telah melengkapi persyaratan tersebut. 
Untuk informasi lebih lanjut dapat menghubungi Panitia PIMPI : 085716288280<br />

<br /></div>

<div class="line" ></div>
<br />

<div id="sidebar_left">
<div class="header_bar">Organized by</div>
<img src="<?php echo base_url(); ?>images/Forces Logo.png" width="40%" height="30%" /> <img src="<?php echo base_url(); ?>images/Logo_IPB.jpeg.png" width="30%" height="30%" /> <br />
<img src="<?php echo base_url(); ?>images/header Forces.jpg" width="40%" height="30%" /> <img src="<?php echo base_url(); ?>images/PIMPI2013.png" width="40%" height="30%" />
<br />
</div>
<div id="center">
<div class="header_bar">Sponsored by</div>
<img src="<?php echo base_url(); ?>images/sponsor.png" width="100%" height="20%" /> <br /><br />
<div class="header_bar">Supported by</div>
<img src="<?php echo base_url(); ?>images/supported.png" width="70%" height="10%" /> 
</div>
<div id="sidebar_right">
<div class="header_bar">Media Partner</div>
<img src="<?php echo base_url(); ?>images/media.png" width="70%" height="12%" /> 
</div>
<br /><br /><br /><br /><br />
<div id="footer">
	<br />
	<div class="line" ></div>
 <div style="font-size:9pt">Copyright &copy; 2014 Scientist of Forces. All rights reserved </div>
</div>
</div>
</div>
</body>
</html>