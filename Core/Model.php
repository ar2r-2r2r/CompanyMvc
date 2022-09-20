<?php

namespace Core;

use Core\Database;

class Model
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

    public function getDB(string $table){
        $result=$this->db->query("SELECT * FROM ".$table);
        return $result;
    }
    public function sortAscDB(string $column, string $table){
        
        $result = $this->db->query("SELECT * FROM `".$table."` ORDER BY " . $column . " ASC ");
        return $result;
    }
    public function sortDescDB(string $column, string $table)
    {
        $result = $this->db->query("SELECT * FROM `".$table."` ORDER BY " . $column . " DESC ");
        return $result;
    }
    public function insertDB(string $fname,string $lname,string $dob,int $salary, string $table)
    {
        $this->db->execute("INSERT INTO `" .$table. "` SET `firstName`='$fname', `lastName`='$lname',
        `dob`='$dob', `salary`='$salary'");
    }
    public function editDB(int $id,string $fname,string $lname,string $dob,string $salary,$table)
    {
        $this->db->execute("UPDATE `" .$table. "` SET `firstName`='$fname', `lastName`='$lname', `dob`='$dob',
 `salary`='$salary' WHERE `id`='$id' ");
    }
    
    public function deleteDB(int $id,$table)
    {
        $this->db->execute("DELETE FROM `" .$table. "` WHERE `id`='$id'");
    }
    
}
