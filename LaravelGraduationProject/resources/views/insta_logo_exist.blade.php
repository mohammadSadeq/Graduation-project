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
//$response2 = $collection2->drop();

$command = escapeshellcmd('C:/Users/hp/PhpstormProjects/LaravelProject/Demo/appp.py');
$output = shell_exec($command);
echo $output;


$a=0;
$b=0;
$cursor = $collection1->find();
foreach($cursor as $document){

    $a++;
}

$cursor = $collection2->find();
foreach($cursor as $document){

    $b++;
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


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Jawwal",<?php echo $a;?> , "#51990a"],
                ["Wataniya", <?php echo $b;?>, "#f20404"],

            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                { calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation" },
                2]);

            var options = {
                title: "Number of Jawwal and Wataniya images containing Logo",
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


</head>
<body style="background-color:#fff">


<header id="header">
    <div class="container">



        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active" ><a style="color: #333;" href="{{ url('home')}}">Home</a></li>
                <li class="menu-active"><a style="color: #333;" href="{{ url('get_jawwalandwataniya_images')}}">Back</a></li>
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



<!--</section>--><!-- #hero -->



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
