<?php

foreach ($states as $key => $value) {
    $sql = "select Status as label, count(Status) as count from $key 
	where Status in ('Belum Selesai', 'Dalam Tindakan', 'Selesai') and year(Tarikh) = $year
	group by Status";
    $rs         = mysqli_query($db, $sql);
    $data[$key] = [];
    while ($rec = mysqli_fetch_assoc($rs)) {
        $data[$key][$rec['label']] = $rec['count'];
    }
}
