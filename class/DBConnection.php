<?php
/**
 * @package Database Connection(Config)
 *
 * @author CodersMag Team
 *
 * @email  info@codersmag.com
 *   
 */

// Database Connection class
class DBConnection {
    // HOST NAME
    private $_dbHostname = "localhost";
    // DATABASE NAME
    private $_dbName = "misc";
    // DATABASE USERNAME
    private $_dbUsername = "root";
    // DATABASE PASSWORD
    private $_dbPassword = "password";
    // declare variable
    private $_dbh;

    // __construct
    public function __construct() {
    	try {
        	$this->_dbh = new PDO("mysql:host=$this->_dbHostname;dbname=$this->_dbName", $this->_dbUsername, $this->_dbPassword);    
        	$this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    } catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}

    }

    // return PDO: Connection
    public function returnPDOConnection() {
        return $this->_dbh;
    }
}
?>