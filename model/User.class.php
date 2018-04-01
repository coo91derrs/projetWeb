<?php	

 class User Extends Model { 
     
	protected $_login;
    protected $_password;
    protected $_mail;
    protected $_nom;
    protected $_prenom;
    
     
    static protected $DatabasePDOConnection;
     
	public function __construct($loginpar, $passwordpar,$mailpar,$nompar,$prenompar){
        $this->_login=$loginpar;
        $this->_password=$passwordpar;
        $this->_mail=$mailpar;
        $this->_non=$nompar;
        $this->_prenom=$prenompar;
	}
     
    static public function isLoginUsed($login){

        if((Model::exec('USER_login',array(':login'=>$login)))!=null){
             return TRUE;
        }
        else {
            return FALSE;
        }
    }
	
	static public function correct($login,$password){ // cette fonction test si le login et le mot de passe sont bons

        $req=Model::exec('USER_password',array(':login'=>$login));
        
		if($req==$password){
             return TRUE;
        }
        else {
            return FALSE;
        }
	}
     
    static public function create($login, $password,$mail,$nom,$prenom){

         Model::exec('USER_CREATE',array(':login'=>$login,':password' => $password , ':mail'=>$mail , ':nom'=>$nom , ':prenom'=>$prenom));
         return new User($login, $password,$mail,$nom,$prenom) ;   
    }

	 
	 public function id(){
		 return $this->getLogin();
	 }
	 
     public function getLogin(){
         return $this->_login;
     }
	 
     public function getPassword(){
         return $this->_password;
     }
     
    public function getMail(){
         return $this->_mail;     
     }
                        
    public function getNom(){
         return $this->_nom;  
    }
     
    public function getPrenom(){
         return $this->_prenom;
    }
     
     
     
     
     

}

?>