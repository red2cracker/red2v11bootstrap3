<?php
include_once('./_common.php');

//$g5['title'] = "링크";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<div class="row latest-row latest-line-1">
<?php echo latest('theme/red2', 'news', 4, 50); ?>
<?php echo latest('theme/red2', 'notice', 4, 50); ?>
</div>

<div class="row latest-row">
<?php echo latest('theme/red2', 'free', 4, 50); ?>
<?php echo latest('theme/red2', 'cnc', 4, 50); ?>
</div>

<div class="row latest-row">
<?php echo latest('theme/red2', 'qna', 4, 50); ?>
<?php echo latest('theme/red2', 'mod', 4, 50); ?>
</div>

<div class="row latest-row">
<?php echo latest('theme/red2', 'levelup', 4, 50); ?>
<?php echo latest('theme/red2', 'mod_tutorial', 4, 50); ?>
</div>

<div class="row latest-row">
<?php echo latest('theme/red2', 'tip', 4, 50); ?>
<?php echo latest('theme/red2', 'movie', 4, 50); ?>
</div>

<?php
include_once('./_tail.php');
?>