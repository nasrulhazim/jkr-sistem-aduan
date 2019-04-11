<?php include 'queries/state.php'; ?>
<style type="text/css">
	.font-size-nine {
		font-size: 9px;
	}
</style>
<div class="row pb-3">
	<div class="col">
		<div class="float-right">
            <form id="filter" class="form-inline">
            	<div class="form-group">
					<label for="state">State: &nbsp;</label>
					<select class="form-control" 
						id="state" name="state" 
						onchange="document.getElementById('filter').submit()">
						<?php foreach ($states as $table => $label): ?>
	                    	<option <?php echo $state == $table ? 'selected' : ''; ?> value="<?php echo $table; ?>">
	                    		<?php echo $label; ?>
	                    	</option>
	                    <?php endforeach; ?>
					</select>
				</div>
				&nbsp;
				<div class="form-group">
					<label for="year">Year: &nbsp;</label>
					<select class="form-control" 
						id="year" name="year" 
						onchange="document.getElementById('filter').submit()">
						<?php foreach ($years as $y): ?>
	                    	<option <?php echo $year == $y ? 'selected' : ''; ?> value="<?php echo $y; ?>">
	                    		<?php echo $y; ?>
	                    	</option>
	                    <?php endforeach; ?>
					</select>
				</div>
				&nbsp;
				<div class="form-group">
					<label for="month">Month: &nbsp;</label>
					<select class="form-control" 
						id="month" name="month" 
						onchange="document.getElementById('filter').submit()">
							<option <?php echo $month == 'all' ? 'selected' : ''; ?> value="all">All</option>
						<?php foreach (range(1,12) as $m): ?>
	                    	<option <?php echo $month == $m ? 'selected' : ''; ?> value="<?php echo $m; ?>">
	                    		<?php echo $m; ?>
	                    	</option>
	                    <?php endforeach; ?>
					</select>
				</div>
            </form>
        </div>
	</div>
</div>

<table class="table table-bordered font-size-nine">
	<tr>
		<th rowspan="4" class="text-center align-middle">Bil</th>
		<th rowspan="4" class="text-center align-middle">Kementerian</th>
		<th colspan="20" class="text-center">Jenis Kerosakan</th>
		<th colspan="2" rowspan="2" class="text-center align-middle">Jenis Perkhidmatan</th>
		<th rowspan="4" class="text-center align-middle font-weight-bold">Jumlah Kerosakan</th>
	</tr>
	<tr>
		<th colspan="4" class="text-center">A</th>
		<th colspan="4" class="text-center">B</th>
		<th colspan="4" class="text-center">C</th>
		<th colspan="4" class="text-center">D</th>
		<th colspan="4" class="text-center">E</th>
	</tr>
	<tr>
		<th colspan="2" class="text-center">Maklum Balas Aduan</th>
		<th colspan="2" class="text-center">Tindakan Penyempurnaan</th>
		
		<th colspan="2" class="text-center">Maklum Balas Aduan</th>
		<th colspan="2" class="text-center">Tindakan Penyempurnaan</th>

		<th colspan="2" class="text-center">Maklum Balas Aduan</th>
		<th colspan="2" class="text-center">Tindakan Penyempurnaan</th>

		<th colspan="2" class="text-center">Maklum Balas Aduan</th>
		<th colspan="2" class="text-center">Tindakan Penyempurnaan</th>

		<th colspan="2" class="text-center">Maklum Balas Aduan</th>
		<th colspan="2" class="text-center">Tindakan Penyempurnaan</th>

		<th rowspan="2" class="text-center">F</th>
		<th rowspan="2" class="text-center">G</th>
	</tr>
	<tr>
		<th class="text-center">P</th>
		<th class="text-center">T/P</th>
		<th class="text-center">P</th>
		<th class="text-center">T/P</th>
		<th class="text-center">P</th>
		<th class="text-center">T/P</th>
		<th class="text-center">P</th>
		<th class="text-center">T/P</th>
		<th class="text-center">P</th>
		<th class="text-center">T/P</th>
		<th class="text-center">P</th>
		<th class="text-center">T/P</th>
		<th class="text-center">P</th>
		<th class="text-center">T/P</th>
		<th class="text-center">P</th>
		<th class="text-center">T/P</th>
		<th class="text-center">P</th>
		<th class="text-center">T/P</th>
		<th class="text-center">P</th>
		<th class="text-center">T/P</th>
	</tr>
