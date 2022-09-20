<?php

namespace Core;

use Core\Database;
use Core\Model;

class EmployeeModel extends Model{
    public string $table='employer';
    
    public function insertDB(string $fname,string $lname,string $dob,int $salary)
    {
        $this->db->execute("INSERT INTO `employer` SET `firstName`='$fname', `lastName`='$lname',
        `dob`='$dob', `salary`='$salary'");
    }
    public function editDB(int $id,string $fname,string $lname,string $dob,string $salary)
    {
        $this->db->execute("UPDATE `employer` SET `firstName`='$fname', `lastName`='$lname', `dob`='$dob',
 `salary`='$salary' WHERE `id`='$id' ");
    }
    
    public function deleteDB(int $id)
    {
        $this->db->execute("DELETE FROM `" .$this->table. "` WHERE `id`='$id'");
    }


}