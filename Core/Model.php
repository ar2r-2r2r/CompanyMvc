<?php

namespace Core;

use Core\Database;

abstract class Model
{
    public Database $db;
    /**
     * Get the PDO database connection
     *
     * @return mixed
     */

    public function __construct()
    {
        $this->db=new Database;
    }
    
    protected function getConnect(): Database{
        return $this->db;
    }
    //Общие методы подходящие ко многим моделям, без привязки к самим моделям
    public function getDB(){
        $result=$this->db->query("SELECT * FROM ".$this->table);
        return $result;
    }
    public function sortAscDB(string $column){
        $result = $this->db->query("SELECT * FROM `".$this->table."` ORDER BY " . $column . " ASC ");
        return $result;
    }
    public function sortDescDB(string $column)
    {
        $result = $this->db->query("SELECT * FROM `".$this->table."` ORDER BY " . $column . " DESC ");
        return $result;
    }
    
    
}
