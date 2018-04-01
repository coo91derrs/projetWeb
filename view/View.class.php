<?php	

class View extends MyObject {
	
	protected $_templateNames;
	protected $_args;
	
	public function __construct($controller,$templateName,$args=array()) {
		$this->_templateNames = array();
		$this->_templateNames['head'] = 'head';
		$this->_templateNames['top'] = 'top';
		$this->_templateNames['menu'] = 'menu';
		$this->_templateNames['content'] = $templateName;
		$this->_templateNames['foot'] = 'foot';
		$this->_args = $args;
		$this->_args['controller'] = $controller;
	}
	
	public function setArg($key, $val) {
		$this->_args[$key] = $val;
	}
	
	public function getArg() {
		return $this->_args;
	}
	
	public function render() {
		$this->loadTemplate($this->_templateNames['head']);
		$this->loadTemplate($this->_templateNames['menu']);
		$this->loadTemplate($this->_templateNames['top']);
		$this->loadTemplate($this->_templateNames['menu']);
		$this->loadTemplate($this->_templateNames['content']);
		$this->loadTemplate($this->_templateNames['foot']);
		/*echo "<p>-------------------------------------------------------------------</p>";
		foreach($this->_templateNames as $key => $val) echo 'templateNames["'.$key.'"]='.$val.'<br />';
		echo "<p>-------------------------------------------------------------------</p>";*/
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