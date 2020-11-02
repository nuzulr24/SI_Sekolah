<?php 
	echo '<img src="'.base_URL().'aset/" style="width: 80px; height: 80px; margin-right: 20px; display: inline; float: left">';
	echo '<h2 style="font-size: 22px">Absensi Berdasarkan Hari Ini</h2>';	
	echo '<h5>Rekap Absensi SDN Jember Lor 2 Berdasarkan Hari ini</h5>';
	?>
	<body onload="this.print()">
	<br>
	<hr id="bulanan" style="border-width: 2px; border-color: #000">
	<h5>Absensi Tanggal (<?=date('d F Y')?>)</h5>
	<table style="width: 100%; border-collapse: collapse" border="1"  class="table table-condensed">
		<tr>
			<th width="10%">ID</th>
			<th width="15%">NIS</th>
			<th width="15%">Nama Lengkap</th>
			<th width="20%">Wali Kelas</th>
			<th width="15%">Status</th>
			<th width="30%">Tanggal</th>
		</tr>
		<?php 
		$query 	= $this->db->query("SELECT * FROM tbl_absensi WHERE LEFT(attendance_date, 10) = DATE(NOW())")->result();
		foreach($query as $b) {
		?>
		<tr>
			<td style="text-align: center"><?= $b->id ?></td>
			<td style="text-align: center"><?= $b->nis ?> </td>
			<td style="text-align: center"><?= $b->nama ?></td>
			<td style="text-align: center"><?= $b->submission_by ?></td>
			<td style="text-align: center"><?php if ($b->submission == "Y") { echo "Hadir"; } elseif ($b->submission == "A") { echo "Alpha"; } elseif ($b->submission == "I") { echo "Izin"; } elseif ($b->submission == "S") { echo "Sakit"; } ?></td>
			<td style="text-align: center"><?=date('d F Y')?></td>
		</tr>	
		<?php
		}
		?>
	</table>
	</body>