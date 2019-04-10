<?php include 'queries/sample.php'; ?>

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