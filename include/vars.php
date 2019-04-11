<?php 

$year   = $_GET['year'] ?? date('Y');
$month  = $_GET['month'] ?? date('m');
$years  = range(2014, date('Y'));
$state  = $_GET['state'] ?? 'Selangor';
$data   = [];
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