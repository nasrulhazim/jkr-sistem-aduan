<?php include 'include/head.php'; ?>
<?php include 'include/connect.php'; ?>
<?php include 'include/vars.php'; ?>

<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">
				<?php $date = date_create(($year . ($month != 'all' ? '-' . $month : ''))); ?>
				Laporan Aduan <?php echo $states[$state]; ?> <?php echo date_format($date,"M Y"); ?>
			</h5>
			<!-- <div id="pdf" class="float-right btn btn-sm btn-danger">PDF</div> -->
    		<?php include 'modules/reports/state.php'; ?>
		</div>
	</div>
</div>

<?php include 'include/script.php'; ?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
<script src="<?php echo '/modules/reports/assets/tableHTMLExport.js'; ?>"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#pdf').click(function(event) {
			var doc = new jsPDF({
  				orientation: 'landscape',
			});
			$(".print").tableHTMLExport({
			  type: 'pdf',
			  filename: 'Laporan-Aduan-<?php echo $states[$state]; ?>-Tahun-<?php echo $year; ?>.pdf'
			  
			});
		});
	});
</script> -->
<?php include 'include/foot.php'; ?>