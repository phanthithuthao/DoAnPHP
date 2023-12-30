<?php
if (!defined('HOST')) exit;
class db{
    protected static $pdo;
                   
    public function __construct()
    {
            self::$pdo= new PDO('mysql:host='.HOST.';dbname=' . DB, USER,PW);
            self::$pdo->query('set names utf8');
            //$this->pdo    self::$pdo 

    }

    protected function selectQuery($sql, $arr=[])
    {
        $stm = self::$pdo->prepare($sql);
        $stm->execute($arr);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    /*  
    su dung cho cac sql insert, update, delete
    */
    protected function updateQuery($sql, $arr=[])
    {
        $stm = self::$pdo->prepare($sql);
        $stm->execute($arr);
        return $stm->rowCount();
    }
}