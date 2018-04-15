<?php
set_time_limit(0);

try {
    $connection = new MongoClient();
} catch (MongoConnectionException $e) {
}
$db=$connection->ProDB;
try {
    $collection1 = $db->selectCollection("Jawwalexist");
} catch (Exception $e) {
}
//$response1 = $collection1->drop();

try {
    $collection2 = $db->selectCollection("Wataniyaexist");
} catch (Exception $e) {
}

try {
    $collection3 = $db->selectCollection("NewLogoexist");
} catch (Exception $e) {
}
//$response2 = $collection2->drop();

//$command = escapeshellcmd('C:/Users/hp/PhpstormProjects/LaravelProject/Demo/appp.py');
//$output = shell_exec($command);
//echo $output;


$a=0;
$b=0;
$c=0;
$cursor = $collection1->find();
foreach($cursor as $document){

    $a++;
}

$cursor = $collection2->find();
foreach($cursor as $document){

    $b++;
}

$cursor = $collection3->find();
foreach($cursor as $document){

    $c++;
}
?>



        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Logo Detection</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">



    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <?php
    $logo=Session::get('newlogo');
    $a1=0; $a2=0; $a3=0; $a4=0; $a5=0; $a6=0; $a7=0; $a8=0; $a9=0; $a10=0; $a11=0; $a12=0;
    $b1=0; $b2=0; $b3=0; $b4=0; $b5=0; $b6=0; $b7=0; $b8=0; $b9=0; $b10=0; $b11=0; $b12=0;
    //$gg=Time.at(0);

    $cursor = $collection1->find();
    foreach($cursor as $document){

       $d=$document['time'];
        //var_dump($t);
        $date=date("Y-m-d", $d);
        //echo $time;
        $month = date('F', strtotime($date));
        $year = date('Y', strtotime($date));
        //echo $year;
        switch ($month){

            case 'January' : $a1++;   break;
            case 'February' : $a2++;   break;
            case 'March' : $a3++;   break;
            case 'April' : $a4++;   break;
            case 'May' : $a5++;   break;
            case 'June' : $a6++;   break;
            case 'July' : $a7++;   break;
            case 'August' : $a8++;   break;
            case 'September' : $a9++;   break;
            case 'October' : $a10++;   break;
            case 'November' : $a11++;   break;
            case 'December' : $a12++;   break;
        }

    }


    $cursor = $collection2->find();
    foreach($cursor as $document){

        $d=$document['time'];
        //var_dump($t);
        $date=date("Y-m-d", $d);
        //echo $time;
        $month = date('F', strtotime($date));
        //echo $month;
        switch ($month){

            case 'January' : $b1++;   break;
            case 'February' : $b2++;   break;
            case 'March' : $b3++;   break;
            case 'April' : $b4++;   break;
            case 'May' : $b5++;   break;
            case 'June' : $b6++;   break;
            case 'July' : $b7++;   break;
            case 'August' : $b8++;   break;
            case 'September' : $b9++;   break;
            case 'October' : $b10++;   break;
            case 'November' : $b11++;   break;
            case 'December' : $b12++;   break;
        }

    }


    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">



        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Jawwal",<?php echo $a;?> , "#51990a"],
                ["Wataniya", <?php echo $b;?>, "#f20404"],

                [<?php   //echo $logo ;  ?>, <?php //echo $c;?>, "#b20404"],


            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                { calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation" },
                2]);

            var options = {
                title: "Number of images containing Logo",
                width: 700,
                height: 500,
                bar: {groupWidth: "65%"},
                legend: {position: 'none'},
                vAxis: {minValue: 0},
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }
    </script>





    <script type="text/javascript">



        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Jan",<?php echo $a1;?> , "#51990a"],
                ["Feb",<?php echo $a2;?> , "#51990a"],
                ["Mar",<?php echo $a3;?> , "#51990a"],
                ["Apr",<?php echo $a4;?> , "#51990a"],
                ["May",<?php echo $a5;?> , "#51990a"],
                ["June",<?php echo $a6;?> , "#51990a"],
                ["July",<?php echo $a7;?> , "#51990a"],
                ["Aug",<?php echo $a8;?> , "#51990a"],
                ["Sept",<?php echo $a9;?> , "#51990a"],
                ["Oct",<?php echo $a10;?> , "#51990a"],
                ["Nov",<?php echo $a11;?> , "#51990a"],
                ["Dec",<?php echo $a12;?> , "#51990a"],

                [<?php   //$logo ;  ?>, <?php //echo $c;?>, "#b20404"],


            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                { calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation" },
                2]);

            var options = {
                title: " spread of Jawwal Logo along the monthes of the year",
                width: 1000,
                height: 500,
                bar: {groupWidth: "65%"},
                legend: {position: 'none'},
                vAxis: {minValue: 0},
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values1"));
            chart.draw(view, options);
        }
    </script>


    <script type="text/javascript">



        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Jan",<?php echo $b1;?> , "#f20404"],
                ["Feb",<?php echo $b2;?> , "#f20404"],
                ["Mar",<?php echo $b3;?> , "#f20404"],
                ["Apr",<?php echo $b4;?> , "#f20404"],
                ["May",<?php echo $b5;?> , "#f20404"],
                ["June",<?php echo $b6;?> , "#f20404"],
                ["July",<?php echo $b7;?> , "#f20404"],
                ["Aug",<?php echo $b8;?> , "#f20404"],
                ["Sept",<?php echo $b9;?> , "#f20404"],
                ["Oct",<?php echo $b10;?> , "#f20404"],
                ["Nov",<?php echo $b11;?> , "#f20404"],
                ["Dec",<?php echo $b12;?> , "#f20404"],

                [<?php   //$logo ;  ?>, <?php //echo $c;?>, "#b20404"],


            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                { calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation" },
                2]);

            var options = {
                title: " spread of Wataniya Logo along the monthes of the year",
                width: 1000,
                height: 500,
                bar: {groupWidth: "65%"},
                legend: {position: 'none'},
                vAxis: {minValue: 0},
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values2"));
            chart.draw(view, options);
        }
    </script>



    <!-- Styles -->
    <style>
        #chartdiv1 {
            width	: 100%;
            height	: 500px;
        }

    </style>
    <style>
        #chartdiv2 {
            width	: 100%;
            height	: 500px;
        }

    </style>

    <!-- Resources -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <script>
        var chart = AmCharts.makeChart("chartdiv1", {
            "type": "serial",
            "theme": "light",
            "marginRight": 40,
            "marginLeft": 40,
            "autoMarginOffset": 20,
            "mouseWheelZoomEnabled":true,
            "dataDateFormat": "YYYY-MM-DD",
            "valueAxes": [{
                "id": "v1",
                "axisAlpha": 0,
                "position": "left",
                "ignoreAxisWidth":true
            }],
            "balloon": {
                "borderThickness": 1,
                "shadowAlpha": 0
            },
            "graphs": [{
                "id": "g1",
                "balloon":{
                    "drop":true,
                    "adjustBorderColor":false,
                    "color":"#51990a"
                },
                "bullet": "round",
                "bulletBorderAlpha": 1,
                "bulletColor": "#FFFFFF",
                "bulletSize": 5,
                "hideBulletsCount": 50,
                "lineThickness": 2,
                "title": "red line",
                "useLineColorForBulletBorder": true,
                "valueField": "value",
                "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
            }],
            "chartScrollbar": {
                "graph": "g1",
                "oppositeAxis":false,
                "offset":30,
                "scrollbarHeight": 80,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount":true,
                "color":"#AAAAAA"
            },
            "chartCursor": {
                "pan": true,
                "valueLineEnabled": true,
                "valueLineBalloonEnabled": true,
                "cursorAlpha":1,
                "cursorColor":"#51990a",
                "limitToGraph":"g1",
                "valueLineAlpha":0.2,
                "valueZoomable":true
            },
            "valueScrollbar":{
                "oppositeAxis":false,
                "offset":50,
                "scrollbarHeight":10
            },
            "categoryField": "date",
            "categoryAxis": {
                "parseDates": true,
                "dashLength": 1,
                "minorGridEnabled": true
            },
            "export": {
                "enabled": true
            },
            "dataProvider": [
                <?php

                echo ' {"date": "2017-01", "value":'.$a1.' } ,
                       {"date": "2017-02", "value":'.$a2.' } ,
                       {"date": "2017-03", "value":'.$a3.' } ,
                       {"date": "2017-04", "value":'.$a4.' } ,
                       {"date": "2017-05", "value":'.$a5.' } ,
                       {"date": "2017-06", "value":'.$a6.' } ,
                       {"date": "2017-07", "value":'.$a7.' } ,
                       {"date": "2017-08", "value":'.$a8.' } ,
                       {"date": "2017-09", "value":'.$a9.' } ,
                       {"date": "2017-10", "value":'.$a10.' } ,
                       {"date": "2017-11", "value":'.$a11.' } ,
                       {"date": "2017-12", "value":'.$a12.' } ,


                '

                ?>
            ]
        });

        chart.addListener("rendered", zoomChart);

        zoomChart();

        function zoomChart() {
            chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
        }
    </script>

    <script>
        var chart = AmCharts.makeChart("chartdiv2", {
            "type": "serial",
            "theme": "light",
            "marginRight": 40,
            "marginLeft": 40,
            "autoMarginOffset": 20,
            "mouseWheelZoomEnabled":true,
            "dataDateFormat": "YYYY-MM-DD",
            "valueAxes": [{
                "id": "v1",
                "axisAlpha": 0,
                "position": "left",
                "ignoreAxisWidth":true
            }],
            "balloon": {
                "borderThickness": 1,
                "shadowAlpha": 0
            },
            "graphs": [{
                "id": "g1",
                "balloon":{
                    "drop":true,
                    "adjustBorderColor":false,
                    "color":"#f20404"
                },
                "bullet": "round",
                "bulletBorderAlpha": 1,
                "bulletColor": "#FFFFFF",
                "bulletSize": 5,
                "hideBulletsCount": 50,
                "lineThickness": 2,
                "title": "red line",
                "useLineColorForBulletBorder": true,
                "valueField": "value",
                "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
            }],
            "chartScrollbar": {
                "graph": "g1",
                "oppositeAxis":false,
                "offset":30,
                "scrollbarHeight": 80,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount":true,
                "color":"#AAAAAA"
            },
            "chartCursor": {
                "pan": true,
                "valueLineEnabled": true,
                "valueLineBalloonEnabled": true,
                "cursorAlpha":1,
                "cursorColor":"#f20404",
                "limitToGraph":"g1",
                "valueLineAlpha":0.2,
                "valueZoomable":true
            },
            "valueScrollbar":{
                "oppositeAxis":false,
                "offset":50,
                "scrollbarHeight":10
            },
            "categoryField": "date",
            "categoryAxis": {
                "parseDates": true,
                "dashLength": 1,
                "minorGridEnabled": true
            },
            "export": {
                "enabled": true
            },
            "dataProvider": [
                <?php

                echo ' {"date": "2017-01", "value":'.$b1.' } ,
                       {"date": "2017-02", "value":'.$b2.' } ,
                       {"date": "2017-03", "value":'.$b3.' } ,
                       {"date": "2017-04", "value":'.$b4.' } ,
                       {"date": "2017-05", "value":'.$b5.' } ,
                       {"date": "2017-06", "value":'.$b6.' } ,
                       {"date": "2017-07", "value":'.$b7.' } ,
                       {"date": "2017-08", "value":'.$b8.' } ,
                       {"date": "2017-09", "value":'.$b9.' } ,
                       {"date": "2017-10", "value":'.$b10.' } ,
                       {"date": "2017-11", "value":'.$b11.' } ,
                       {"date": "2017-12", "value":'.$b12.' } ,


                '

                ?>
            ]
        });

        chart.addListener("rendered", zoomChart);

        zoomChart();

        function zoomChart() {
            chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
        }
    </script>



