<?php include 'include/head.php'; ?>
<?php include 'include/connect.php'; ?>

<div class="container">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Status Aduan Tahun <?php echo $_GET['year'] ?? date('Y'); ?> </h5>
    		<?php include 'modules/tables/status-all-states.php'; ?>
		</div>
	</div>
</div>

<?php include 'include/script.php'; ?>

<?php include 'include/foot.php'; ?>