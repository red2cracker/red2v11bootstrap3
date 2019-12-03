<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/style.css">', 0);
?>

<!-- 로그인 전 모바일 아웃로그인 시작 { -->
<section id="ol_before_m" class="ol">
    <h2>회원로그인</h2>
    <div id="ol_svc_m">
        <a href="<?php echo G5_BBS_URL ?>/login.php?url=<?=$urlencode?>"><i class="fa fa-power-off" aria-hidden="true"></i> 로그인</a> / 
        <a href="<?php echo G5_BBS_URL ?>/register.php"><i class="fa fa-sign-in" aria-hidden="true"></i> 회원가입</a>
    </div>
</section>

<!-- } 로그인 전 모바일 아웃로그인 끝 -->
