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
                <li class="menu-active" ><a style="color: #333;" href="<?php echo e(url('home')); ?>">Home</a></li>
                <li><a  style="color: #333;" href="<?php echo e(url('logout')); ?>">Logout</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<br> <br> <br> <br> <br>








<div class="container">
    <h1>Contact US to train a model for detecting your own Logo</h1>

    <?php if(Session::has('success')): ?>
           <div class="alert alert-success">
                 <?php echo e(Session::get('success')); ?>

               </div>
    <?php endif; ?>

    <?php echo Form::open(['route'=>'contact.store','url'=>'/contact','files'=>true,'enctype'=>'multipart/form-data']); ?>


    <div class="form-group <?php echo e($errors->has('cname') ? 'has-error' : ''); ?>">
        <?php echo Form::label('Name:'); ?>

        <?php echo Form::text('cname', old('cname'), ['class'=>'form-control', 'placeholder'=>'Enter Name']); ?>

        <span class="text-danger"><?php echo e($errors->first('cname')); ?></span>
    </div>


    <div class="form-group <?php echo e($errors->has('cemail') ? 'has-error' : ''); ?>">
        <?php echo Form::label('Email:'); ?>

        <?php echo Form::text('cemail', old('cemail'), ['class'=>'form-control', 'placeholder'=>'Enter Email']); ?>

        <span class="text-danger"><?php echo e($errors->first('cemail')); ?></span>
    </div>

    <div class="form-group <?php echo e($errors->has('Logoname') ? 'has-error' : ''); ?>">
        <?php echo Form::label('Logo Name:'); ?>

        <?php echo Form::text('Logoname', old('Logoname'), ['class'=>'form-control', 'placeholder'=>'Enter Logo Name']); ?>

        <span class="text-danger"><?php echo e($errors->first('Logoname')); ?></span>
    </div>


    <div class="form-group <?php echo e($errors->has('Logoimage') ? 'has-error' : ''); ?>">
        <?php echo Form::label('Logo image:'); ?>

        <?php echo Form::file('Logoimage',  ['class'=>'form-control']); ?>


    </div>


    <div class="form-group <?php echo e($errors->has('modelname') ? 'has-error' : ''); ?>">
        <?php echo Form::label('Model Name:'); ?>

        <?php echo Form::select('modelname', ['Single Shot Multibox Detector (SSD) with MobileNets' => 'Single Shot Multibox Detector (SSD) with MobileNets', 'Faster RCNN' => 'Faster RCNN', 'Inception v3 model' => 'Inception v3 model'], ['class'=>'form-control']); ?>

        <span class="text-danger"><?php echo e($errors->first('modelname')); ?></span>
    </div>



    <div class="form-group <?php echo e($errors->has('comment') ? 'has-error' : ''); ?>">
        <?php echo Form::label('Comment:'); ?>

        <?php echo Form::textarea('comment', old('comment'), ['class'=>'form-control', 'placeholder'=>'Enter a coment']); ?>

        <span class="text-danger"><?php echo e($errors->first('comment')); ?></span>
    </div>

    <div class="form-group">
        <button class="btn btn-success">Contact US</button>
    </div>

    <?php echo Form::close(); ?>


</div>

</body>
</html>