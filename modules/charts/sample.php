<?php 
    $state = $_GET['state'] ?? 'Selangor';
    $sql = "select Status as label, count(Status) as count from $state group by Status ";
    $rs = mysqli_query($db, $sql);
    $count = [];
    $labels = [];
    $data = [];
    while($rec = mysqli_fetch_assoc($rs))
    {
        $data[$rec['label']] = $rec['count']; // use $data for table
        $labels[] = $rec['label']; // use $labels for chart
        $count[] = $rec['count']; // use $count for chart
    }
?>

<div class="row">
    <div class="col">
        <h1 class="text-center">Data for <?php echo $state; ?></h1>
        <div class="float-right">
            <form id="filter">
                <div class="input-group mb-3">
                <select class="custom-select" name="state" onchange="document.getElementById('filter').submit()">
                    <option value="Selangor">Selangor</option>
                    <option value="Kedah">Kedah</option>
                    <option value="Perlis">Perlis</option>
                </select>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table">
            <tr>
                <td colspan="2">
                    <canvas id="myChart"></canvas>
                </td>
            </tr>
            <tr>
                <th>Status</th>
                <th>Jumlah</th>
            </tr>
            <?php foreach ($data as $label => $c): ?>
                <tr>
                    <td><?php echo $label; ?></td>
                    <td><?php echo $c; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        </div> 
    </div>
</div>