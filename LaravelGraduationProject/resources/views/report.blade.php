<?php
//include '/../vendor/autoload.php';
use PHPJasper\PHPJasper;

$input1 = 'C:/Users/hp/Desktop/project/Graduation-project/LaravelGraduationProject/vendor/geekcom/phpjasper/examples/My_Report.jrxml';


$jasper = new PHPJasper;
$jasper->compile($input1)->execute();


$input = 'C:/Users/hp/Desktop/project/Graduation-project/LaravelGraduationProject/vendor/geekcom/phpjasper/examples/My_Report.jasper';
$output = 'C:/Users/hp/Desktop/project/Graduation-project/LaravelGraduationProject/vendor/geekcom/phpjasper/examples';

$jdbc_dir = 'C:/Users/hp/Desktop/project/Graduation-project/LaravelGraduationProject/vendor/geekcom/phpjasper/bin/jaspertarter/jdbc';

$options = [
    'format' => ['pdf'],
];


$jasper->process(
    $input,
    $output,
    $options
)->execute();



$id= \Auth::user()->id;
$logo = DB::table('contact')
    ->where('id', $id)
    ->value('logoname');








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


$jasper->arrayParameter=array("parameter1"=>$a1);


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

    <script>

        var delay = 3000;
        window.setTimeout(function(){$('#downloadLink')[0].click();},delay);
    </script>

</head>
<body>


<header id="header">
    <div class="container">



        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a style="color: #333;" href="{{ url('home')}}">Home</a></li>

                <li class="menu-active"><a style="color: #333;" href="{{ url('home')}}">Back</a></li>
                <li><a  style="color: #333;"href="{{ url('logout') }}">Logout</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->





<section id="contact">
    <div class="container wow fadeInUp">
        <div class="section-header"> <br> <br>
            <h3 class="section-title">Your Report has been generated </h3>
        </div>
    </div>

    <br><br> <br>

    <div class="container wow fadeInUp">
        <div class="row justify-content-center">

            <div class="col-lg-3 col-md-6">

            </div>

            <div class="col-lg-5 col-md-8">
                <div class="form">


                    <a id="downloadLink" href="/My_Report.pdf" target="_blank"
                       type="application/octet-stream" download="<?php echo $logo; ?>report.pdf">download it now</a>


                </div>
            </div>

        </div>
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    </div>
</section><!-- #contact -->

<!--==========================
Footer
============================-->
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
