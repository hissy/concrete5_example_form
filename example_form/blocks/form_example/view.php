<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php if (is_object($e) && $e->has()) { ?>
    <div class="bg-danger">
        <?php echo $e->output(); ?>
    </div>
<?php } ?>

<h3><?=t('Please input the form below.')?></h3>
<form action="<?=$view->action('confirm')?>" method="post">
    <div class="form-group">
        <?=$form->label('name', t('Name'))?>
        <?=$form->text('name', $name)?>
    </div>
    <div class="form-group">
        <?=$form->label('email', t('Email'))?>
        <?=$form->text('email', $email)?>
    </div>
    <?=$form->submit('submit', t('Confirm'))?>
</form>
