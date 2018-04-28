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
                case 'April' : $g4++;   break;
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
                title: " spread of Jawwal Logo along the monthes in 2014",
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
                ["Jan",<?php echo $b1;?> , "#51990a"],
                ["Feb",<?php echo $b2;?> , "#51990a"],
                ["Mar",<?php echo $b3;?> , "#51990a"],
                ["Apr",<?php echo $b4;?> , "#51990a"],
                ["May",<?php echo $b5;?> , "#51990a"],
                ["June",<?php echo $b6;?> , "#51990a"],
                ["July",<?php echo $b7;?> , "#51990a"],
                ["Aug",<?php echo $b8;?> , "#51990a"],
                ["Sept",<?php echo $b9;?> , "#51990a"],
                ["Oct",<?php echo $b10;?> , "#51990a"],
                ["Nov",<?php echo $b11;?> , "#51990a"],
                ["Dec",<?php echo $b12;?> , "#51990a"],

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
                title: " spread of Wataniya Logo along the monthes in 2015",
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

    <script type="text/javascript">



        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Jan",<?php echo $c1;?> , "#51990a"],
                ["Feb",<?php echo $c2;?> , "#51990a"],
                ["Mar",<?php echo $c3;?> , "#51990a"],
                ["Apr",<?php echo $c4;?> , "#51990a"],
                ["May",<?php echo $c5;?> , "#51990a"],
                ["June",<?php echo $c6;?> , "#51990a"],
                ["July",<?php echo $c7;?> , "#51990a"],
                ["Aug",<?php echo $c8;?> , "#51990a"],
                ["Sept",<?php echo $c9;?> , "#51990a"],
                ["Oct",<?php echo $c10;?> , "#51990a"],
                ["Nov",<?php echo $c11;?> , "#51990a"],
                ["Dec",<?php echo $c12;?> , "#51990a"],

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
                title: " spread of Jawwal Logo along the monthes in 2016",
                width: 1000,
                height: 500,
                bar: {groupWidth: "65%"},
                legend: {position: 'none'},
                vAxis: {minValue: 0},
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values3"));
            chart.draw(view, options);
        }
    </script>


    <script type="text/javascript">



        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Jan",<?php echo $d1;?> , "#51990a"],
                ["Feb",<?php echo $d2;?> , "#51990a"],
                ["Mar",<?php echo $d3;?> , "#51990a"],
                ["Apr",<?php echo $d4;?> , "#51990a"],
                ["May",<?php echo $d5;?> , "#51990a"],
                ["June",<?php echo $d6;?> , "#51990a"],
                ["July",<?php echo $d7;?> , "#51990a"],
                ["Aug",<?php echo $d8;?> , "#51990a"],
                ["Sept",<?php echo $d9;?> , "#51990a"],
                ["Oct",<?php echo $d10;?> , "#51990a"],
                ["Nov",<?php echo $d11;?> , "#51990a"],
                ["Dec",<?php echo $d12;?> , "#51990a"],

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
                title: " spread of Wataniya Logo along the monthes in 2017",
                width: 1000,
                height: 500,
                bar: {groupWidth: "65%"},
                legend: {position: 'none'},
                vAxis: {minValue: 0},
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values4"));
            chart.draw(view, options);
        }
    </script>

    <script type="text/javascript">



        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Jan",<?php echo $e1;?> , "#51990a"],
                ["Feb",<?php echo $e2;?> , "#51990a"],
                ["Mar",<?php echo $e3;?> , "#51990a"],
                ["Apr",<?php echo $e4;?> , "#51990a"],
                ["May",<?php echo $e5;?> , "#51990a"],
                ["June",<?php echo $e6;?> , "#51990a"],
                ["July",<?php echo $e7;?> , "#51990a"],
                ["Aug",<?php echo $e8;?> , "#51990a"],
                ["Sept",<?php echo $e9;?> , "#51990a"],
                ["Oct",<?php echo $e10;?> , "#51990a"],
                ["Nov",<?php echo $e11;?> , "#51990a"],
                ["Dec",<?php echo $e12;?> , "#51990a"],

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
                title: " spread of Wataniya Logo along the monthes in 2018",
                width: 1000,
                height: 500,
                bar: {groupWidth: "65%"},
                legend: {position: 'none'},
                vAxis: {minValue: 0},
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values5"));
            chart.draw(view, options);
        }
    </script>



    <!--************************************************************************************************-->


    <script type="text/javascript">



        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Jan",<?php echo $f1;?> , "#f44242"],
                ["Feb",<?php echo $f2;?> , "#f44242"],
                ["Mar",<?php echo $f3;?> , "#f44242"],
                ["Apr",<?php echo $f4;?> , "#f44242"],
                ["May",<?php echo $f5;?> , "#f44242"],
                ["June",<?php echo $f6;?> , "#f44242"],
                ["July",<?php echo $f7;?> , "#f44242"],
                ["Aug",<?php echo $f8;?> , "#f44242"],
                ["Sept",<?php echo $f9;?> , "#f44242"],
                ["Oct",<?php echo $f10;?> , "#f44242"],
                ["Nov",<?php echo $f11;?> , "#f44242"],
                ["Dec",<?php echo $f12;?> , "#f44242"],

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
                title: " spread of Wataniya Logo along the monthes in 2014",
                width: 1000,
                height: 500,
                bar: {groupWidth: "65%"},
                legend: {position: 'none'},
                vAxis: {minValue: 0},
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values6"));
            chart.draw(view, options);
        }
    </script>

    <script type="text/javascript">



        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Jan",<?php echo $g1;?> , "#f44242"],
                ["Feb",<?php echo $g2;?> , "#f44242"],
                ["Mar",<?php echo $g3;?> , "#f44242"],
                ["Apr",<?php echo $g4;?> , "#f44242"],
                ["May",<?php echo $g5;?> , "#f44242"],
                ["June",<?php echo $g6;?> , "#f44242"],
                ["July",<?php echo $g7;?> , "#f44242"],
                ["Aug",<?php echo $g8;?> , "#f44242"],
                ["Sept",<?php echo $g9;?> , "#f44242"],
                ["Oct",<?php echo $g10;?> , "#f44242"],
                ["Nov",<?php echo $g11;?> , "#f44242"],
                ["Dec",<?php echo $g12;?> , "#f44242"],

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
                title: " spread of Wataniya Logo along the monthes in 2015",
                width: 1000,
                height: 500,
                bar: {groupWidth: "65%"},
                legend: {position: 'none'},
                vAxis: {minValue: 0},
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values7"));
            chart.draw(view, options);
        }
    </script>

    <script type="text/javascript">



        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Jan",<?php echo $h1;?> , "#f44242"],
                ["Feb",<?php echo $h2;?> , "#f44242"],
                ["Mar",<?php echo $h3;?> , "#f44242"],
                ["Apr",<?php echo $h4;?> , "#f44242"],
                ["May",<?php echo $h5;?> , "#f44242"],
                ["June",<?php echo $h6;?> , "#f44242"],
                ["July",<?php echo $h7;?> , "#f44242"],
                ["Aug",<?php echo $h8;?> , "#f44242"],
                ["Sept",<?php echo $h9;?> , "#f44242"],
                ["Oct",<?php echo $h10;?> , "#f44242"],
                ["Nov",<?php echo $h11;?> , "#f44242"],
                ["Dec",<?php echo $h12;?> , "#f44242"],

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
                title: " spread of Wataniya Logo along the monthes in 2016",
                width: 1000,
                height: 500,
                bar: {groupWidth: "65%"},
                legend: {position: 'none'},
                vAxis: {minValue: 0},
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values8"));
            chart.draw(view, options);
        }
    </script>

    <script type="text/javascript">



        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Jan",<?php echo $i1;?> , "#f44242"],
                ["Feb",<?php echo $i2;?> , "#f44242"],
                ["Mar",<?php echo $i3;?> , "#f44242"],
                ["Apr",<?php echo $i4;?> , "#f44242"],
                ["May",<?php echo $i5;?> , "#f44242"],
                ["June",<?php echo $i6;?> , "#f44242"],
                ["July",<?php echo $i7;?> , "#f44242"],
                ["Aug",<?php echo $i8;?> , "#f44242"],
                ["Sept",<?php echo $i9;?> , "#f44242"],
                ["Oct",<?php echo $i10;?> , "#f44242"],
                ["Nov",<?php echo $i11;?> , "#f44242"],
                ["Dec",<?php echo $i12;?> , "#f44242"],

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
                title: " spread of Wataniya Logo along the monthes in 2017",
                width: 1000,
                height: 500,
                bar: {groupWidth: "65%"},
                legend: {position: 'none'},
                vAxis: {minValue: 0},
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values9"));
            chart.draw(view, options);
        }
    </script>

    <script type="text/javascript">



        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Jan",<?php echo $j1;?> , "#f44242"],
                ["Feb",<?php echo $j2;?> , "#f44242"],
                ["Mar",<?php echo $j3;?> , "#f44242"],
                ["Apr",<?php echo $j4;?> , "#f44242"],
                ["May",<?php echo $j5;?> , "#f44242"],
                ["June",<?php echo $j6;?> , "#f44242"],
                ["July",<?php echo $j7;?> , "#f44242"],
                ["Aug",<?php echo $j8;?> , "#f44242"],
                ["Sept",<?php echo $j9;?> , "#f44242"],
                ["Oct",<?php echo $j10;?> , "#f44242"],
                ["Nov",<?php echo $j11;?> , "#f44242"],
                ["Dec",<?php echo $j12;?> , "#f44242"],

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
                title: " spread of Wataniya Logo along the monthes in 2018",
                width: 1000,
                height: 500,
                bar: {groupWidth: "65%"},
                legend: {position: 'none'},
                vAxis: {minValue: 0},
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values10"));
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
    <style>
        #chartdiv3 {
            width	: 100%;
            height	: 500px;
        }

    </style>
    <style>
        #chartdiv4 {
            width	: 100%;
            height	: 500px;
        }

    </style>
    <style>
        #chartdiv5 {
            width	: 100%;
            height	: 500px;
        }

    </style>
    <style>
        #chartdiv6 {
            width	: 100%;
            height	: 500px;
        }

    </style>
    <style>
        #chartdiv7 {
            width	: 100%;
            height	: 500px;
        }

    </style>
    <style>
        #chartdiv8 {
            width	: 100%;
            height	: 500px;
        }

    </style>
    <style>
        #chartdiv9 {
            width	: 100%;
            height	: 500px;
        }

    </style>
    <style>
        #chartdiv10 {
            width	: 100%;
            height	: 500px;
        }

    </style>




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


