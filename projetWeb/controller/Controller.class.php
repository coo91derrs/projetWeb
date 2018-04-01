<?php	

abstract class Controller Extends MyObject {
	
	protected $_request; 
	
	public function __construct($request){
		$this->_request=$request;
	}
	
	public abstract function defaultAction($request);
	
	public function execute(){
		$methodName = $this->_request->getActionName();	
		$this->$methodName($this->_request);
	}
	
	
	
	
}

?>