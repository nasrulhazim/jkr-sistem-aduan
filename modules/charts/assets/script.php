<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script type="text/javascript">
    window.chartColors = {
        red: 'rgb(255, 99, 132)',
        orange: 'rgb(255, 159, 64)',
        yellow: 'rgb(255, 205, 86)',
        green: 'rgb(75, 192, 192)',
        blue: 'rgb(54, 162, 235)',
        purple: 'rgb(153, 102, 255)',
        grey: 'rgb(201, 203, 207)'
    };
    var options = {
        responsive: true
    };
    var data = {
        datasets: [{
                data: <?php echo json_encode($count); ?>,
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: <?php echo json_encode($labels); ?>
    };
    var ctx = document.getElementById('myChart').getContext('2d');
    var c = new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: options
    });
</script>