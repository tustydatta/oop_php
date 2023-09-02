<?php

class database{
    public $driver;
    public $link;

    public function setDriver($driver){
        $this->driver = $driver;
    }
    public function connect(){
        if($this->driver == "mysql"){
            $mngmysql = new ManageMysql();
            $mngmysql->setHost($host);
            $mngmysql->setDB($db);
            $mngmysql->setUser($user);
            $mngmysql->setpass($pass);
            $this->link = $mngmysql->connect();

        }elseif($this->driver == "sqlite"){
            $mngsqlite = new manageSqlite();
            $mngsqlite->setHost($host);
            $mngsqlite->setDB($db);
            $mngsqlite->setUser($user);
            $mngsqlite->setpass($pass);
            $this->link = $mngsqlite->connet();
            
        }
    }
}

?>