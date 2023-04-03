<?
  $page_cate = $_GET['page_cate'];
  $section = $_GET['section'];

  include_once $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";

?>

<div class="content_wrap">
  <? if($page_cate == 'index'){ ?>
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/index.php"; ?>
  <? }else{ ?>
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/".$page_cate."/".$section.".php"; ?>
  <? } ?>

  <a href="javascript:the_top();" class="top_fixed">
    <i class="xi-long-arrow-up"></i>
  </a>
</div>
