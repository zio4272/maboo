<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!-- 메인화면 최신글 시작 -->
<div id="lt_slide" class="col_l_60 latest" style="padding:0 10px 0 10px">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수, 캐시타임, option);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    //$options = array(
    //    'thumb_width'    => 1000, // 썸네일 width
    //    'thumb_height'   => 290,  // 썸네일 height
    //);
    //echo latest('theme/main_slide', 'com00', 1, 55, 1, $options);
    ?>
</div>

		<div id="lt_notice" class="latest">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/notice', 'com00', 3, 38);
    ?>
</div>

<div style="clear:both"><br></div>
<div id="main_work">
    <ul>
        <li>
            <a href="/bbs/board.php?bo_table=shop00" class="work_img"><img src="<?php echo G5_THEME_IMG_URL; ?>/bn1.png" alt="배너이미지1"></a>
            <a href="/bbs/board.php?bo_table=shop00" class="work_txt"><span class="work_txt_tit">건마-서울지역</span></a>
            
        </li>
        <li class="main_work_1">
            <a href="/bbs/board.php?bo_table=shop01" class="work_img"><img src="<?php echo G5_THEME_IMG_URL; ?>/bn2.png" alt="배너이미지2"></a>
            <a href="/bbs/board.php?bo_table=shop01" class="work_txt"><span class="work_txt_tit">건마-경기지역</span>
        </li>
        
    </ul>

</div>




<div id="main_work">
    <ul>
	<li>
            <a href="/bbs/board.php?bo_table=shop02" class="work_img"><img src="<?php echo G5_THEME_IMG_URL; ?>/bn1.png" alt="배너이미지3"></a>
            <a href="/bbs/board.php?bo_table=shop02" class="work_txt"><span class="work_txt_tit">건마-인천지역</span>
        </li>
        <li class="main_work_1">
            <a href="/bbs/board.php?bo_table=shop03" class="work_img"><img src="<?php echo G5_THEME_IMG_URL; ?>/bn2.png" alt="배너이미지1"></a>
            <a href="/bbs/board.php?bo_table=shop03" class="work_txt"><span class="work_txt_tit">건마-충청/대전/강원지역</span>
            
        </li>

		<li class="main_work_1">
            <a href="/bbs/board.php?bo_table=shop04" class="work_img"><img src="<?php echo G5_THEME_IMG_URL; ?>/bn2.png" alt="배너이미지1"></a>
            <a href="/bbs/board.php?bo_table=shop04" class="work_txt"><span class="work_txt_tit">건마-경상/전라/제주지역</span>
            
        </li>
<!--=        <li class="main_work_1">
            <a href="#" class="work_img"><img src="<?php echo G5_THEME_IMG_URL; ?>/bn2.gif" alt="배너이미지2"></a>
            <a href="#" class="work_txt"><span class="work_txt_tit">사업설명 2</span><span class="work_txt_p">사업에 관한 간략 설명<br>회사에 대한 간략한 설명</span></a>
        </li>
        <li>
            <a href="#" class="work_img"><img src="<?php echo G5_THEME_IMG_URL; ?>/bn3.gif" alt="배너이미지3"></a>
            <a href="#" class="work_txt"><span class="work_txt_tit">사업설명 3</span><span class="work_txt_p">사업에 관한 간략 설명<br>회사에 대한 간략한 설명</span></a>
        </li> -->
    </ul>

</div>


<div id="lt_gall" class="latest">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수, 캐시타임, option);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
   // $options = array(
   //     'thumb_width'    => 400, // 썸네일 width
   //     'thumb_height'   => 250,  // 썸네일 height
   // );
   // echo latest('theme/gallery', 'gallery', 4, 55, 1, $options);
    ?>
</div>
<!-- 메인화면 최신글 끝 -->

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>