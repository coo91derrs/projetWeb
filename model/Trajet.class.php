<?php	

class Trajet Extends Model { 
     
	protected $_IDTRAJET;
    protected $_EMAIL;
    protected $_HEUREDEPART;
    protected $_HEUREARRIVEE;
    protected $_NBPLACESLIBRES;
	protected $_PRIXPLACE;
     
    static protected $DatabasePDOConnection;
     
	public function __construct($IDTRAJET, $passwordpar,$mailpar,$nompar,$prenompar){
        $this->_IDTRAJET=;
		$this->_EMAIL;
		$this->_HEUREDEPART;
		$this->_HEUREARRIVEE;
		$this->_NBPLACESLIBRES;
		$this->_PRIXPLACE;
	}
     

	static public function correct($login,$password){ // cette fonction test si le login et le mot de passe sont bons
		$querySql = 'SELECT * FROM users WHERE login=:login AND password=:password';
        static::$DatabasePDOConnection = DatabasePDO::createDatabasePDO();
        $req=static::$DatabasePDOConnection->prepare($querySql);
        $req->execute(array(':login' => $login, ':password' => $password));
		if($req->rowCount()>0){
             return TRUE;
        }
        else {
            return FALSE;
        }
	}
     
     public function createTrajet(){
         
         Model::exec('USER_CREATE',array(':login'=>$login,':password' => $password , ':mail'=>$mail , ':nom'=>$nom , ':prenom'=>$prenom));
         
         
         
     }
     
     


}

?>