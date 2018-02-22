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
		
		$paths = array ('/classes/', '/model', '/controller/', '/view/');
		
        $i=0;
        while($i<count($paths)-1){

		
		  if (is_readable(__ROOT_DIR . $paths[$i]. ucfirst($className) . '.class.php')){
			 require_once(__ROOT_DIR . $paths[$i] . ucfirst($className) . '.class.php');
		  }
         $i++;
	   }
    }
}

$__LOADER = new AutoLoader();

?>
