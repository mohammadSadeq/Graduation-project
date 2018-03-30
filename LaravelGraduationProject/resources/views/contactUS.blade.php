<!DOCTYPE html>
<html>
<head>
    <title>Logo Detection</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">


</head>
<body>

<header id="header">
    <div class="container">



        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active" ><a style="color: #333;" href="{{ url('home')}}">Home</a></li>
                <li><a  style="color: #333;" href="{{ url('logout') }}">Logout</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<br> <br> <br> <br> <br>








<div class="container">
    <h1>Contact US to train a model for detecting your own Logo</h1>

    @if(Session::has('success'))
           <div class="alert alert-success">
                 {{ Session::get('success') }}
               </div>
    @endif

    {!! Form::open(['route'=>'contact.store','url'=>'/contact','files'=>true,'enctype'=>'multipart/form-data']) !!}

    <div class="form-group {{ $errors->has('cname') ? 'has-error' : '' }}">
        {!! Form::label('Name:') !!}
        {!! Form::text('cname', old('cname'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
        <span class="text-danger">{{ $errors->first('cname') }}</span>
    </div>


    <div class="form-group {{ $errors->has('cemail') ? 'has-error' : '' }}">
        {!! Form::label('Email:') !!}
        {!! Form::text('cemail', old('cemail'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
        <span class="text-danger">{{ $errors->first('cemail') }}</span>
    </div>

    <div class="form-group {{ $errors->has('Logoname') ? 'has-error' : '' }}">
        {!! Form::label('Logo Name:') !!}
        {!! Form::text('Logoname', old('Logoname'), ['class'=>'form-control', 'placeholder'=>'Enter Logo Name']) !!}
        <span class="text-danger">{{ $errors->first('Logoname') }}</span>
    </div>


    <div class="form-group {{ $errors->has('Logoimage') ? 'has-error' : '' }}">
        {!! Form::label('Logo image:') !!}
        {!! Form::file('Logoimage',  ['class'=>'form-control']) !!}

    </div>


    <div class="form-group {{ $errors->has('modelname') ? 'has-error' : '' }}">
        {!! Form::label('Model Name:') !!}
        {!! Form::select('modelname', ['Single Shot Multibox Detector (SSD) with MobileNets' => 'Single Shot Multibox Detector (SSD) with MobileNets', 'Faster RCNN' => 'Faster RCNN', 'Inception v3 model' => 'Inception v3 model'], ['class'=>'form-control']) !!}
        <span class="text-danger">{{ $errors->first('modelname') }}</span>
    </div>



    <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
        {!! Form::label('Comment:') !!}
        {!! Form::textarea('comment', old('comment'), ['class'=>'form-control', 'placeholder'=>'Enter a coment']) !!}
        <span class="text-danger">{{ $errors->first('comment') }}</span>
    </div>

    <div class="form-group">
        <button class="btn btn-success">Contact US</button>
    </div>

    {!! Form::close() !!}

</div>

</body>
</html>