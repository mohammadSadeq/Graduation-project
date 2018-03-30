

<!DOCTYPE html>
<html lang="en">
<h1>Sign In</h1>

<?php if($errors->any ()): ?>

    <ul>

        <?php echo e(implode ('', $errors->all ('<li>: message</li>'))); ?>


    </ul>

<?php endif; ?>

<?php echo e(Form::open (array ('url' => 'logincheck'))); ?>


<p> <?php echo e(Form::text ('username', ‘‘, array ('placeholder'=>'Username','maxlength'=>30))); ?> </p>

<p> <?php echo e(Form::password ('password', array('placeholder'=>'Password','maxlength'=>30))); ?> </p>

<p> <?php echo e(Form::submit ('Submit')); ?> </p>

<?php echo e(Form::close ()); ?>

</html>
