<?php

$month_placeholder = ($month != 'all' ? "and month(Tarikh) = $month" : '');
$number     = 1;
$sql_stub   = file_get_contents(PATH_MODULES . '/reports/queries/state-sql.stub');
$sql 	    = str_replace(
	['PLACEHOLDER_YEAR', 'PLACEHOLDER_STATE', 'PLACEHOLDER_MONTH'], 
	[$year, $state, $month_placeholder], 
	$sql_stub
);
$rs         = mysqli_query($db, $sql);
while ($rec = mysqli_fetch_assoc($rs)) {
    $data[] = $rec;
}