<?php	

class Dispatcher Extends MyObject {
	
	public static function dispatch($request){
		$controllerClassName = ucfirst($request->getControllerName()) . 'Controller';
		if(!class_exists($controllerClassName))
			throw new Exception("$controllerName does not exists");
		return new $controllerClassName($request);
	}
	
}

?>