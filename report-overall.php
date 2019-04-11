<?php include 'include/head.php'; ?>
<?php include 'include/connect.php'; ?>
<?php include 'include/vars.php'; ?>

<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">
				<?php $date = date_create(($year . ($month != 'all' ? '-' . $month : ''))); ?>
				Laporan Aduan <?php echo date_format($date,"M Y"); ?>
			</h5>
    		<?php include 'modules/reports/overall.php'; ?>
		</div>
	</div>
</div>

<?php include 'include/script.php'; ?>
<?php include 'include/foot.php'; ?>