<!--Div that will hold the column chart-->
<div  id="columnchart_values" style=" margin-right: 400px ;margin-left: 350px; margin-top: 100px"></div>
<div  id="columnchart_values1" style=" margin-right: 400px ;margin-left: 250px; margin-top: 100px"></div>

<div  id="columnchart_values2" style=" margin-right: 400px ;margin-left: 250px; margin-top: 100px"></div>

<div  id="columnchart_values3" style=" margin-right: 400px ;margin-left: 250px; margin-top: 100px"></div>

<div  id="columnchart_values4" style=" margin-right: 400px ;margin-left: 250px; margin-top: 100px"></div>

<div  id="columnchart_values5" style=" margin-right: 400px ;margin-left: 250px; margin-top: 100px"></div>

<div  id="columnchart_values6" style=" margin-right: 400px ;margin-left: 250px; margin-top: 100px"></div>

<div  id="columnchart_values7" style=" margin-right: 400px ;margin-left: 250px; margin-top: 100px"></div>
<div  id="columnchart_values8" style=" margin-right: 400px ;margin-left: 250px; margin-top: 100px"></div>
<div  id="columnchart_values9" style=" margin-right: 400px ;margin-left: 250px; margin-top: 100px"></div>
<div  id="columnchart_values10" style=" margin-right: 400px ;margin-left: 250px; margin-top: 100px"></div>


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
