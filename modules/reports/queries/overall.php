<?php

$month_placeholder = ($month != 'all' ? "and month(Tarikh) = $month" : '');
$number     = 1;

foreach ($states as $table => $label) {
	$sql_stub   = file_get_contents(PATH_MODULES . '/reports/queries/state-sql.stub');
	$sql = str_replace(
		['PLACEHOLDER_YEAR', 'PLACEHOLDER_STATE', 'PLACEHOLDER_MONTH'], 
		[$year, $table, $month_placeholder], 
		$sql_stub
	);
	$rs         = mysqli_query($db, $sql);
	while ($rec = mysqli_fetch_assoc($rs)) {
		$_temp = isset($data[$rec['PataOrganisasi']]) ? $data[$rec['PataOrganisasi']] : [
			'AMasaPatuh' => 0,
			'AMasaTidakPatuh' => 0,
			'BMasaPatuh' => 0,
			'BMasaTidakPatuh' => 0,
			'CMasaPatuh' => 0,
			'CMasaTidakPatuh' => 0,
			'DMasaPatuh' => 0,
			'DMasaTidakPatuh' => 0,
			'EMasaPatuh' => 0,
			'EMasaTidakPatuh' => 0,
			'ATindakanPatuh' => 0,
			'ATindakanTidakPatuh' => 0,
			'BTindakanPatuh' => 0,
			'BTindakanTidakPatuh' => 0,
			'CTindakanPatuh' => 0,
			'CTindakanTidakPatuh' => 0,
			'DTindakanPatuh' => 0,
			'DTindakanTidakPatuh' => 0,
			'ETindakanPatuh' => 0,
			'ETindakanTidakPatuh' => 0,
			'F' => 0,
			'G' => 0,
		];
		$t = [
			'PataOrganisasi' => $rec['PataOrganisasi'],
			'AMasaPatuh' => (int) $rec['AMasaPatuh'] + $_temp['AMasaPatuh'],
			'AMasaTidakPatuh' => (int) $rec['AMasaTidakPatuh'] + $_temp['AMasaTidakPatuh'],
			'BMasaPatuh' => (int) $rec['BMasaPatuh'] + $_temp['BMasaPatuh'],
			'BMasaTidakPatuh' => (int) $rec['BMasaTidakPatuh'] + $_temp['BMasaTidakPatuh'],
			'CMasaPatuh' => (int) $rec['CMasaPatuh'] + $_temp['CMasaPatuh'],
			'CMasaTidakPatuh' => (int) $rec['CMasaTidakPatuh'] + $_temp['CMasaTidakPatuh'],
			'DMasaPatuh' => (int) $rec['DMasaPatuh'] + $_temp['DMasaPatuh'],
			'DMasaTidakPatuh' => (int) $rec['DMasaTidakPatuh'] + $_temp['DMasaTidakPatuh'],
			'EMasaPatuh' => (int) $rec['EMasaPatuh'] + $_temp['EMasaPatuh'],
			'EMasaTidakPatuh' => (int) $rec['EMasaTidakPatuh'] + $_temp['EMasaTidakPatuh'],
			'ATindakanPatuh' => (int) $rec['ATindakanPatuh'] + $_temp['ATindakanPatuh'],
			'ATindakanTidakPatuh' => (int) $rec['ATindakanTidakPatuh'] + $_temp['ATindakanTidakPatuh'],
			'BTindakanPatuh' => (int) $rec['BTindakanPatuh'] + $_temp['BTindakanPatuh'],
			'BTindakanTidakPatuh' => (int) $rec['BTindakanTidakPatuh'] + $_temp['BTindakanTidakPatuh'],
			'CTindakanPatuh' => (int) $rec['CTindakanPatuh'] + $_temp['CTindakanPatuh'],
			'CTindakanTidakPatuh' => (int) $rec['CTindakanTidakPatuh'] + $_temp['CTindakanTidakPatuh'],
			'DTindakanPatuh' => (int) $rec['DTindakanPatuh'] + $_temp['DTindakanPatuh'],
			'DTindakanTidakPatuh' => (int) $rec['DTindakanTidakPatuh'] + $_temp['DTindakanTidakPatuh'],
			'ETindakanPatuh' => (int) $rec['ETindakanPatuh'] + $_temp['ETindakanPatuh'],
			'ETindakanTidakPatuh' => (int) $rec['ETindakanTidakPatuh'] + $_temp['ETindakanTidakPatuh'],
			'F' => (int) $rec['F'] + $_temp['F'],
			'G' => (int) $rec['G'] + $_temp['G'],
		];
	    $data[$rec['PataOrganisasi']] = $t;
	}
}
