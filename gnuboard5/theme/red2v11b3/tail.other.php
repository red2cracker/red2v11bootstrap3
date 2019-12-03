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
  <h2>기타</h2>
  <ul>
    <li><a href="../../other/about_us.html">사이트 소개</a></li>
	<li><a href="../../other/staff.html">운영진</a></li>
	<li><a href="../../other/history.html">연혁</a></li>
	<li><a href="../../other/brand.html">브랜드</a></li>
    <li><a href="../../other/donation.html">후원하기</a></li>
	<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=sponsor">후원자 명단</a></li>
	<li><a href="../../other/rules.html">회칙</a></li>
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