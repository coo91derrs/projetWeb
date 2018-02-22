<?php	

class AnonymousController Extends Controller {
	
	public function defaultAction($request) {
		$view = new AnonymousView($this);
		$view->render();
	}

	public function inscription($request){
		$view = new AnonymousView($this);
		$view->renderInscription();
	}
}

?>