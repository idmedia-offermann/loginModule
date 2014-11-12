<?php
session_start();


//GLOBALE VARIABLEN

$GLOBALS['config']=array(
	'mysql' => array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'db' => 'db_loginandregister'
	),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => 604800
	),
	'session' => array(
		'session_name' => 'user'
	)
	
);

// KLASSEN IN DIE INIT EINBEZIEHEN MITTLES SPL_AUTOLOAD_REGISTER FUNKTION

spl_autoload_register(function($class){
			require_once 'classes/'.$class.'.php';
	
});

//AUFRUF DER BEREINIGUNGSFUNKTION

require_once 'functions/sanitize.php';








?>