<?php 
	$total_a_masa_patuh = 0;
	$total_a_masa_tidak_patuh = 0;

	$total_b_masa_patuh = 0;
	$total_b_masa_tidak_patuh = 0;
	
	$total_c_masa_patuh = 0;
	$total_c_masa_tidak_patuh = 0;

	$total_d_masa_patuh = 0;
	$total_d_masa_tidak_patuh = 0;

	$total_e_masa_patuh = 0;
	$total_e_masa_tidak_patuh = 0;

	$total_a_tindakan_patuh = 0;
	$total_a_tindakan_tidak_patuh = 0;

	$total_b_tindakan_patuh = 0;
	$total_b_tindakan_tidak_patuh = 0;
	
	$total_c_tindakan_patuh = 0;
	$total_c_tindakan_tidak_patuh = 0;

	$total_d_tindakan_patuh = 0;
	$total_d_tindakan_tidak_patuh = 0;

	$total_e_tindakan_patuh = 0;
	$total_e_tindakan_tidak_patuh = 0;

	$total_f = 0;
	$total_g = 0;
?>
<?php foreach ($data as $key => $value): ?>
	<?php 
		// Masa
		$total_a_masa_patuh += $value['AMasaPatuh'];
		$total_a_masa_tidak_patuh += $value['AMasaTidakPatuh'];

		$total_b_masa_patuh += $value['BMasaPatuh'];
		$total_b_masa_tidak_patuh += $value['BMasaTidakPatuh'];
		
		$total_c_masa_patuh += $value['CMasaPatuh'];
		$total_c_masa_tidak_patuh += $value['CMasaTidakPatuh'];

		$total_d_masa_patuh += $value['DMasaPatuh'];
		$total_d_masa_tidak_patuh += $value['DMasaTidakPatuh'];

		$total_e_masa_patuh += $value['EMasaPatuh'];
		$total_e_masa_tidak_patuh += $value['EMasaTidakPatuh'];
	?>
	<?php 
		// Tindakan
		$total_a_tindakan_patuh += $value['ATindakanPatuh'];
		$total_a_tindakan_tidak_patuh += $value['ATindakanTidakPatuh'];

		$total_b_tindakan_patuh += $value['BTindakanPatuh'];
		$total_b_tindakan_tidak_patuh += $value['BTindakanTidakPatuh'];
		
		$total_c_tindakan_patuh += $value['CTindakanPatuh'];
		$total_c_tindakan_tidak_patuh += $value['CTindakanTidakPatuh'];

		$total_d_tindakan_patuh += $value['DTindakanPatuh'];
		$total_d_tindakan_tidak_patuh += $value['DTindakanTidakPatuh'];

		$total_e_tindakan_patuh += $value['ETindakanPatuh'];
		$total_e_tindakan_tidak_patuh += $value['ETindakanTidakPatuh'];
	?>
	<?php 
		$total_f += $value['F'];
		$total_g += $value['G'];
	?>
	<?php 
		$total = $value['AMasaPatuh'] + $value['AMasaTidakPatuh'];
		$total += $value['BMasaPatuh'] + $value['BMasaTidakPatuh'];
		$total += $value['CMasaPatuh'] + $value['CMasaTidakPatuh'];
		$total += $value['DMasaPatuh'] + $value['DMasaTidakPatuh'];
		$total += $value['EMasaPatuh'] + $value['EMasaTidakPatuh'];
	?>
	<tr>
		<td class="text-center"><?php echo $number; $number++; ?></td>
		<td><?php echo $value['PataOrganisasi']; ?></td>
		
		<td class="text-center"><?php echo $value['AMasaPatuh']; ?></td>
		<td class="text-center"><?php echo $value['AMasaTidakPatuh']; ?></td>
		<td class="text-center"><?php echo $value['ATindakanPatuh']; ?></td>
		<td class="text-center"><?php echo $value['ATindakanTidakPatuh']; ?></td>

		<td class="text-center"><?php echo $value['BMasaPatuh']; ?></td>
		<td class="text-center"><?php echo $value['BMasaTidakPatuh']; ?></td>
		<td class="text-center"><?php echo $value['BTindakanPatuh']; ?></td>
		<td class="text-center"><?php echo $value['BTindakanTidakPatuh']; ?></td>

		<td class="text-center"><?php echo $value['CMasaPatuh']; ?></td>
		<td class="text-center"><?php echo $value['CMasaTidakPatuh']; ?></td>
		<td class="text-center"><?php echo $value['CMasaPatuh']; ?></td>
		<td class="text-center"><?php echo $value['CMasaTidakPatuh']; ?></td>

		<td class="text-center"><?php echo $value['DMasaPatuh']; ?></td>
		<td class="text-center"><?php echo $value['DMasaTidakPatuh']; ?></td>
		<td class="text-center"><?php echo $value['DTindakanPatuh']; ?></td>
		<td class="text-center"><?php echo $value['DTindakanTidakPatuh']; ?></td>

		<td class="text-center"><?php echo $value['EMasaPatuh']; ?></td>
		<td class="text-center"><?php echo $value['EMasaTidakPatuh']; ?></td>
		<td class="text-center"><?php echo $value['ETindakanPatuh']; ?></td>
		<td class="text-center"><?php echo $value['ETindakanTidakPatuh']; ?></td>

		<td class="text-center"><?php echo $value['F']; ?></td>
		<td class="text-center"><?php echo $value['G']; ?></td>
		<td class="text-center font-weight-bold"><?php echo $total; ?></td>
	</tr>