</head>
<body style="background-color:#fff">


<header id="header">
    <div class="container">



        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active" ><a style="color: #333;" href="{{ url('home')}}">Home</a></li>
                <li class="menu-active"><a style="color: #333;" href="{{ url('searchimages')}}">Back</a></li>
                <li><a style="color: #333;" href="{{ url('logout') }}">Logout</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--<section id="hero">-->
<div class="hero-container" >

    <?php //echo "<h3>". $a . "  Images from the collected images have Jawwal Logo " . "</h3>" ?>

    <?php //echo "<h3>". $b . "  Images from the collected images have Wataniya Logo " . "</h3>" ?>



</div>


<!--Div that will hold the column chart-->
<div  id="columnchart_values" style=" margin-right: 400px ;margin-left: 350px; margin-top: 100px"></div>
<div  id="columnchart_values1" style=" margin-right: 400px ;margin-left: 250px; margin-top: 100px"></div>

<div  id="columnchart_values2" style=" margin-right: 400px ;margin-left: 250px; margin-top: 100px"></div>


<!--</section>--><!-- #hero -->

<div id="chartdiv1"></div>
<div id="chartdiv2"></div>

<!--==========================
Footer
============================-->
<br> <br> <br> <br> <br> <br> <br> <br> <br>
<footer id="footer">
    <div class="footer-top">
        <div class="container">

        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright. All Rights Reserved
        </div>

    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
</body>
</html>
