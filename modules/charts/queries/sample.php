<?php

$state  = $_GET['state'] ?? 'Selangor';
$sql    = "select Status as label, count(Status) as count from $state group by Status ";
$rs     = mysqli_query($db, $sql);
$count  = [];
$labels = [];
$data   = [];
while ($rec = mysqli_fetch_assoc($rs)) {
    $data[$rec['label']] = $rec['count']; // use $data for table
    $labels[]            = $rec['label']; // use $labels for chart
    $count[]             = $rec['count']; // use $count for chart
}
