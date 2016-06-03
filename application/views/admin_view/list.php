<div><?php echo $halaman; ?></div>
				<table border="1" width="100%">
					<tr><td width="22.5%">Nama</td><td  width="15%">No Hp</td><td>Email</td><td width="4%">Status</td><td width="21%">Univ / SMA</td><td width="4%">Tingkat</td></tr>
						<?php foreach($query as $data){?>
					<tr><td><?php echo $data->nama; ?></td><td><?php echo $data->no_hp; ?></td><td><?php echo $data->email; ?></td><td><?php echo $data->pendidikan; ?></td><td><?php echo $data->univ; ?></td><td> <?php echo $data->tingkat; ?></td></tr>
						<?php } ?>
				</table>
<?php echo $halaman; ?>
		<p><?php echo $total_rows; ?> peserta telah mendaftar</p>