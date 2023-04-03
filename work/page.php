<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
<div class="move_page">
  <div class="tap">
    <span class="menu">
      <i class="xi-bars"></i>
    </span>
    <? if($section == 'feelmotion'){?>
      <a href="https://feelmotioncard.com/login/?user_id=login" target="_blank">필모션카드 바로가기</a>
    <? }else if($section == 'feelcard') {?>
      <a href="https://smartstore.naver.com/feelframe/products/6804568774" target="_blank">필카드 바로가기</a>
    <? }else if($section == 'feelframe') {?>
      <a href="https://feelframe.co.kr/" target="_blank">필프레임 바로가기</a>
    <? }else if($section == 'feelmaker') {?>
      <a href="https://feelmaker.co.kr/" target="_blank">필메이커 바로가기</a>
    <? }else if($section == 'rvrush') {?>
      <a href="https://rvrush.co.kr/" target="_blank">리뷰돌격대 바로가기</a>
    <? }else if($section == 'barunsonbiz') {?>
      <a href="https://barunsonbiz.com/" target="_blank">바른손비즈 바로가기</a>
    <? }else if($section == 'barunbojung') {?>
      <a href="https://barunbojung.com/" target="_blank">바른보정 바로가기</a>
    <? }else if($section == 'smartstore') {?>
      <a href="https://smartstore.naver.com/feelframe" target="_blank">스마트스토어 바로가기</a>
    <? } ?>
  </div>
  <div class="menu_show">
    <ul class="menu_inner">
      <li>
        <a href="/pagelist.php?page_cate=work&section=feelmotion" class="feelmotion">
          <i class="xi-full-moon"></i> 필모션카드
        </a>
      </li>
      <li>
        <a href="/pagelist.php?page_cate=work&section=feelcard" class="feelcard">
          <i class="xi-full-moon"></i> 필카드
        </a>
      </li>
      <li>
        <a href="/pagelist.php?page_cate=work&section=feelframe" class="feelframe">
          <i class="xi-full-moon"></i> 필프레임
        </a>
      </li>
      <li>
        <a href="/pagelist.php?page_cate=work&section=feelmaker" class="feelmaker">
          <i class="xi-full-moon"></i> 필메이커
        </a>
      </li>
      <li>
        <a href="/pagelist.php?page_cate=work&section=rvrush" class="rvrush">
          <i class="xi-full-moon"></i> 리뷰돌격대
        </a>
      </li>
      <li>
        <a href="/pagelist.php?page_cate=work&section=barunsonbiz" class="barunsonbiz">
          <i class="xi-full-moon"></i> 바른손비즈
        </a>
      </li>
      <li>
        <a href="/pagelist.php?page_cate=work&section=barunbojung" class="barunbojung">
          <i class="xi-full-moon"></i> 바른보정
        </a>
      </li>
      <li>
        <a href="/pagelist.php?page_cate=work&section=smartstore" class="smartstore">
          <i class="xi-full-moon"></i> 스마트스토어
        </a>
      </li>
    </ul>
  </div>
</div>
