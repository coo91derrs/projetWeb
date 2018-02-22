<?php	

class Request Extends MyObject {
	
	private static $_request;
	
	private function __construct(){}
	
	public static function getCurrentRequest(){
		if (is_null(self::$_request)){
			self::$_request = new Request();
		}
		return self::$_request;
	}
	
	public static function getControllerName(){
		if (isset($_GET['controller'])){
			return $_GET['controller'];
		}
		else {
			return 'Anonymous';
		}
	}
	
	public static function getActionName(){
		if (isset($_GET['action'])){
			return $_GET['action'];
		}
		else {
            return'defaultAction';
		}
	}

}

?>