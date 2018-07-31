<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>

<div class="latest_wr">
<!-- 최신글 시작 { -->


    <div style="float:left;width:32%;">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', notice, 6, 24);
        ?>
    </div>
    <div style="float:left;margin-left:2%;width:32%;">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', free, 6, 24);
        ?>
    </div>    
    <div style="float:left;margin-left:2%;width:32%;">
    <iframe width="380" height="220" src="https://www.youtube.com/embed/zqziLDL5Ea4" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            
    </div>      
    <!-- } 최신글 끝 -->

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>