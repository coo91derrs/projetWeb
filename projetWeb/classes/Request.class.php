<?php	

class Request Extends MyObject {
	
	protected static $_singleton=NULL;
	
	public static function getCurrentRequest(){
		if (is_null(static::$_singleton)){
			static::$_singleton = new static();
		}
		return static::$_singleton;
	}
	
	public function getControllerName(){
		if (isset($_GET['controller'])){
			return $_GET['controller'];
		}
		else {
			return 'Anonymous';
		}
	}
	
	public function getActionName(){
		if (isset($_GET['action'])){
			return $_GET['action'];
		}
		else {
			return 'defaultAction';
		}
	}
    
    public function readPOST($param){
		if (isset($_POST[$param])){
			return $_POST[$param];
		}
	}
	
	public function readGET($param){
		if (isset($_GET[$param])){
			return $_GET[$param];
		}
	}
	
	public function writeOnPOST($key, $value){
		$_POST[$key]=$value;
    }
	
	public function writeOnGET($key, $value){
		$_GET[$key]=$value;
    }
	
	
    /*public function debug() {
		echo "Request Parameters : \nGET=";
		print_r($_GET);
		echo "\nPOST=";
		print_r($_POST);
		echo "\n";
	} */
    

}

?>