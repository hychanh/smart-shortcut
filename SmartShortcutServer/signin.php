<?php
include 'dat_hash.php';
if (sizeof($_GET) == 2){
	$user = $_GET['user'];
	$pass = $_GET['pass'];
	$text = 'user_db/'.md5(dat_hash($user)).'.json';
	if(file_exists($text)){
		$data = file_get_contents($text);
		if (isset($data)){
		$data_json = json_decode($data,true);
		if ($data_json['pass'] == md5($pass)){
			echo '100';  // 100  dang nhap thanh cong!!.
		}else{
			echo '1';// sai passwor
		}
}
	}else{
		echo '0';//  0user chua tao
	}
}

?>