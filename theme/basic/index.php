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



    <img src="/img/main.gif" width="100%" height="300">
    <br>
    <br>

   <div style="float:left;width:49%" class="">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', 'com00', 7, 24);
        ?>
    </div>

    <div style="float:left;width:49%;margin-left:17.5px" class="">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', 'com01', 7, 24);
        ?>
    </div>

<img src="/img/main.gif" width="100%" height="300">

<?php
//로그인시 쪽지 왔는지 알려주는 
if ($is_member) {
	//쪽지 테이블에서 마지막 쪽지를 읽어온다.
	$sql = "select * from {$g5['memo_table']} where me_recv_mb_id = '{$member['mb_id']}' and me_read_datetime = '0000-00-00 00:00:00' order by me_id desc limit 0,1 ";
	$result = sql_fetch($sql);	
	$get_nick = get_member($result['me_send_mb_id'], $fields='mb_nick');
	if ($result) {
		//새창을 띄워준다.
		$msg = "{$get_nick['mb_nick']} 님으로부터 쪽지가 도착했습니다.";
		$url = G5_BBS_URL."/memo.php";				
?>
<script>
	alert("<?php echo $msg?>");
	window.open("<?php echo $url?>", "win_memo","width=620, height=620");
</script>
<?php
	}	
}
?>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>