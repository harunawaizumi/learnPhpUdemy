<?php if (!is_null($errors) && count($errors) > 0): ?>
    <div class="error">
        <?php foreach($errors as $error): ?>
            <p><?php echo $error; ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>
<?php
var_dump($errors);
?>

