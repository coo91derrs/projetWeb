<?php	

class Dispatcher Extends MyObject {
	
	public static function dispatch($request){
		$contructName = ucfirst($request->getControllerName()) . 'Controller';
		$controller = new $contructName($request);
		return $controller;
	}

}

?>