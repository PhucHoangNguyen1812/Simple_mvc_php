<?php
class DBContext {
    public $connect;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "phpmvc";

    function __construct() 
    {
        $this -> connect = mysqli_connect($this-> servername, $this ->username, $this -> password, $this -> dbname);
        mysqli_select_db($this ->connect, $this ->dbname);
        mysqli_query($this ->connect, "SET NAMES 'utf8'");
    }

}
?>