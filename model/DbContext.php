<?php
    class DbContext {
        private $link;
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "test2";

        public function __construct() {
            $this->link = mysqli_connect($this->servername, $this->username, $this->password); 
            // mysqli_set_charset($this->link, "utf8");
            mysqli_select_db($this->link, $this->dbname);
            mysqli_query($this -> link, "SET NAMES 'utf8'");
        }

        public function executeQuery($query) {
            $result=mysqli_query($this->link,$query);

            return $result;
        }
    }

?>