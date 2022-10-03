<?php

namespace App\Models;

use Core\Model;

class EmployeeModel extends \Core\Model

{

    protected $dbEmployer;
    protected string $table='employer';
    /**
     * Get all the users as an associative array
     *
     * @return array
     */

    public function __construct()
    {
        $this->dbEmployer=new Model();
        
            $this->dbEmployer->db->execute("CREATE TABLE IF NOT EXISTS employer (
                id INT AUTO_INCREMENT PRIMARY KEY,
                firstName VARCHAR(30) NOT NULL,
                lastName VARCHAR(30) NOT NULL,
                dob date,
                salary int
            )
            ");
        
    }

    public function selectAll()
    {
        $result=$this->dbEmployer->db->query("SELECT * FROM ".$this->table." ");
        return $result;
    }
    public function insertAll(string $firstName, string $lastName, string $dob, int $salary)
    {
        $this->dbEmployer->db->execute("INSERT INTO `" .$this->table. "` SET `firstName`='$firstName', `lastName`='$lastName',
        `dob`='$dob', `salary`='$salary'");
    }

    public function edit(int $id, string $firstName,string $lastName,string $dob,int $salary)
    {
        $this->dbEmployer->db->execute("UPDATE `" .$this->table. "` SET `firstName`='$firstName', `lastName`='$lastName', `dob`='$dob',
        `salary`='$salary' WHERE `id`='$id' ");
    }
    public function delete(int $id)
    {
        $this->dbEmployer->db->execute("DELETE FROM `" .$this->table. "` WHERE `id`='$id'");
    }


    public function sortAscByFN()
    {
        
        $result = $this->dbEmployer->sortAscDB('firstName', 'employer');
        return $result;
    }
    public function sortDescByFN()
    {
        
        $result = $this->dbEmployer->sortDescDB('firstName','employer');
        return $result;
    }
    public function sortAscByLN()
    {
        $result = $this->dbEmployer->sortAscDB('lastName','employer');
        return $result;
    }
    public function sortDescByLN()
    {
        $result = $this->dbEmployer->sortDescDB('lastName','employer');
        return $result;
    }
    //sorts
    public function sortAscByDOB()
    {
        $result = $this->dbEmployer->sortAscDB('dob','employer','employer');
        return $result;
    }
    public function sortDescByDOB()
    {
        $result = $this->dbEmployer->sortDescDB('dob','employer','employer');
        return $result;
    }
    public function sortAscByS()
    {
        $result = $this->dbEmployer->sortAscDB('salary','employer','employer');
        return $result;
    }
    public function sortDescByS()
    {
        $result = $this->dbEmployer->sortDescDB('salary','employer','employer');
        return $result;
    }
}
