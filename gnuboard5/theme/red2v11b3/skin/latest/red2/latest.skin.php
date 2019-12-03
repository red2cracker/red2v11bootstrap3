<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

  <div class="latest-col col-sm-6 col-md-6">
    <div class="row row-no-gutters">
	  <div class="col-md-12">
<!-- <div class="lat"> -->
    <h2 class="latest-title">
        <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>">
<?php

if ($bo_table=="free") {
  echo '<i class="fa fa-comments" aria-hidden="true"></i>';
}
elseif ($bo_table=="notice") {
  echo '<i class="fa fa-microphone" aria-hidden="true"></i>';
}
elseif ($bo_table=="qna") {
  echo '<i class="fa fa-question-circle" aria-hidden="true"></i>';
}
elseif ($bo_table=="mod") {
  echo '<i class="fa fa-wrench" aria-hidden="true"></i>';
}
elseif ($bo_table=="tip") {
  echo '<i class="fa fa-info-circle" aria-hidden="true"></i>';
}
elseif ($bo_table=="mod_tutorial") {
  echo '<i class="fa fa-cogs" aria-hidden="true"></i>';
}
elseif ($bo_table=="movie") {
  echo '<i class="fa fa-video-camera" aria-hidden="true"></i>';
}
elseif ($bo_table=="levelup") {
  echo '<i class="fa fa-user-circle-o" aria-hidden="true"></i>';
}
elseif ($bo_table=="news") {
  echo '<i class="fa fa-file-text" aria-hidden="true"></i>';
}
elseif ($bo_table=="cnc") {
  echo '<i class="fa fa-gamepad" aria-hidden="true"></i>';
}
else {
  echo '<i class="fa fa-file" aria-hidden="true"></i>';
}

?>
            <?php echo $bo_subject ?>
        </a>
    </h2>
    <ul>
    <?php for ($i=0; $i<count($list); $i++) {  ?>
        <li>
            <?php
            // if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";

            // if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\">H<span class=\"sound_only\">인기글</span></span>";

 
            echo "<span class=\"latest-link\"><a href=\"".$list[$i]['href']."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];

            if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N</span>";

            echo "</a></span>";

            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

             //echo $list[$i]['icon_reply']." ";
           // if ($list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            //if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;

            if ($list[$i]['comment_cnt'])  echo "
            <span class=\"latest-cmt\"><a href=\"".$list[$i]['href']."\">".$list[$i]['comment_cnt']."</a></span>";

            ?>

            <!-- <span class="latest-date"><?php // echo $list[$i]['datetime2'] ?></span> -->
        </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="latest-empty-li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
    <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="latest-more"><span class="sound_only"><?php echo $bo_subject ?></span><i class="fa fa-plus" aria-hidden="true"></i><span class="sound_only"> 더보기</span></a>

<!-- </div> -->
	  </div>
	</div>
  </div>
