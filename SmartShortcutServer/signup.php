<?php
include 'dat_hash.php';
if (sizeof($_GET) == 2){
	$user = $_GET['user'];
	$pass = $_GET['pass'];
	$path = 'user_db/'.md5(dat_hash($user)).'.json';
	if(!file_exists($path)){
	$writedb = fopen($path, "w");
	if ($writedb != False){
		$da =  json_encode(array(
		'user' => $user,
		'pass' => md5($pass)));;
	fwrite($writedb,$da);
	fclose($writedb);
		echo '100';//ok thanh cong.
}else{
		echo '1';//can't creat DB
	}
}else{
	echo '0'; // user da dc tao
}
}
?>