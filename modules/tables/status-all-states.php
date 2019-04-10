<?php
$year = $_GET['year'] ?? date('Y');
$states = [
	'Johor',
	'Kedah',
	'Kelantan',
	'Melaka',
	'NSembilan',
	'Pahang',
	'Perak',
	'Perlis',
	'Penang',
	'PutraJaya',
	'Sabah',
	'Sarawak',
	'Selangor',
	'Trengganu',
	'KualaLumpur',
	'Labuan',
]; 
$data = [];
foreach ($states as $state) {
	$sql = "select Status as label, count(Status) as count from $state 
	where Status in ('Belum Selesai', 'Dalam Tindakan', 'Selesai') and year(Tarikh) = $year
	group by Status";
    $rs = mysqli_query($db, $sql);
    $data[$state] = [];
    while($rec = mysqli_fetch_assoc($rs))
    {
        $data[$state][$rec['label']] = $rec['count'];
    }
}
?>
<div class="row pb-3">
	<div class="col">
		<div class="float-right">
            <form id="filter" class="form-inline">
				<div class="form-group">
					<label for="year">Tahun: &nbsp;</label>
					<select class="form-control" 
						id="year" name="year" 
						onchange="document.getElementById('filter').submit()">
						<?php foreach (range(2000, date('Y')) as $y): ?>
	                    	<option <?php echo ($year == $y ? 'selected' : ''); ?> value="<?php echo $y; ?>"><?php echo $y; ?></option>
	                    <?php endforeach; ?>
					</select>
				</div>
            </form>
        </div>
	</div>
</div>

<table class="table">
	<tr>
		<th>
			Negeri
		</th>
		<th>Belum Selesai</th>
		<th>Dalam Tindakan</th>
		<th>Selesai</th>
		<th>Jumlah</th>
	</tr>
<?php 
	$grand_total = 0;
	$grand_total_belum_selesai = 0;
	$grand_total_dalam_tindakan = 0;
	$grand_total_selesai = 0;
?>
<?php foreach ($data as $state => $statuses): ?>
	<?php 
	$total = 0;
	$grand_total_belum_selesai += $total += isset($statuses['Belum Selesai']) ? $statuses['Belum Selesai'] : 0;
	$grand_total_dalam_tindakan += $total += isset($statuses['Dalam Tindakan']) ? $statuses['Dalam Tindakan'] : 0;
	$grand_total_selesai += $total += isset($statuses['Selesai']) ? $statuses['Selesai'] : 0;
	?>
	<tr>
		<td>
			<?php echo $state; ?>
		</td>
		<td><?php echo isset($statuses['Belum Selesai']) ? $statuses['Belum Selesai'] : 0; ?></td>
		<td><?php echo isset($statuses['Dalam Tindakan']) ? $statuses['Dalam Tindakan'] : 0; ?></td>
		<td><?php echo isset($statuses['Selesai']) ? $statuses['Selesai'] : 0; ?></td>
		<td><?php echo $total; ?></td>
	</tr>
<?php endforeach; ?>
<tr>
	<th>Total</th>
	<th><?php echo $grand_total_belum_selesai; ?></th>
	<th><?php echo $grand_total_dalam_tindakan; ?></th>
	<th><?php echo $grand_total_selesai; ?></th>
	<th><?php echo $grand_total_belum_selesai + $grand_total_dalam_tindakan + $grand_total_selesai; ?></th>
</tr>
</table>

