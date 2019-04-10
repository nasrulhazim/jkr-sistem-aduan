<?php
$year = $_GET['year'] ?? date('Y');
$states = [
	'Johor' => 'Johor',
	'Kedah' => 'Kedah',
	'Kelantan' => 'Kelantan',
	'Melaka' => 'Melaka',
	'NSembilan' => 'Negeri Sembilan',
	'Pahang' => 'Pahang',
	'Perak' => 'Perak',
	'Perlis' => 'Perlis',
	'Penang' => 'Penang',
	'Sabah' => 'Sabah',
	'Sarawak' => 'Sarawak',
	'Selangor' => 'Selangor',
	'Trengganu' => 'Terengganu',
	'KualaLumpur' => 'W.P. Kuala Lumpur',
	'PutraJaya' => 'W.P. Putrajaya',
	'Labuan' => 'W.P. Labuan',
]; 
$data = [];
foreach ($states as $key => $value) {
	$sql = "select Status as label, count(Status) as count from $key 
	where Status in ('Belum Selesai', 'Dalam Tindakan', 'Selesai') and year(Tarikh) = $year
	group by Status";
    $rs = mysqli_query($db, $sql);
    $data[$key] = [];
    while($rec = mysqli_fetch_assoc($rs))
    {
        $data[$key][$rec['label']] = $rec['count'];
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
		<th class="text-center">Belum Selesai</th>
		<th class="text-center">Dalam Tindakan</th>
		<th class="text-center">Selesai</th>
		<th class="text-center">Jumlah</th>
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
			<?php echo $states[$state]; ?>
		</td>
		<td class="text-center"><?php echo isset($statuses['Belum Selesai']) ? $statuses['Belum Selesai'] : 0; ?></td>
		<td class="text-center"><?php echo isset($statuses['Dalam Tindakan']) ? $statuses['Dalam Tindakan'] : 0; ?></td>
		<td class="text-center"><?php echo isset($statuses['Selesai']) ? $statuses['Selesai'] : 0; ?></td>
		<td class="text-center"><?php echo $total; ?></td>
	</tr>
<?php endforeach; ?>
<tr>
	<th>Total</th>
	<th class="text-center"><?php echo $grand_total_belum_selesai; ?></th>
	<th class="text-center"><?php echo $grand_total_dalam_tindakan; ?></th>
	<th class="text-center"><?php echo $grand_total_selesai; ?></th>
	<th class="text-center"><?php echo $grand_total_belum_selesai + $grand_total_dalam_tindakan + $grand_total_selesai; ?></th>
</tr>
</table>

