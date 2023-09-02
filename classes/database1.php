<?php

abstract class Database1{
    public function connect();
    public function query();
    public function insertId();

    public function setHost($host){
        // set host here ...
    }

    public function setDB($db){
        //set database here...
    }

    public function setUser($user){
        // set user name..
    }

    public function setPass($pass){
        //set password..
    }
}

?>