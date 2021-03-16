<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
    <div id="container"></div>
    
    </body>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
    
        var days =  <?php echo json_encode($days) ?>;
        Highcharts.chart('container', {
    
            title: {
                text: 'Nuevo personal'
            },
    
            subtitle: {
                text: 'Gráfica'
            },
             
             xAxis: {
                categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
    
            },
    
            yAxis: {
                title: {
                   text: 'Nuevos empleados'
                }
    
            },
    
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
    
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
    
            series: [{
                name: 'Nuevos empleados',
                data: days
            }],
    
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
    });
    
    </script>
    <div>
    <a class="btn btn-warning" href="{{ route('day.index')}}">Volver</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>