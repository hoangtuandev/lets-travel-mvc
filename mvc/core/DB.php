<?php
class DB{
    public $connect ;
    protected $servername = "localhost" ;
    protected $username = "root" ;
    protected $password = "" ;    
    protected $dbname = "mvc" ;

    function __construct()
    {
        $this->connect = mysqli_connect($this->servername, $this->username, $this->password) ;
        mysqli_select_db($this->connect, $this->dbname) ;

        // Set up tieng Viet
        mysqli_query($this->connect, "SET NAME 'utf8'") ;
        
    }
}
?>