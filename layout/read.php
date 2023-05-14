<head>
    <!--font-google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">


    <title>Brother Lanche</title>
   
    <link rel="icon" type="image/png" src="img/burguer-title.png"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">


    <!-- grafico google -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['1', 'Mês Anterior', 'Mês Atual'],
          ['1',  660,       1120],
          ['2',  1000,      400],
          ['3',  1170,      460],
          ['4',  660,       1120],
          ['5',  1030,      540],
          ['6',  660,       1120],
          ['7',  660,       1120],
          ['8',  660,       1120],
          ['9',  660,       1120],
          ['10',  660,       1120],
          ['11',  660,       1120],
          ['12',  660,       1120],
          ['13',  660,       1120],
          ['14',  660,       1120],
          ['15',  660,       1120],
          ['16',  660,       1120],
          ['17',  660,       1120],
          ['18',  660,       1120],
          ['19',  660,       1120],
          ['20',  660,       1120],
          ['21',  660,       1120],
          ['22',  660,       1120],
          ['23',  660,       1120],
          ['24',  660,       1120],
          ['25',  660,       1120],
          ['26',  660,       1120],
          ['27',  660,       1120],
          ['28',  660,       1120],
          ['29',  660,       1120],
          ['30',  660,       1120],
          

        ]);

        var options = {
          title: 'Comparação do mês atual com mês anterior',
          hAxis: {title: 'Dias',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

</head>