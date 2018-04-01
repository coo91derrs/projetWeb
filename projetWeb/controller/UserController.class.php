<?php	

class UserController Extends Controller {
	
	public function defaultAction($request) {
		$view = new UserView($this,'defaultConnexion');
		$view->render();
	}
	
	public function deconnect($request) {
       // echo "\n ------------" . $_SESSION['login'];
		session_destroy();
        //echo "\n ------------" . $_SESSION['login'];
		$view = new AnonymousView($this,'default');
		$view->render();
	}
	
	public function profil($request) {
		$view = new UserView($this,'profil');
		$view->render();
	}
	
	public function creerLieu($request) {
        $NOMLIEU = $request->read('NOMLIEU');
        $CODEPOSTAL = $request->read('CODEPOSTAL');           
		$lieu = User::create($NOMLIEU, $CODEPOSTAL);
		if(!isset($lieu)) {
			$view = new UserView($this,'profil');
			$view->setArg('inscErrorText', 'Erreur création lieu.');
			$view->render();
		} 
		else {
            $view = new UserView($this,'profil');
            $view->setArg('inscErrorText', 'Creation lieu.');
			$view->render();
		}
    }
	
}
	
?>