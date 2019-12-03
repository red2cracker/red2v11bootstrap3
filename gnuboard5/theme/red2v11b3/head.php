<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<header class="header-outer">
  <div class="container con-header">
    <h1 class="header-title"><a href="http://red2.net/" title="Red2.net 홈"><span>Red2.</span>net</a></h1>
  </div>
</header>

<nav class="navbar navbar-default navbar-inverse">
  <div class="container header">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed btn-close" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>
      <a class="navbar-brand" href="http://red2.net/" title="Red2.net 홈"><span>Red2.</span>net</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<!-- Google 검색 -->
<!-- <input type="submit" name="sa" value="&#xac80;&#xc0c9;"> -->
<form action="http://www.google.co.kr" class="navbar-search navbar-right" role="search">
  <div>
    <input type="hidden" name="cx" value="partner-pub-4096343605930509:6706445990">
    <input type="hidden" name="ie" value="UTF-8">
    <input type="text" name="q" class="navbar-search-keyword" title="검색어 입력"><!--
--><button type="submit" name="sa" class="navbar-search-submit">
      <i class="fa fa-search" aria-hidden="true"></i>
    </button>
  </div>
</form>

<!--<script type="text/javascript" src="http://www.google.co.kr/coop/cse/brand?form=cse-search-box&amp;lang=ko"></script>-->

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">메인 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=news">뉴스</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">공지사항</a></li>
          </ul>
        </li>
		<li><a href="http://red2.net/dokuwiki/doku.php">위키</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">컨텐츠 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=mod_tutorial">모드 강좌</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=movie">동영상 게시판</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=tip">팁 게시판</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">커뮤니티 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=free">자유 게시판</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=cnc">C&amp;C 게시판</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=qna">Q&amp;A 게시판</a></li>
			<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=comic">팬픽</a></li>
			<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=suggest">건의사항</a></li>
			<li><a href="../../comm/link.html">링크</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">자료실 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=patch">패치</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=mod">모드</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=mod_tool">모드 툴</a></li>
			<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=map">맵</a></li>
			<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=replay">리플레이</a></li>
			<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=ost">OST</a></li>
			<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=game">게임</a></li>
			<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=other">기타</a></li>
          </ul>
        </li>
      </ul>

<?php echo outlogin('theme/red2m'); ?>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="con-row-outer">

<div class="container con-row">
  <div class="row">
    <div class="col-content col-md-9 col-sm-9">
      <div class="row">
        <div class="col-content-inner col-md-12">
