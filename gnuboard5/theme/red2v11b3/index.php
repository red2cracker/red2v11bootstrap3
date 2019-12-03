<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<!-- <div>test</div> -->

<div class="row latest-row latest-line-1">
<?php echo latest('theme/red2', 'news', 4, 24); ?>
<?php echo latest('theme/red2', 'notice', 4, 24); ?>
</div>

<div class="row latest-row">
<?php echo latest('theme/red2', 'free', 4, 24); ?>
<?php echo latest('theme/red2', 'cnc', 4, 24); ?>
</div>

<div class="row latest-row">
<?php echo latest('theme/red2', 'qna', 4, 24); ?>
<?php echo latest('theme/red2', 'mod', 4, 24); ?>
</div>

<div class="row latest-row">
<?php echo latest('theme/red2', 'levelup', 4, 24); ?>
<?php echo latest('theme/red2', 'mod_tutorial', 4, 24); ?>
</div>

<div class="row latest-row">
<?php echo latest('theme/red2', 'tip', 4, 24); ?>
<?php echo latest('theme/red2', 'movie', 4, 24); ?>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>