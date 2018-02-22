<?php	

class Dispatcher Extends MyObject {
	
	public static function dispatch($request){
	
        $name=ucfirst($request->getControllerName()).'Controller' ;
        $controller= new $name($request) ;
        return $controller ;

	}

}

?>