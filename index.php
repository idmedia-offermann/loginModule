<?php

require_once 'core/init.php';
/*
var_dump(Config::get('mqsql/host'));
*/

/*
$users = DB::getInstance()->query('SELCT username FROM users');
if($users->count()){
	foreach ($users as $user) {
		echo $user->username;
	}
}*/

//$db = new DB();

$user = DB::getInstance();
$user->get('users' , array('username', '=', 'alex'));
echo '<b>';
var_dump($user);
echo '</b>';

if(!$user->count()){
	echo 'noUser';
}
else{
	echo 'OK';
}


?>
