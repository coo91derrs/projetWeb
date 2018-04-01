<?php	

class Model Extends MyObject { 
    
    protected static $_SqlTable;

	public static function db(){
		return DatabasePDO::singleton();
	}

	public static function query($sql){
		$st = static::db()->query($sql) or die("sql query error ! request : " . $sql);
		$st->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, get_called_class());
		return $st;
	}
    
    
    public static function addSqlQuery($nomRequette , $valRequette){
        
        static::$_SqlTable[$nomRequette] = $valRequette;   
    }
    
    
    
    public static function exec($nomRequette,$parametresRequette=0){
        
        try{
            
            $DatabasePDOConnection = DatabasePDO::createDatabasePDO();
            $req = $DatabasePDOConnection->prepare(static::$_SqlTable[$nomRequette]);
            
            $req->execute($parametresRequette);
            $result = $req->fetch(PDO::FETCH_BOTH);

            return $result[0];
        } 
        
        catch (Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
        
    }
    
 
}

?>