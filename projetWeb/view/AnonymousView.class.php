<?php	

class AnonymousView extends View {
	
	public function renderInscription() {
		$this->_templateNames['inscription'] = 'inscription';
		$this->loadTemplate($this->_templateNames['head']);
		$this->loadTemplate($this->_templateNames['top']);
		$this->loadTemplate($this->_templateNames['menu']);
		$this->loadTemplate($this->_templateNames['content']);
		$this->loadTemplate($this->_templateNames['inscription']);
		$this->loadTemplate($this->_templateNames['foot']);
	}
}

?>