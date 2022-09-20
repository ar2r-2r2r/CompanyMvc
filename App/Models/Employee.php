<?php

namespace App\Models;

use Core\Model;

// class Employee extends \Core\Model;
class Employee extends \Core\Model

{

    protected int $id;
    protected string $firstName;
    protected string $lastName;
    protected string $dob;
    protected int $salary;
    protected string $tableName='firstName';
    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $dbEmployer= new Model();
        $result = $dbEmployer->getDB('employer');
        return $result;
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

    public static function setAll(string $firstName, string $lastName, string $dob, int $salary)
    {
        $dbEmployer= new Model();
        $dbEmployer->insertDB($firstName, $lastName, $dob, $salary,'employer');
    }
    public static function edit(int $id, string $firstName,string $lastName,string $dob,int $salary)
    {
        $dbEmployer= new Model();
        $dbEmployer->editDB($id, $firstName, $lastName, $dob, $salary,'employer');
    }
    public static function delete(int $id)
    {
        $dbEmployer= new Model();
        $dbEmployer->deleteDB($id,'employer');
    }
}
