<?php

$year   = $_GET['year'] ?? date('Y');
$states = [
    'Johor'       => 'Johor',
    'Kedah'       => 'Kedah',
    'Kelantan'    => 'Kelantan',
    'Melaka'      => 'Melaka',
    'NSembilan'   => 'Negeri Sembilan',
    'Pahang'      => 'Pahang',
    'Perak'       => 'Perak',
    'Perlis'      => 'Perlis',
    'Penang'      => 'Penang',
    'Sabah'       => 'Sabah',
    'Sarawak'     => 'Sarawak',
    'Selangor'    => 'Selangor',
    'Trengganu'   => 'Terengganu',
    'KualaLumpur' => 'W.P. Kuala Lumpur',
    'PutraJaya'   => 'W.P. Putrajaya',
    'Labuan'      => 'W.P. Labuan',
];
$data = [];
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
