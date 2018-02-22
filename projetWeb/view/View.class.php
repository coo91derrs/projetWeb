<?php	

class View extends MyObject {
	
	protected $_templateNames;
	protected $_controller;
	
	public function __construct($controller) {
		$this->_templateNames = array();
		$this->_templateNames['head'] = 'head';
		$this->_templateNames['top'] = 'top';
		$this->_templateNames['menu'] = 'menu';
		$this->_templateNames['content'] = 'content';
		$this->_templateNames['foot'] = 'foot';
		$this->_controller = $controller;
	}
	
	public function render() {
		$this->loadTemplate($this->_templateNames['head']);
		$this->loadTemplate($this->_templateNames['top']);
		$this->loadTemplate($this->_templateNames['menu']);
		$this->loadTemplate($this->_templateNames['content']);
		$this->loadTemplate($this->_templateNames['foot']);
	}
	
	public function loadTemplate($templateName) {
		$path = __ROOT_DIR . '/templates/'. $templateName . 'Template.php';
		if (is_readable($path)){
			require_once($path);
		}
		else {
			echo 'Template ' . $templateName . ' introuvable';
		}
	}
		
}

?>