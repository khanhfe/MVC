<?php 

class db
{
	public $con;
	protected $servername = "localhost";
	protected $username = "root";
	protected $password = "";
	protected $dbname = "project_db";
	
	function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
    function __destruct()
    {
    	mysqli_close($this->con);
    }
}
?>