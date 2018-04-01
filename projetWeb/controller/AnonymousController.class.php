<?php	

class AnonymousController Extends Controller {
	
	public function defaultAction($request) {
		$view = new AnonymousView($this,'default');
		$view->render(); 
	}

	public function inscription($request){
		$view = new AnonymousView($this,'inscription');
		$view->render();
	}
	
	public function connexion($request){
		$view = new AnonymousView($this,'connexion');
		$view->render();
	}
    
    public function validateInscription($request) {
        $login = $request->readPOST('inscLogin');
        if(User::isLoginUsed($login)) {
            $view = new View($this,'inscription');
            $view->setArg('inscErrorText','This login is already used');
            $view->render();
        }
        else {
            $password = $request->readPOST('inscPassword');
            $nom = $request->readPOST('nom');
            $prenom = $request->readPOST('prenom');
            $mail = $request->readPOST('mail');
			if(substr_count($mail, '@')==1 and substr_count($mail, '.')>=1){             
				$user = User::create($login, $password,$mail,$nom,$prenom);
				if(!isset($user)) {
					$view = new View($this,'inscription');
					echo 'Cannot complete inscription';
					$view->setArg('inscErrorText', 'Cannot complete inscription');
					$view->render();
				} 
				else {
                    $_SESSION['login'] = $login;
                    $_SESSION['password'] = $password;
                    $_SESSION['mail']=$mail;
                    $_SESSION['nom']=$nom;
                    $_SESSION['prenom']=$prenom;
                    $newRequest = new Request();
                    $newRequest->writeOnGET('controller','user');
                    $newRequest->writeOnPOST('user',$user->id());
                    $newRequest->writeOnGET('action','defaultAction');
                    Dispatcher::dispatch($newRequest)->execute();
                }
			}
            else {
                $view = new View($this,'inscription');
				$view->setArg('inscErrorText', 'veuillez entrer un email valide : exemple@exemple.fr');
				$view->render();
            }
        }
    }
	
	public function validateConnexion($request) {
        $login = $request->readPOST('connLogin');
		$password = $request->readPOST('connPassword');
        if(!User::isLoginUsed($login)) {
            $view = new View($this,'connexion');
            $view->setArg('inscErrorText',"Ce Login n'existe pas.");
            $view->render();
        }
        else {
			if(!User::correct($login,$password)){
				$view = new View($this,'connexion');
				$view->setArg('inscErrorText',"Mot de passe incorrect");
				$view->render();
			}
			else {
                $user = new User($login, $password,Model::exec('USER_mail',array($login)),Model::exec('USER_nom',array( $login)),Model::exec('USER_prenom',array($login)));
                                 
                $_SESSION['login'] = $login;
                $_SESSION['password'] = $password;
                $_SESSION['mail']=$user->getMail();
                $_SESSION['nom']=$user->getNom();
                $_SESSION['prenom']=$user->getPrenom();
				$newRequest = new Request();
				$newRequest->writeOnGET('controller','user');
				$newRequest->writeOnPOST('user',$login);
				$newRequest->writeOnGET('action','defaultAction');
				Dispatcher::dispatch($newRequest)->execute();
			}
        }
    }

}

?>