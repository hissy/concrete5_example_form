<?php
defined('C5_EXECUTE') or die("Access Denied.");
$c = Page::getCurrentPage();
?>
<h3><?=t('Please confirm the input below.')?></h3>
    <div class="form-group">
        <?=h($name)?>
    </div>
    <div class="form-group">
        <?=h($email)?>
    </div>
    <form action="<?=URL::page($c)?>" method="post">
        <?=$form->hidden('name', $name)?>
        <?=$form->hidden('email', $email)?>
        <?=$form->submit('submit', t('Back'))?>
    </form>
    <form action="<?=$view->action('submit')?>" method="post">
        <?=$form->hidden('name', $name)?>
        <?=$form->hidden('email', $email)?>
        <?=$form->submit('submit', t('Submit'))?>
    </form>
</form>
