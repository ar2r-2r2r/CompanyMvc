<?php

namespace App\Models;

use Core\Model;

class Employee extends \Core\Model

{

    protected int $id;
    protected string $firstName;
    protected string $lastName;
    protected string $dob;
    protected int $salary;
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
    }

    public function getAll()
    {
        $result=$this->dbEmployer->db->query("SELECT * FROM ".$this->table." ");
        return $result;
    }
    public function setAll(string $firstName, string $lastName, string $dob, int $salary)
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


    public static function sortAscByFN()
    {
        $dbEmployer= new Model();
        $result = $dbEmployer->sortAscDB('firstName', 'employer');
        return $result;
    }
    public static function sortDescByFN()
    {
        $dbEmployer= new Model();
        $result = $dbEmployer->sortDescDB('firstName','employer');
        return $result;
    }
    public static function sortAscByLN()
    {
        $dbEmployer= new Model();
        $result = $dbEmployer->sortAscDB('lastName','employer');
        return $result;
    }
    public static function sortDescByLN()
    {
        $dbEmployer= new Model();
        $result = $dbEmployer->sortDescDB('lastName','employer');
        return $result;
    }
    //sorts
    public static function sortAscByDOB()
    {
        $dbEmployer= new Model();
        $result = $dbEmployer->sortAscDB('dob','employer','employer');
        return $result;
    }
    public static function sortDescByDOB()
    {
        $dbEmployer= new Model();
        $result = $dbEmployer->sortDescDB('dob','employer','employer');
        return $result;
    }
    public static function sortAscByS()
    {
        $dbEmployer= new Model();
        $result = $dbEmployer->sortAscDB('salary','employer','employer');
        return $result;
    }
    public static function sortDescByS()
    {
        $dbEmployer= new Model();
        $result = $dbEmployer->sortDescDB('salary','employer','employer');
        return $result;
    }
}
