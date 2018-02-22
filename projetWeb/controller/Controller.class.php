<?php	

abstract class Controller Extends MyObject {
	
	protected $_request; 
	
	public function __construct($request){
		$this->_request=$request;
	}
	
	public abstract function defaultAction($request);
	
	public function execute(){
		$methodeName = $this->_request->getActionName();
		$this->$methodeName($this->_request);
	}
	
}

?>