<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<title>parksoojung</title>
<link rel="shortcut icon" href="/img/icon/favicon.ico">
<link rel="stylesheet" href="//cdn.jsdelivr.net/xeicon/2/xeicon.min.css">
<link rel="stylesheet" href="/css/font.css">

<link rel="stylesheet" href="/css/common.css">
<link rel="stylesheet" href="/css/index.css">
<link rel="stylesheet" href="/css/work.css">

<!-- 태블릿 / 모바일 -->
<link rel="stylesheet" href="/css/index_media.css">
<link rel="stylesheet" href="/css/work_media.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
<script src="/js/jquery-3.0.0.min.js"></script>
<script src="/js/index.js"></script>
<script src="/js/work.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
<header id="header">
 <!-- <div class="main_header <?=($page_cate=="index")?"color":""?>"> -->
 <div class="main_header">
    <div class="inner">
      <a href="/pagelist.php?page_cate=index" class="logo">
        <img src="/img/logo.svg" alt="">
        2023 박수정 포트폴리오
      </a>


      <!-- pc 메뉴 -->
      <ul class="pc_menu my_pc">
          <li><a href="/pagelist.php?page_cate=index" class="<?=($page_cate=="index")?"on":""?>">home</a></li>
          <li><a href="/pagelist.php?page_cate=about&section=soojung" class="<?=($page_cate=="about")?"on":""?>">about</a></li>
          <li><a href="/pagelist.php?page_cate=work&section=list" class="<?=($page_cate=="work")?"on":""?>">work</a></li>
      </ul>




      <!-- 모바일 메뉴 -->

      <span class="m_menu my_t my_mo">
        <img src="/img/menu.svg" alt="">
      </span>


      <div class="my_t my_mo">
        <div class="m_back"></div>
        <div class="m_list">
          <div class="info">
            <p><i class="xi-close close_menu"></i></p>
            <img src="/img/logo.svg" alt="">
            <span>Welcome -</span>
          </div>
          <ul>
            <li>
              <a href="/pagelist.php?page_cate=index" class="<?=($page_cate=="index")?"on":""?>">
                <i class="xi-home-o"></i> home
              </a>
            </li>
            <li>
              <a href="/pagelist.php?page_cate=about&section=soojung" class="<?=($page_cate=="about")?"on":""?>">
                <i class="xi-emoticon"></i> about
              </a>
            </li>
            <li>
              <a href="/pagelist.php?page_cate=work&section=list" class="<?=($page_cate=="work")?"on":""?>">
                <i class="xi-laptop"></i> work
              </a>
            </li>
          </ul>

          <div class="m_link">
            <a href="#" class="">
              <i class="xi-download"></i>
              <span>이력서</span>
            </a>
            <a href="#" class="">
              <i class="xi-instagram"></i>
              <span>인스타</span>
            </a>
            <a href="#" class="">
              <i class="xi-blogger"></i>
              <span>블로그</span>
            </a>
          </div>
        </div>
      </div>

    </div>
 </div>
</header>

<div class="loading" id="loading">
  <? include_once $_SERVER["DOCUMENT_ROOT"]."/loading.php"; ?>
</div>
