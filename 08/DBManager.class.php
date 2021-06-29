<?php

class DBManager
{
    private static $instance;
    private $id;
    
    private function __construct()
    {
        $this->id = md5(date("r", mt_rand()));
        print "DBManagerを生成しました<br />";
    }
    public static function getInstance()
    {
        if(!isset(DBManager::$instance)){
            DBManager::$instance = new DBManager();
        }
        print "DBManagerを戻します<br />";
        return DBManager::$instance;
    }
    public function getId(){return $this->id;}
}

?>
