<?php

namespace App\Models;

use Core\EmployeeModel;

// class Employee extends \Core\Model;
class Employee extends \Core\EmployeeModel

{

    protected int $id;
    protected string $firstName;
    protected string $lastName;
    protected string $dob;
    protected int $salary;

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $dbEmployer= new EmployeeModel();
        $result = $dbEmployer->getDB();
        return $result;
    }
    public static function sortAscByFN()
    {
        $dbEmployer= new EmployeeModel();
        $result = $dbEmployer->sortAscDB('firstName');
        return $result;
    }
    public static function sortDescByFN()
    {
        $dbEmployer= new EmployeeModel();
        $result = $dbEmployer->sortDescDB('firstName');
        return $result;
    }
    public static function sortAscByLN()
    {
        $dbEmployer= new EmployeeModel();
        $result = $dbEmployer->sortAscDB('lastName');
        return $result;
    }
    public static function sortDescByLN()
    {
        $dbEmployer= new EmployeeModel();
        $result = $dbEmployer->sortDescDB('lastName');
        return $result;
    }
    //sorts
    public static function sortAscByDOB()
    {
        $dbEmployer= new EmployeeModel();
        $result = $dbEmployer->sortAscDB('dob');
        return $result;
    }
    public static function sortDescByDOB()
    {
        $dbEmployer= new EmployeeModel();
        $result = $dbEmployer->sortDescDB('dob');
        return $result;
    }
    public static function sortAscByS()
    {
        $dbEmployer= new EmployeeModel();
        $result = $dbEmployer->sortAscDB('salary');
        return $result;
    }
    public static function sortDescByS()
    {
        $dbEmployer= new EmployeeModel();
        $result = $dbEmployer->sortDescDB('salary');
        return $result;
    }

    public static function setAll(string $firstName, string $lastName, string $dob, int $salary)
    {
        $dbEmployer= new EmployeeModel();
        $dbEmployer->insertDB($firstName, $lastName, $dob, $salary);
    }
    public static function edit(int $id, string $firstName,string $lastName,string $dob,int $salary)
    {
        $dbEmployer= new EmployeeModel();
        $dbEmployer->editDB($id, $firstName, $lastName, $dob, $salary);
    }
    public static function delete(int $id)
    {
        $dbEmployer= new EmployeeModel();
        $dbEmployer->deleteDB($id);
    }
}
