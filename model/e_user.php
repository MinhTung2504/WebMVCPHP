<?php
class E_User
{
    public $id;
    public $username;
    public $password;
    public $name;
        public function __construct($_id, $_username, $_password, $_name)
        {
            $this->id = $_id;
            $this->username = $_username;
            $this->password = $_password;
            $this->name = $_name;
        }
}
?>