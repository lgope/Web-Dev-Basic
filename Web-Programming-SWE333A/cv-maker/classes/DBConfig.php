<?php
 
class DBConfig {
    private $_host = "localhost";
    private $_databaseUser = "root";
    private $_password = "";
    private $_dbname = "cv-maker";
 
    protected $con;
 
    public function __construct() {
        if (empty($this->con)) {
            $this->con = new mysqli($this->_host, $this->_databaseUser, $this->_password, $this->_dbname);
 
            if ($this->con) {
                return $this->con;
            } else {
                echo "Database not Connected!";
                exit;
            }
        }
 
        return $this->con;
    }
}
 
?>