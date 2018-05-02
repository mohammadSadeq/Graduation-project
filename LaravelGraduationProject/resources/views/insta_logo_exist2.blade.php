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
    //$logo=Session::get('newlogo');
    $id= \Auth::user()->id;
    $logo = DB::table('contact')
        ->where('id', $id)
        ->value('logoname');
    $a1=0; $a2=0; $a3=0; $a4=0; $a5=0; $a6=0; $a7=0; $a8=0; $a9=0; $a10=0; $a11=0; $a12=0;
    $b1=0; $b2=0; $b3=0; $b4=0; $b5=0; $b6=0; $b7=0; $b8=0; $b9=0; $b10=0; $b11=0; $b12=0;
    $c1=0; $c2=0; $c3=0; $c4=0; $c5=0; $c6=0; $c7=0; $c8=0; $c9=0; $c10=0; $c11=0; $c12=0;
    $d1=0; $d2=0; $d3=0; $d4=0; $d5=0; $d6=0; $d7=0; $d8=0; $d9=0; $d10=0; $d11=0; $d12=0;
    $e1=0; $e2=0; $e3=0; $e4=0; $e5=0; $e6=0; $e7=0; $e8=0; $e9=0; $e10=0; $e11=0; $e12=0;
    $f1=0; $f2=0; $f3=0; $f4=0; $f5=0; $f6=0; $f7=0; $f8=0; $f9=0; $f10=0; $f11=0; $f12=0;
    $g1=0; $g2=0; $g3=0; $g4=0; $g5=0; $g6=0; $g7=0; $g8=0; $g9=0; $g10=0; $g11=0; $g12=0;
    $h1=0; $h2=0; $h3=0; $h4=0; $h5=0; $h6=0; $h7=0; $h8=0; $h9=0; $h10=0; $h11=0; $h12=0;
    $i1=0; $i2=0; $i3=0; $i4=0; $i5=0; $i6=0; $i7=0; $i8=0; $i9=0; $i10=0; $i11=0; $i12=0;
    $j1=0; $j2=0; $j3=0; $j4=0; $j5=0; $j6=0; $j7=0; $j8=0; $j9=0; $j10=0; $j11=0; $j12=0;
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
        if($year=='2014'){
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


        elseif ($year=='2015'){


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

        elseif ($year=='2016'){


            switch ($month){

                case 'January' : $c1++;   break;
                case 'February' : $c2++;   break;
                case 'March' : $c3++;   break;
                case 'April' : $c4++;   break;
                case 'May' : $c5++;   break;
                case 'June' : $c6++;   break;
                case 'July' : $c7++;   break;
                case 'August' : $c8++;   break;
                case 'September' : $c9++;   break;
                case 'October' : $c10++;   break;
                case 'November' : $c11++;   break;
                case 'December' : $c12++;   break;
            }

        }


        elseif ($year=='2017'){


            switch ($month){

                case 'January' : $d1++;   break;
                case 'February' : $d2++;   break;
                case 'March' : $d3++;   break;
                case 'April' : $d4++;   break;
                case 'May' : $d5++;   break;
                case 'June' : $d6++;   break;
                case 'July' : $d7++;   break;
                case 'August' : $d8++;   break;
                case 'September' : $d9++;   break;
                case 'October' : $d10++;   break;
                case 'November' : $d11++;   break;
                case 'December' : $d12++;   break;
            }

        }


        elseif ($year=='2018'){


            switch ($month){

                case 'January' : $e1++;   break;
                case 'February' : $e2++;   break;
                case 'March' : $e3++;   break;
                case 'April' : $e4++;   break;
                case 'May' : $e5++;   break;
                case 'June' : $e6++;   break;
                case 'July' : $e7++;   break;
                case 'August' : $e8++;   break;
                case 'September' : $e9++;   break;
                case 'October' : $e10++;   break;
                case 'November' : $e11++;   break;
                case 'December' : $e12++;   break;
            }

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
        $year = date('Y', strtotime($date));
        //echo $year;
        if($year=='2014'){
            switch ($month){

                case 'January' : $f1++;   break;
                case 'February' : $f2++;   break;
                case 'March' : $f3++;   break;
                case 'April' : $f4++;   break;
                case 'May' : $f5++;   break;
                case 'June' : $f6++;   break;
                case 'July' : $f7++;   break;
                case 'August' : $f8++;   break;
                case 'September' : $f9++;   break;
                case 'October' : $f10++;   break;
                case 'November' : $f11++;   break;
                case 'December' : $f12++;   break;
            }
        }

        elseif($year=='2015'){
            switch ($month){

                case 'January' : $g1++;   break;
                case 'February' : $g2++;   break;
                case 'March' : $g3++;   break;
                case 'April' : $g4++;   break;
                case 'May' : $g5++;   break;
                case 'June' : $g6++;   break;
                case 'July' : $g7++;   break;
                case 'August' : $g8++;   break;
                case 'September' : $g9++;   break;
                case 'October' : $g10++;   break;
                case 'November' : $g11++;   break;
                case 'December' : $g12++;   break;
            }
        }

        elseif($year=='2016'){
            switch ($month){

                case 'January' : $h1++;   break;
                case 'February' : $h2++;   break;
                case 'March' : $h3++;   break;
                case 'April' : $h4++;   break;
                case 'May' : $h5++;   break;
                case 'June' : $h6++;   break;
                case 'July' : $h7++;   break;
                case 'August' : $h8++;   break;
                case 'September' : $h9++;   break;
                case 'October' : $h10++;   break;
                case 'November' : $h11++;   break;
                case 'December' : $h12++;   break;
            }
        }
        elseif($year=='2017'){
            switch ($month){

                case 'January' : $i1++;   break;
                case 'February' : $i2++;   break;
                case 'March' : $i3++;   break;
                case 'April' : $i4++;   break;
                case 'May' : $i5++;   break;
                case 'June' : $i6++;   break;
                case 'July' : $i7++;   break;
                case 'August' : $i8++;   break;
                case 'September' : $i9++;   break;
                case 'October' : $i10++;   break;
                case 'November' : $i11++;   break;
                case 'December' : $i12++;   break;
            }
        }
        elseif($year=='2018'){
            switch ($month){

                case 'January' : $j1++;   break;
                case 'February' : $j2++;   break;
                case 'March' : $j3++;   break;
                case 'April' : $j4++;   break;
                case 'May' : $j5++;   break;
                case 'June' : $j6++;   break;
                case 'July' : $j7++;   break;
                case 'August' : $j8++;   break;
                case 'September' : $j9++;   break;
                case 'October' : $j10++;   break;
                case 'November' : $j11++;   break;
                case 'December' : $j12++;   break;
            }
        }

    }


    ?>



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

                echo ' {"date": "2014-01", "value":'.$a1.' } ,
                       {"date": "2014-02", "value":'.$a2.' } ,
                       {"date": "2014-03", "value":'.$a3.' } ,
                       {"date": "2014-04", "value":'.$a4.' } ,
                       {"date": "2014-05", "value":'.$a5.' } ,
                       {"date": "2014-06", "value":'.$a6.' } ,
                       {"date": "2014-07", "value":'.$a7.' } ,
                       {"date": "2014-08", "value":'.$a8.' } ,
                       {"date": "2014-09", "value":'.$a9.' } ,
                       {"date": "2014-10", "value":'.$a10.' } ,
                       {"date": "2014-11", "value":'.$a11.' } ,
                       {"date": "2014-12", "value":'.$a12.' } ,


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

                echo ' {"date": "2015-01", "value":'.$b1.' } ,
                       {"date": "2015-02", "value":'.$b2.' } ,
                       {"date": "2015-03", "value":'.$b3.' } ,
                       {"date": "2015-04", "value":'.$b4.' } ,
                       {"date": "2015-05", "value":'.$b5.' } ,
                       {"date": "2015-06", "value":'.$b6.' } ,
                       {"date": "2015-07", "value":'.$b7.' } ,
                       {"date": "2015-08", "value":'.$b8.' } ,
                       {"date": "2015-09", "value":'.$b9.' } ,
                       {"date": "2015-10", "value":'.$b10.' } ,
                       {"date": "2015-11", "value":'.$b11.' } ,
                       {"date": "2015-12", "value":'.$b12.' } ,


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
        var chart = AmCharts.makeChart("chartdiv3", {
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

                echo ' {"date": "2016-01", "value":'.$c1.' } ,
                       {"date": "2016-02", "value":'.$c2.' } ,
                       {"date": "2016-03", "value":'.$c3.' } ,
                       {"date": "2016-04", "value":'.$c4.' } ,
                       {"date": "2016-05", "value":'.$c5.' } ,
                       {"date": "2016-06", "value":'.$c6.' } ,
                       {"date": "2016-07", "value":'.$c7.' } ,
                       {"date": "2016-08", "value":'.$c8.' } ,
                       {"date": "2016-09", "value":'.$c9.' } ,
                       {"date": "2016-10", "value":'.$c10.' } ,
                       {"date": "2016-11", "value":'.$c11.' } ,
                       {"date": "2016-12", "value":'.$c12.' } ,


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
        var chart = AmCharts.makeChart("chartdiv4", {
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

                echo ' {"date": "2017-01", "value":'.$d1.' } ,
                       {"date": "2017-02", "value":'.$d2.' } ,
                       {"date": "2017-03", "value":'.$d3.' } ,
                       {"date": "2017-04", "value":'.$d4.' } ,
                       {"date": "2017-05", "value":'.$d5.' } ,
                       {"date": "2017-06", "value":'.$d6.' } ,
                       {"date": "2017-07", "value":'.$d7.' } ,
                       {"date": "2017-08", "value":'.$d8.' } ,
                       {"date": "2017-09", "value":'.$d9.' } ,
                       {"date": "2017-10", "value":'.$d10.' } ,
                       {"date": "2017-11", "value":'.$d11.' } ,
                       {"date": "2017-12", "value":'.$d12.' } ,


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
        var chart = AmCharts.makeChart("chartdiv5", {
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

                echo ' {"date": "2018-01", "value":'.$e1.' } ,
                       {"date": "2018-02", "value":'.$e2.' } ,
                       {"date": "2018-03", "value":'.$e3.' } ,
                       {"date": "2018-04", "value":'.$e4.' } ,
                       {"date": "2018-05", "value":'.$e5.' } ,
                       {"date": "2018-06", "value":'.$e6.' } ,
                       {"date": "2018-07", "value":'.$e7.' } ,
                       {"date": "2018-08", "value":'.$e8.' } ,
                       {"date": "2018-09", "value":'.$e9.' } ,
                       {"date": "2018-10", "value":'.$e10.' } ,
                       {"date": "2018-11", "value":'.$e11.' } ,
                       {"date": "2018-12", "value":'.$e12.' } ,


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
        var chart = AmCharts.makeChart("chartdiv6", {
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

                echo ' {"date": "2014-01", "value":'.$f1.' } ,
                       {"date": "2014-02", "value":'.$f2.' } ,
                       {"date": "2014-03", "value":'.$f3.' } ,
                       {"date": "2014-04", "value":'.$f4.' } ,
                       {"date": "2014-05", "value":'.$f5.' } ,
                       {"date": "2014-06", "value":'.$f6.' } ,
                       {"date": "2014-07", "value":'.$f7.' } ,
                       {"date": "2014-08", "value":'.$f8.' } ,
                       {"date": "2014-09", "value":'.$f9.' } ,
                       {"date": "2014-10", "value":'.$f10.' } ,
                       {"date": "2014-11", "value":'.$f11.' } ,
                       {"date": "2014-12", "value":'.$f12.' } ,


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
        var chart = AmCharts.makeChart("chartdiv7", {
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

                echo ' {"date": "2015-01", "value":'.$g1.' } ,
                       {"date": "2015-02", "value":'.$g2.' } ,
                       {"date": "2015-03", "value":'.$g3.' } ,
                       {"date": "2015-04", "value":'.$g4.' } ,
                       {"date": "2015-05", "value":'.$g5.' } ,
                       {"date": "2015-06", "value":'.$g6.' } ,
                       {"date": "2015-07", "value":'.$g7.' } ,
                       {"date": "2015-08", "value":'.$g8.' } ,
                       {"date": "2015-09", "value":'.$g9.' } ,
                       {"date": "2015-10", "value":'.$g10.' } ,
                       {"date": "2015-11", "value":'.$g11.' } ,
                       {"date": "2015-12", "value":'.$g12.' } ,


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
        var chart = AmCharts.makeChart("chartdiv8", {
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

                echo ' {"date": "2016-01", "value":'.$h1.' } ,
                       {"date": "2016-02", "value":'.$h2.' } ,
                       {"date": "2016-03", "value":'.$h3.' } ,
                       {"date": "2016-04", "value":'.$h4.' } ,
                       {"date": "2016-05", "value":'.$h5.' } ,
                       {"date": "2016-06", "value":'.$h6.' } ,
                       {"date": "2016-07", "value":'.$h7.' } ,
                       {"date": "2016-08", "value":'.$h8.' } ,
                       {"date": "2016-09", "value":'.$h9.' } ,
                       {"date": "2016-10", "value":'.$h10.' } ,
                       {"date": "2016-11", "value":'.$h11.' } ,
                       {"date": "2016-12", "value":'.$h12.' } ,


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
        var chart = AmCharts.makeChart("chartdiv9", {
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

                echo ' {"date": "2017-01", "value":'.$i1.' } ,
                       {"date": "2017-02", "value":'.$i2.' } ,
                       {"date": "2017-03", "value":'.$i3.' } ,
                       {"date": "2017-04", "value":'.$i4.' } ,
                       {"date": "2017-05", "value":'.$i5.' } ,
                       {"date": "2017-06", "value":'.$i6.' } ,
                       {"date": "2017-07", "value":'.$i7.' } ,
                       {"date": "2017-08", "value":'.$i8.' } ,
                       {"date": "2017-09", "value":'.$i9.' } ,
                       {"date": "2017-10", "value":'.$i10.' } ,
                       {"date": "2017-11", "value":'.$i11.' } ,
                       {"date": "2017-12", "value":'.$i12.' } ,


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
        var chart = AmCharts.makeChart("chartdiv10", {
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

                echo ' {"date": "2018-01", "value":'.$j1.' } ,
                       {"date": "2018-02", "value":'.$j2.' } ,
                       {"date": "2018-03", "value":'.$j3.' } ,
                       {"date": "2018-04", "value":'.$j4.' } ,
                       {"date": "2018-05", "value":'.$j5.' } ,
                       {"date": "2018-06", "value":'.$j6.' } ,
                       {"date": "2018-07", "value":'.$j7.' } ,
                       {"date": "2018-08", "value":'.$j8.' } ,
                       {"date": "2018-09", "value":'.$j9.' } ,
                       {"date": "2018-10", "value":'.$j10.' } ,
                       {"date": "2018-11", "value":'.$j11.' } ,
                       {"date": "2018-12", "value":'.$j12.' } ,


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
                <li class="menu-active"><a style="color: #333;" href="{{ url('get_instagram_images')}}">Back</a></li>
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
<div class="container wow fadeInUp">
    <div class="section-header"> <br> <br>
        <h4>Jawwal Logo on the last 5 years </h4>
    </div>
</div>

<div class="container wow fadeInUp">
    <div class="section-header"> <br> <br>
        <h4>Jawwal Logo in 2014</h4>
    </div>
</div>
<div id="chartdiv1" style="width:100% ;height:500px"></div>
<div class="container wow fadeInUp">
    <div class="section-header"> <br> <br>
        <h4>Jawwal Logo in 2014in 2015</h4>
    </div>
</div>
<div id="chartdiv2" style="width:100% ;height:500px"></div>
<div class="container wow fadeInUp">
    <div class="section-header"> <br> <br>
        <h4>Jawwal Logo in 2016 </h4>
    </div>
</div>
<div id="chartdiv3" style="width:100% ;height:500px"></div>
<div class="container wow fadeInUp">
    <div class="section-header"> <br> <br>
        <h4>Jawwal Logo in 2017 </h4>
    </div>
</div>
<div id="chartdiv4" style="width:100% ;height:500px"></div>
<div class="container wow fadeInUp">
    <div class="section-header"> <br> <br>
        <h4>Jawwal Logo in 2018 </h4>
    </div>
</div>
<div id="chartdiv5" style="width:100% ;height:500px"></div>



<div class="container wow fadeInUp">
    <div class="section-header"> <br> <br>
        <h4>Wataniya Logo on the last 5 years  </h4>
    </div>
</div>


<div class="container wow fadeInUp">
    <div class="section-header"> <br> <br>
        <h4>Wataniya Logo in 2014 </h4>
    </div>
</div>
<div id="chartdiv6" style="width:100% ;height:500px"></div>
<div class="container wow fadeInUp">
    <div class="section-header"> <br> <br>
        <h4>Wataniya Logo in 2015 </h4>
    </div>
</div>
<div id="chartdiv7" style="width:100% ;height:500px"></div>
<div class="container wow fadeInUp">
    <div class="section-header"> <br> <br>
        <h4>Wataniya Logo in 2016 </h4>
    </div>
</div>
<div id="chartdiv8" style="width:100% ;height:500px"></div>
<div class="container wow fadeInUp">
    <div class="section-header"> <br> <br>
        <h4>Wataniya Logo in 2017 </h4>
    </div>
</div>
<div id="chartdiv9" style="width:100% ;height:500px"></div>
<div class="container wow fadeInUp">
    <div class="section-header"> <br> <br>
        <h4>Wataniya Logo in 2018 </h4>
    </div>
</div>
<div id="chartdiv10" style="width:100% ;height:500px"></div>

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
