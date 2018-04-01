<?php

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Debug
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	//define ('__DEBUG', false);
	/*define ('__DEBUG', true);

	if(__DEBUG) {
		error_reporting(E_ALL);
		ini_set("display_errors", E_ALL);
	} else {
		error_reporting(0);
		ini_set("display_errors", 0);
	}*/

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// DB
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	//if($_SERVER['DOCUMENT_ROOT']=='/Users/luc/Sites') {
		define('_MYSQL_HOST','localhost');
		define('_MYSQL_PORT',8080);	
		define('_MYSQL_DBNAME','test');
		define('_MYSQL_USER','root');
		define('_MYSQL_PASSWORD','');
	/*} else {
		// on the isic server for example
		define('_MYSQL_HOST','localhost');
		define('_MYSQL_DBNAME','luc');
		define('_MYSQL_USER','root');
		define('_MYSQL_PASSWORD','root');		
	}*/
	
?>