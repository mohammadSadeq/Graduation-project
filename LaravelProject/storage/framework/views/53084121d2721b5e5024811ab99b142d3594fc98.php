
<!DOCTYPE html>
<html lang="en">


<?php echo Form::open(['route' => 'contact.store']); ?>


<div class="form-group">
    <?php echo Form::label('name', 'Your Name'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('email', 'E-mail Address'); ?>

    <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::textarea('msg', null, ['class' => 'form-control']); ?>

</div>

<?php echo Form::submit('Submit', ['class' => 'btn btn-info']); ?>


<?php echo Form::close(); ?>




</html>