<?php endforeach; ?>
<?php
	$grand_total = 0;
	$grand_total += ($total_a_masa_patuh + $total_a_masa_tidak_patuh);
	$grand_total += ($total_b_masa_patuh + $total_b_masa_tidak_patuh);
	$grand_total += ($total_c_masa_patuh + $total_c_masa_tidak_patuh);
	$grand_total += ($total_d_masa_patuh + $total_d_masa_tidak_patuh);
	$grand_total += ($total_e_masa_patuh + $total_e_masa_tidak_patuh);
?>
<tr class="font-weight-bold">
		<td class="text-center align-middle" colspan="2">Jumlah Besar</td>
		
		<td class="text-center"><?php echo $total_a_masa_patuh; ?></td>
		<td class="text-center"><?php echo $total_a_masa_tidak_patuh; ?></td>
		<td class="text-center"><?php echo $total_a_tindakan_patuh; ?></td>
		<td class="text-center"><?php echo $total_a_tindakan_tidak_patuh; ?></td>

		<td class="text-center"><?php echo $total_b_masa_patuh; ?></td>
		<td class="text-center"><?php echo $total_b_masa_tidak_patuh; ?></td>
		<td class="text-center"><?php echo $total_b_tindakan_patuh; ?></td>
		<td class="text-center"><?php echo $total_b_tindakan_tidak_patuh; ?></td>

		<td class="text-center"><?php echo $total_c_masa_patuh; ?></td>
		<td class="text-center"><?php echo $total_c_masa_tidak_patuh; ?></td>
		<td class="text-center"><?php echo $total_c_tindakan_patuh; ?></td>
		<td class="text-center"><?php echo $total_c_tindakan_tidak_patuh; ?></td>

		<td class="text-center"><?php echo $total_d_masa_patuh; ?></td>
		<td class="text-center"><?php echo $total_d_masa_tidak_patuh; ?></td>
		<td class="text-center"><?php echo $total_d_tindakan_patuh; ?></td>
		<td class="text-center"><?php echo $total_d_tindakan_tidak_patuh; ?></td>

		<td class="text-center"><?php echo $total_e_masa_patuh; ?></td>
		<td class="text-center"><?php echo $total_e_masa_tidak_patuh; ?></td>
		<td class="text-center"><?php echo $total_e_tindakan_patuh; ?></td>
		<td class="text-center"><?php echo $total_e_tindakan_tidak_patuh; ?></td>

		<td class="text-center"><?php echo $total_f; ?></td>
		<td class="text-center"><?php echo $total_g; ?></td>
		<td class="text-center"><?php echo $grand_total; ?></td>
	</tr>
</table>
<hr>

<div class="row">
	<div class="col">
		<h5>KETERANGAN KEEROSAKAN ELEKTRIK</h5>

		<ul>
			<li>A.	Tiada bekalan elektrik pada pepasangan</li>
			<li>B.	Kerosakan pada peralatan seperti: Suis, suis utama MCCB,RCCB, holder dan pengatur.</li>
			<li>C.	Kerosakan pada alat elektrik seperti : Kipas angin, kipas diding, kipas Pelawas, Motor dan accesori</li>
			<li>D.	Lampu Jalan, Lampu Kawasan, Lampu Limpah</li>
			<li>E.	Servis ACB/OCB, Janakuasa dan Kerja-kerja senggara ke atas kabel bawah tanah dan talian atas (Voltan rendah)</li>
		</ul>

		<h5>KETERANGAN JENIS PERKHIDMATAN</h5>

		<ul>
			<li>F.	Pemasangan sementara dan tunggu sedia atau tugas khas</li>
			<li>G.	Semakan ke atas pasangan / pendawaian (general check-up)</li>
		</ul>		
	</div>
	<div class="col">
		<ol>
			<li>MAKLUMBALAS = 	<br>
				CONTOH: 	Membaiki fius, membaiki / menganti lampu.</li>
			<li>PEMBAIKAN =	<br>
				CONTOH: 	Membaiki kabel bawah tanah, membaiki kerosakan Papan Suis Utama</li>
			<li>P =	Mematuhi Piagam Pelanggan Cawangan Kejuruteraan Elektrik<br>
				T/p=	Tidak mematuhi Piagam Pelanggan Cawangan Kejuruteraan Elektrik</li>
		</ol>
		<table class="table table-sm table-borderless">
			<tr>
				<td>Disediakan Oleh</td>
				<td>Disahkan Oleh</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>-----------------------------------</td>
				<td>-----------------------------------</td>
			</tr>
			<tr>
				<td>(Penolong Jurutera)</td>
				<td>(Jurutera Elektrik Penguasa)</td>
			</tr>
		</table>
	</div>
</div>