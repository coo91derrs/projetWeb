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
     
    static public function isLoginUsed($login){
        $querySql = 'SELECT * FROM users WHERE login=:login ';
        static::$DatabasePDOConnection = DatabasePDO::createDatabasePDO();
        $req=static::$DatabasePDOConnection->prepare($querySql);
        $req->execute(array(':login' => $login));
        if($req->rowCount()>0){
             return TRUE;
        }
        else {
            return FALSE;
        }
        //laisse cette partie peut etre apres on aura besoin de ce code pour une autre partie
        
        /*foreach ($DatabasePDOConnection->query($querySql) as $reponseSql) {
            
            $i=0 ;
            if(count($reponseSql) >0){
                while ($i <= count($reponseSql) - 1){
                
                    if ($reponseSql[$i]==$login ){
                        return TRUE ;        
                    }    
                    $i++;
                } 
            }
            return FALSE ; 
        } */  
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
     
     static public function create($login, $password,$mail,$nom,$prenom){
         $stat = static::$DatabasePDOConnection->prepare("INSERT INTO users (login, password,mail,nom,prenom) VALUES (:login, :password,:mail,:nom,:prenom)");
         $stat->execute(array(':login' => $login, ':password' => $password , ':mail'=>$mail , ':nom'=>$nom , ':prenom'=>$prenom));
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
         //$stat = $dbh->prepare('SELECT motDepasse FROM users WHERE login=:login ');
         //$stat->execute(array(':login' => $login));
         //return $stat->fetchAll();
         
     }
     
    public function getMail(){
         return $this->_mail;
         //$stat = $dbh->prepare('SELECT mail FROM users WHERE login=:login ');
         //$stat->execute(array(':login' => $login));
         //return $stat->fetchAll();
          
     }
                        
    public function getNom(){
         return $this->_nom;
         //$stat = $dbh->prepare('SELECT nom FROM users WHERE login=:login ');
         //$stat->execute(array(':login' => $login));
         //return $stat->fetchAll();
        
    }
     
    public function getPrenom(){
         return $this->_prenom;
         //$stat = $dbh->prepare('SELECT prenom FROM users WHERE login=:login ');
        // $stat->execute(array(':login' => $login));
         //return $stat->fetchAll();
        
    }

}

?>