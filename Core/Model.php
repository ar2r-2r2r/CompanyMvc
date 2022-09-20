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
    public function insertDB(string $fname,string $lname,string $dob,int $salary, string $table, string $field1, string $field2, string $field3, string $field4)
    {
        $this->db->execute("INSERT INTO `" .$table. "` SET `".$field1."`='$fname', `".$field2."`='$lname',
        `".$field3."`='$dob', `".$field4."`='$salary'");
    }
    public function editDB(int $id,string $fname,string $lname,string $dob,string $salary,$table, string $field1, string $field2, string $field3, string $field4,string $field5)
    {
        $this->db->execute("UPDATE `" .$table. "` SET `".$field1."`='$fname', `".$field2."`='$lname', `".$field3."`='$dob',
 `".$field4."`='$salary' WHERE `".$field5."`='$id' ");
    }
    
    public function deleteDB(int $id,$table, string $field5)
    {
        $this->db->execute("DELETE FROM `" .$table. "` WHERE `".$field5."`='$id'");
    }
    
}
