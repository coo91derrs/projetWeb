<?php	

class Lieu Extends Model { 
     
	protected $_NOMLIEU;
    protected $_CODEPOSTAL;
    
    static protected $DatabasePDOConnection;
     
	public function __construct($NOMLIEU, $CODEPOSTAL){
		$this->_NOMLIEU;
        $this->_CODEPOSTAL;
	}
	
	static public function create($NOMLIEU, $CODEPOSTAL){
        $stat = static::$DatabasePDOConnection->prepare("INSERT INTO lieu (IDENTIFIANTLIEU,NOMLIEU,CODEPOSTAL) VALUES (:IDENTIFIANTLIEU, :NOMLIEU, :CODEPOSTAL)");
        $stat->execute(array(':IDENTIFIANTLIEU' => NULL, ':NOMLIEU' => $NOMLIEU , ':CODEPOSTAL'=>$CODEPOSTAL));
        return new Lieu($NOMLIEU, $CODEPOSTAL) ;   
    }
	
}

?>