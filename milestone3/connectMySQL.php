<?php
class MySQLDatabase {

    private $link = null;

    private static $_instance;

    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpassword = 'bc16f8414e2133ca';
    private $db = 'milestone2';



    function connect() {
        $this->link = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpassword);
        if(!$this->link) {
            die('Not connected : ' . mysqli_connect_error());
        }
        $database = mysqli_select_db($this->link, $this->db);
        if(!$database){
            die ('Cannot use : ' . $this->db);
        }
    }

    function query($query) {
        $result = mysqli_query($this->link, $query);
        if($result) {
            return $result;
        }
        else {
            die(mysqli_error($this->link)); // useful for debugging
        }
        return null;
    }



    function disconnect() {
        mysqli_close($this->link);
    }


/*
    public function getConnection() {
        return $this->link;
    }

    public static function getInstance() {
        if(!self::$_instance) { // If no instance then make one
            self::$_instance = new self();
        }
        return self::$_instance;
    }*/
}
