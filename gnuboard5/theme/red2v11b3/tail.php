<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

        </div>
      </div>
	</div>
    <aside class="col-sidebar col-md-3 col-sm-3">
<?php echo outlogin('theme/red2'); ?>

<nav class="nav-local hidden-print">
  <h2>메인</h2>
  <ul>
    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=news">뉴스</a></li>
	<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">공지사항</a></li>
  </ul>
</nav>
	</aside>
  </div>
</div>

</div>

<?php
include_once(G5_THEME_PATH.'/footer.php');
?>

<?php
// if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
// }

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    // font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>