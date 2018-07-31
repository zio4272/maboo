<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>


    <div id="aside">
        <?php
        //공지사항
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/notice', 'notice', 4, 13);
        ?>
        <?php echo outlogin('theme/basic'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
        <?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
        <?//php echo visit('theme/basic'); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
	</div>

    <img src="/img/main.gif" width="305px">
    <br><br>

<div style="float:left">
        <div id="bside_title">지역별 건마</div>
            <div id="bside"><a href="/bbs/board.php?bo_table=shop00">서울지역</a></div>
            <div id="bside"><a href="/bbs/board.php?bo_table=shop01">경기지역</a></div>
            <div id="bside"><a href="/bbs/board.php?bo_table=shop02">인천지역</a></div>
            <div id="bside"><a href="/bbs/board.php?bo_table=shop03">충청/대전/강원지역</a></div>
            <div id="bside"><a href="/bbs/board.php?bo_table=shop04">경상/전라/제주지역</a></div>

        <div id="bside_title">커뮤니티</div>
            <div id="bside"><a href="/bbs/board.php?bo_table=com00">공지사항</a></div>
            <div id="bside"><a href="/bbs/board.php?bo_table=com01">자유게시판</a></div>
<!--            <div id="bside"><a href="">유머게시판</a></div>-->

        <div id="bside_title">제휴문의</div>
            <div id="bside"><a href="/bbs/board.php?bo_table=con00">제휴문의</a></div>
            <br>
</div>
    
    

</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">

    <div id="ft_wr">
        <div id="ft_link">
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보처리방침</a>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">서비스이용약관</a>
            <a href="<?php echo get_device_change_url(); ?>">모바일버전</a>
        </div>
        <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/logo2.png" alt="<?php echo G5_VERSION ?>" width="300px" height="80px"></div>
        <div id="ft_copy">Copyright &copy; <b>http://www.maboo.co.kr</b> All rights reserved.</div>
    </div>
    
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
        <script>
        
        $(function() {
            $("#top_btn").on("click", function() {
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            });
        });
        </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>