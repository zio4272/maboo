<?php
class telegram_msg {
    
    private $chat_id			= '522148566'; // id 값
    private $bot_token			= '516347766:AAESL9aU2o5T-UPCtHoyZMrhpQ6PUT0BN7A'; // token 값

    public function __construct() {
        
    }

    function send() { 
        
        $msg      = $this->set_msg();

        $headers = array();
        $headers[] = 'Content-type: Application/json';

		$url = 'https://api.telegram.org/bot'.$this->bot_token.'/sendMessage?chat_id='.$this->chat_id.'&text='.$msg;

        $curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_ENCODING, "");
		curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
		curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($curl); 
        curl_close($curl);

        return $result;
    } 

    function set_msg() { 
        
        global $config, $board, $bo_table, $w, $wr_id, $wr_name, $mb_nick, $recv_mb_nick;

		$warr = array( ''=>'입력', 'u'=>'수정', 'r'=>'답변', 'c'=>'댓글 ', 'cu'=>'댓글 수정' );
		$str = $warr[$w];

		// 게시판 글작성 완료
		if(stripos($_SERVER['SCRIPT_NAME'], 'write')) {
			$telegram_msg = '['.$config['cf_title'].'] ['.$board['bo_subject'].'] 게시판에 '.$wr_name.'님의 '.$str.'글이 올라왔습니다.'.G5_HTTP_BBS_URL.'/board.php?bo_table='.$bo_table.'&wr_id='.$wr_id;
		}

		// 회원가입 완료
		if(stripos($_SERVER['SCRIPT_NAME'], 'register')) {
			$telegram_msg = '['.$config['cf_title'].'] '.$mb_nick .' 님께서 회원으로 가입하셨습니다.';
		}

		// 쪽지 전송 완료
		if(stripos($_SERVER['SCRIPT_NAME'], 'memo')) {
			$telegram_msg = '['.$config['cf_title'].'] '.$recv_mb_nick .' 님께서 쪽지를 전송하셨습니다.';
		}

        return $telegram_msg;
    }
}

?>