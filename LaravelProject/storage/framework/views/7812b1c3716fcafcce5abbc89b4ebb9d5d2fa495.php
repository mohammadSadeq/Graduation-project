<?php
$str='wesam';

try {
    $connection = new MongoClient();
} catch (MongoConnectionException $e) {
}
$db=$connection->ProDB;
try {
    $collection1 = $db->selectCollection("Jawwalexist");
} catch (Exception $e) {
}

try {
    $collection2 = $db->selectCollection("Wataniyaexist");
} catch (Exception $e) {
}

$x1=0;
$x2=0;
$cursor1 = $collection1->find();
foreach($cursor1 as $document){

    $x1++;
}

$cursor2 = $collection2->find();
foreach($cursor2 as $document){

    $x2++;
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
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Jawwal",<?php echo $x1;?> , "#51990a"],
                ["Wataniya", <?php echo $x2;?>, "#f20404"],

            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                { calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation" },
                2]);

            var options = {
                title: "Number of Jawwal and Wataniya images containing Logo ",
                width: 600,
                height: 500,
                bar: {groupWidth: "65%"},
                legend: {position: 'none'},
                vAxis: {minValue: 0},
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }
    </script>

</head>

<body>

<header id="header">
    <div class="container">



        <nav id="nav-menu-container" >
            <ul class="nav-menu" >
                <li class="menu-active" style="background-color: #5e5a5a"><a href="<?php echo e(url('home')); ?>">Home</a></li>
                <li class="menu-active" style="background-color: #5e5a5a"><a href="<?php echo e(url('searchimages')); ?>">Back</a></li>
                <li style="background-color: #5e5a5a"><a href="<?php echo e(url('logout')); ?>">Logout</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--Div that will hold the column chart-->
<div  id="columnchart_values" style="width: 900px; height: 300px; margin-left: 350px; margin-top: 50px"></div>
</body>
</html>