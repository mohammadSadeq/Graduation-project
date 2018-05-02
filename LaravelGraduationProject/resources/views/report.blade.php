<?php
//include '/../vendor/autoload.php';
use PHPJasper\PHPJasper;

//header("Content-type:application/pdf");
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
    $collection3 = $db->selectCollection("Jawwalimages");
} catch (Exception $e) {
}

$x=0;
$y=0;
$cursor = $collection3->find();
foreach($cursor as $document){

    $x++;
}

$cursor = $collection1->find();
foreach($cursor as $document){

    $y++;
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

$num1=0; $num2=0; $num3=0; $num4=0; $num5=0; $num6=0; $num7=0; $num8=0; $num9=0;

try {
    $collection10 = $db->selectCollection("Nablusexist");
} catch (Exception $e) {
}
try {
    $collection11 = $db->selectCollection("Ramallahexist");
} catch (Exception $e) {
}
try {
    $collection12 = $db->selectCollection("Jerusalemexist");
} catch (Exception $e) {
}
try {
    $collection13 = $db->selectCollection("Bethlehemexist");
} catch (Exception $e) {
}
try {
    $collection14 = $db->selectCollection("Jeninexist");
} catch (Exception $e) {
}
try {
    $collection15 = $db->selectCollection("Tulkarmexist");
} catch (Exception $e) {
}
try {
    $collection16 = $db->selectCollection("Hebronexist");
} catch (Exception $e) {
}
try {
    $collection17 = $db->selectCollection("Tubasexist");
} catch (Exception $e) {
}
try {
    $collection18 = $db->selectCollection("Gazaexist");
} catch (Exception $e) {
}
$cursor = $collection10->find();
foreach($cursor as $document){

    $num1++;
}
$cursor = $collection11->find();
foreach($cursor as $document){

    $num2++;
}
$cursor = $collection12->find();
foreach($cursor as $document){

    $num3++;
}
$cursor = $collection13->find();
foreach($cursor as $document){

    $num4++;
}
$cursor = $collection14->find();
foreach($cursor as $document){

    $num5++;
}
$cursor = $collection15->find();
foreach($cursor as $document){

    $num6++;
}

$cursor = $collection16->find();
foreach($cursor as $document){

    $num7++;
}
$cursor = $collection17->find();
foreach($cursor as $document){

    $num8++;
}
$cursor = $collection18->find();
foreach($cursor as $document){

    $num9++;
}


$jasp='<?xml version="1.0" encoding="UTF-8"?>

<!-- Created with Jaspersoft Studio version last-->
<jasperReport xmlns="http://jasperreports.sourceforge.net/jasperreports" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://jasperreports.sourceforge.net/jasperreports http://jasperreports.sourceforge.net/xsd/jasperreport.xsd" name="Characterset-Test" language="groovy" pageWidth="595" pageHeight="842" columnWidth="535" leftMargin="20" rightMargin="20" topMargin="20" bottomMargin="20" uuid="527ae3c1-c10e-4b41-b983-14305308c942">
<property name="ireport.zoom" value="1.5"/>
	<property name="ireport.x" value="0"/>
	<property name="ireport.y" value="0"/>
	<queryString>
		<![CDATA[]]>
	</queryString>
	<background>
		<band/>
	</background>
	<title>
		<band height="72">
			<frame>
				<reportElement mode="Opaque" x="-20" y="-20" width="595" height="92" backcolor="#006699" uuid="3501dac6-be9b-47b1-bf09-8b25fbc6c79f"/>
				<staticText>
					<reportElement x="20" y="20" width="349" height="45" forecolor="#FFFFFF" uuid="2464c9ca-82a1-48c9-87ea-b68192294c4a"/>
					<textElement>
						<font fontName="Arial" size="20" isBold="true"/>
					</textElement>
					<text><![CDATA['.$logo.' '.' Logo on social media Report]]></text>
				</staticText>
			</frame>
		</band>
	</title>
	<pageHeader>
		<band height="50">
			<line>
				<reportElement x="-20" y="49" width="595" height="1" forecolor="#666666" uuid="a511fbdc-5dd2-4d02-9b49-f7d8f8b0feb3"/>
			</line>
			<staticText>
				<reportElement x="14" y="19" width="521" height="30" uuid="6f85b46e-f5b1-4f07-b38c-aa0f6bf985e3"/>
				<textElement>
					<font fontName="Arial" size="15"/>
				</textElement>
				<text><![CDATA[ This Report shows the fame of your Logo on Twitter and Instagram depending on data collecting by this application  ]]></text>
			</staticText>
		</band>
	</pageHeader>
	<columnHeader>
		<band height="5"/>
	</columnHeader>
	<detail>
		<band height="650">


			<staticText>
				<reportElement x="14" y="50" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="15"/>
				</textElement>

				<text><![CDATA[images collected from Social Media either by hashtag ob by location ]]></text>
			</staticText>


			<staticText>
				<reportElement x="40" y="90" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[First : images collected By Hashtag]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="120" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[Number of images collected :     '.$x.'               Number of images containing Logo :     '.$y.']]></text>
			</staticText>


			<staticText>
				<reportElement x="60" y="150" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[Spread of Logo among monthes in the last 5 years ]]></text>
			</staticText>


			<staticText>
				<reportElement x="60" y="180" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[Monthe                2014            2015            2016            2017            2018   ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="210" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[January                     '.$a1.'              '.$b1.'                 '.$c1.'                 '.$d1.'                 '.$e1.'  ]]></text>

			</staticText>

			<staticText>
				<reportElement x="60" y="240" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[February                   '.$a2.'              '.$b2.'                 '.$c2.'                 '.$d2.'                  '.$e2.'  ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="270" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[March                       '.$a3.'              '.$b3.'                   '.$c3.'                   '.$d3.'                  '.$e3.'    ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="300" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[April                          '.$a4.'             '.$b4.'                 '.$c4.'                  '.$d4.'                  '.$e4.'     ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="330" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[May                          '.$a5.'              '.$b5.'                 '.$c5.'                 '.$d5.'                  '.$e5.'     ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="360" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[June                         '.$a6.'              '.$b6.'                 '.$c6.'                 '.$d6.'                  '.$e6.'     ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="390" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[July                          '.$a7.'              '.$b7.'                 '.$c7.'                  '.$d7.'                 '.$e7.'     ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="420" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[August                     '.$a8.'              '.$b8.'                 '.$c8.'                  '.$d8.'                 '.$e8.'     ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="450" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[September               '.$a9.'              '.$b9.'                 '.$c9.'                  '.$d9.'                 '.$e9.'     ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="480" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[October                    '.$a10.'              '.$b10.'                 '.$c10.'                   '.$d10.'                '.$e10.'   ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="510" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[November                '.$a11.'             '.$b11.'                  '.$c11.'                    '.$d11.'                 '.$e11.'     ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="540" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[December               '.$a12.'              '.$b12.'                  '.$c12.'                  '.$d12.'                 '.$e12.'    ]]></text>
			</staticText>

		</band>

		<band height="400">

		<staticText>
			<reportElement x="40" y="20" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"/>
			<textElement>
				<font fontName="Arial" size="12"/>
			</textElement>

			<text><![CDATA[Second : images collected By Location]]></text>
		</staticText>



		<staticText>
			<reportElement x="60" y="50" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"  backcolor = "#70A9A9"/>
			<textElement>
				<font fontName="Arial" size="12"/>
			</textElement>

			<text><![CDATA[ city                        Number of images containing Logo ]]></text>
		</staticText>

			<staticText>
				<reportElement x="60" y="80" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"  backcolor = "#70A9A9"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[ Nablus                                '.$num1.'                   ]]></text>
			</staticText>
			<staticText>
				<reportElement x="60" y="110" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"  backcolor = "#70A9A9"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[ Ramallah                            '.$num2.'                ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="140" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"  backcolor = "#70A9A9"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[ Jerusalem                           '.$num3.'                ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="170" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"  backcolor = "#70A9A9"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[ Bethlehem                          '.$num4.'                ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="200" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"  backcolor = "#70A9A9"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[ Jenin                                   '.$num5.'               ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="230" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"  backcolor = "#70A9A9"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[ Tulkarm                              '.$num6.'                ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="260" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"  backcolor = "#70A9A9"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[ Hebron                               '.$num7.'                ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="290" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"  backcolor = "#70A9A9"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[ Tubas                                 '.$num8.'                ]]></text>
			</staticText>

			<staticText>
				<reportElement x="60" y="320" width="521" height="24" uuid="c15d0e17-2850-4010-b65a-e4822a371ba3"  backcolor = "#70A9A9"/>
				<textElement>
					<font fontName="Arial" size="12"/>
				</textElement>

				<text><![CDATA[ Gaza                                  '.$num9.'                ]]></text>
			</staticText>


		</band>
	</detail>

	<columnFooter>
		<band/>
	</columnFooter>
	<pageFooter>
		<band height="17">
			<textField>
				<reportElement mode="Opaque" x="0" y="4" width="515" height="13" backcolor="#E6E6E6" uuid="470071d6-9789-41e5-b8f6-3e4340cc0ab2"/>
				<textElement textAlignment="Right"/>
				<textFieldExpression><![CDATA["Page "+$V{PAGE_NUMBER}+" of"]]></textFieldExpression>
			</textField>
			<textField evaluationTime="Report">
				<reportElement mode="Opaque" x="515" y="4" width="40" height="13" backcolor="#E6E6E6" uuid="f64278b8-d5b7-41e6-a40d-0e8929c0b848"/>
				<textFieldExpression><![CDATA[" " + $V{PAGE_NUMBER}]]></textFieldExpression>
			</textField>
			<textField pattern="EEEEE dd MMMMM yyyy">
				<reportElement x="0" y="4" width="100" height="13" uuid="2696db9f-481e-441c-8557-40163e951201"/>
				<textFieldExpression><![CDATA[new java.util.Date()]]></textFieldExpression>
			</textField>
		</band>
	</pageFooter>
	<summary>
		<band/>
	</summary>
</jasperReport>



';
file_put_contents("C:/Users/hp/Desktop/project/Graduation-project/LaravelGraduationProject/vendor/geekcom/phpjasper/examples/My_Report.jrxml",$jasp);


$input1 = 'C:/Users/hp/Desktop/project/Graduation-project/LaravelGraduationProject/vendor/geekcom/phpjasper/examples/My_Report.jrxml';


$jasper = new PHPJasper;
$jasper->compile($input1)->execute();


$input = 'C:/Users/hp/Desktop/project/Graduation-project/LaravelGraduationProject/vendor/geekcom/phpjasper/examples/My_Report.jasper';
$output = 'C:/Users/hp/Desktop/project/Graduation-project/LaravelGraduationProject/public/img';

$jdbc_dir = 'C:/Users/hp/Desktop/project/Graduation-project/LaravelGraduationProject/vendor/geekcom/phpjasper/bin/jaspertarter/jdbc';

$options = [
    'format' => ['pdf'],
];


$jasper->process(
    $input,
    $output,
    $options
)->execute();

 //return response()->download('C:/Users/hp/Desktop/project/Graduation-project/LaravelGraduationProject/vendor/geekcom/phpjasper/examples/My_Report.pdf');




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

  spatchEvent(new MouseEvent('click'));


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


                    <a id="downloadLink" href="img/My_Report.pdf" target="_blank"
                       type="application/octet-stream" download="<?php echo $logo." "; ?>report.pdf">download it now</a>



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
