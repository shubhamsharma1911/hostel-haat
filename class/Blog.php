<?php
/**
 * @package Create Blog class
 *
 * @author CodersMg Team
 *
 * @email  info@codersmag.com
 *   
 */

// connection class
include("DBConnection.php");
// Blog
class Blog 
{
    // declare variable
    protected $_db;
    private $_name;
    private $_email;
    private $_content;

    public function setName($name) {
        $this->_name = $name;
    }
    public function setEmail($email) {
        $this->_email = $email;
    }
    public function setContent($content) {
        $this->_content = $content;
    }
    
    // __construct
    public function __construct() {
        $this->_db = new DBConnection();
        $this->_db = $this->_db->returnPDOConnection();
    }

    // insert recored in database
    public function create() {
		try {
    		$sql = 'INSERT INTO blog (name, email, content)  VALUES (:name, :email, :content)';
            // create array
    		$data = array(
			    'name' => $this->_name,
			    'email' => $this->_email,
                'content' => $this->_content,
			);
	    	$stmt = $this->_db->prepare($sql);
	    	$stmt->execute($data);
			$lastID = $this->_db->lastInsertId();
            return $lastID;

		} catch (Exception $err) {
    		die("Error!: " . $e->getMessage());
		}
    }

     // insert recored in database
     


    // get record from database
    public function getList() {
    	try {
    		$sql = "SELECT name, email, content, created_date FROM blog";
		    $stmt = $this->_db->prepare($sql);
		    $stmt->execute();
		    $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
		} catch (Exception $err) {
		    die("Error!: " . $e->getMessage());
		}
    }
}
?>