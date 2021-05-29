<?php
    class DbContext {
        private $link;

        public function __construct() {
            $this->link = mysqli_connect('localhost', 'root', '') or die("Could not connect to mySQL Database");
            mysqli_set_charset($this->link, 'utf8');
            mysqli_select_db($this->link, "test2");
        }

        public function executeQuery($query) {
            $result=mysqli_query($this->link,$query);

            return $result;
        }
    }

?>