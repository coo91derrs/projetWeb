<?php	

class UserView extends View {
	
	public function __construct($controller,$templateName,$args=array()) {
		parent::__construct($controller,$templateName,$args);
		$this->_templateNames['menu'] = 'menuConnexion';
	}
	
}

?>