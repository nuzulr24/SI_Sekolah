<?php 
	echo '<img src="'.base_URL().'aset/" style="width: 80px; height: 80px; margin-right: 20px; display: inline; float: left">';
	echo '<h2 style="font-size: 22px">Absensi Berdasarkan Bulan</h2>';	
	echo '<h5>Rekap Absensi SDN Jember Lor 2 Berdasarkan Bulan ini</h5>';
	?>
	<body onload="this.print()">
	<br>
	<hr id="bulanan" style="border-width: 2px; border-color: #000">
	<?php 
	$month = $this->uri->segment(4); 
	if($month == 1) {
		$mnth = "Januari";
	} elseif ($month == 2) {
		$mnth = "Februari";
	} elseif ($month == 3) {
		$mnth = "Maret";
	} elseif ($month == 4) {
		$mnth = "April";
	} elseif ($month == 5) {
		$mnth = "Mei";
	} elseif ($month == 6) {
		$mnth = "Juni";
	} elseif ($month == 7) {
		$mnth = "Juli";
	} elseif ($month == 8) {
		$mnth = "Agustus";
	} elseif ($month == 9) {
		$mnth = "Oktober";
	} elseif ($month == 10) {
		$mnth = "September";
	} elseif ($month == 11) {
		$mnth = "November";
	} elseif ($month == 12) {
		$mnth = "Desember";
	}
	?>
	<h5>Absensi Bulan "<?=$mnth?>"</h5>
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
		$query 	= $this->db->query("SELECT * FROM tbl_absensi WHERE MID(attendance_date, 6, 2) = '$bulan'")->result();
		foreach($query as $b) {
		?>
		<tr>
			<td style="text-align: center"><?= $b->id ?></td>
			<td style="text-align: center"><?= $b->nis ?> </td>
			<td style="text-align: center"><?= $b->nama ?></td>
			<td style="text-align: center"><?= $b->submission_by ?></td>
			<td style="text-align: center"><?php if ($b->submission == "Y") { echo "Hadir"; } elseif ($b->submission == "A") { echo "Alpha"; } elseif ($b->submission == "I") { echo "Izin"; } elseif ($b->submission == "S") { echo "Sakit"; } ?></td>
			<td style="text-align: center"><?= $b->attendance_date ?></td>
		</tr>	
		<?php
		}
		?>
	</table>
	</body>