<?php

// Load my root class
require_once(__ROOT_DIR . '/classes/MyObject.class.php');

class AutoLoader extends MyObject {
	
	public function __construct() {
		spl_autoload_register(array($this, 'load'));
	}
	
// This method will be automatically executed by PHP whenever it encounters
// an unknown class name in the source code
	private function load($className) {
		
		$files = array ('/classes/', '/model', '/controller/', '/view/');
		
		$i = 0;
		while ($i <= count($files) - 1) {
			$path = __ROOT_DIR . $files[$i] . ucfirst($className) . '.class.php';
			if (is_readable($path)){
				require_once($path);
			}
			$i++;
		}
	}
}

$__LOADER = new AutoLoader();

?>
