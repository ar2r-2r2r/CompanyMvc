<?php

namespace Core;

use Core\Database;
use Core\Model;

class EmployeeModel extends Model{
    public function getDB(){
        $result=$this->db->query('SELECT * FROM employer');
        return $result;
    }
    public function sortAscDB(string $column){
        $result = $this->db->query("SELECT * FROM employer ORDER BY " . $column . " ASC ");
        return $result;
    }
    public function sortDescDB($column)
    {
        $result = $this->db->query("SELECT * FROM employer ORDER BY " . $column . " DESC ");
        return $result;
    }
    
    public function insertDB($fname, $lname, $dob, $salary)
    {
        $this->db->execute("INSERT INTO `employer` SET `firstName`='$fname', `lastName`='$lname',
        `dob`='$dob', `salary`='$salary'");
    }
    public function editDB($id, $fname, $lname, $dob, $salary)
    {
        $this->db->execute("UPDATE `employer` SET `firstName`='$fname', `lastName`='$lname', `dob`='$dob',
 `salary`='$salary' WHERE `id`='$id' ");
    }
    public function deleteDB($id)
    {
        $this->db->execute("DELETE FROM `employer` WHERE `id`='$id'");
    }

}