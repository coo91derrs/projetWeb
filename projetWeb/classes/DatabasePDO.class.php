<?php	

 class DatabasePDO Extends MyObject { 
	
    protected static $DatabasePDOConnection;
     
	private function __construct($DB_HOST,$DB_NAME,$DB_USER,$DB_PWD){
     
        static::$DatabasePDOConnection = null;
        
        try{
            static::$DatabasePDOConnection = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME",$DB_USER,$DB_PWD);
           
        }
        catch(PDOException  $e){
            echo 'Connection failed: ' . $e->getMessage();
        }
        
    }
     
    public static function createDatabasePDO(){
		if (is_null(static::$DatabasePDOConnection)){ 
            $DatabasePDOConnection = new DatabasePDO('localhost','test','root','');
		}
		return static::$DatabasePDOConnection;
	}
     
     
}

?>