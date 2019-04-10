<?php include 'include/head.php'; ?>
<?php include 'include/connect.php'; ?>
<?php include 'include/vars.php'; ?>

<div class="container">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Laporan Aduan <?php echo $states[$state]; ?> Tahun <?php echo $year; ?> </h5>
    		<?php include 'modules/reports/state.php'; ?>
		</div>
	</div>
</div>

<?php include 'include/script.php'; ?>

<?php include 'include/foot.php'; ?>