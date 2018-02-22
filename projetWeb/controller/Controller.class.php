<?php	

abstract class Controller Extends MyObject {
	
    protected $request ;
	public function __construct($request){
        $this->request = $request;
    }
	
	public abstract function defaultAction($request);
	
	public function execute(){
        $methodName = $this->request->getActionName();
        $this->$methodName($this->request);
	
	}
	
	

}

?>