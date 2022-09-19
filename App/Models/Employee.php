<?php

namespace App\Models;

class Employee extends \Core\Model

{

    protected $id;
    protected $firstName;
    protected $lastName;
    protected $dob;
    protected $salary;

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $result = static::getDB();
        return $result;
    }
    public static function sortAscByFN()
    {
        $result = static::sortAscDB('firstName');
        return $result;
    }
    public static function sortDescByFN()
    {
        $result = static::sortDescDB('firstName');
        return $result;
    }
    public static function sortAscByLN()
    {
        $result = static::sortAscDB('lastName');
        return $result;
    }
    public static function sortDescByLN()
    {
        $result = static::sortDescDB('lastName');
        return $result;
    }
    //sorts
    public static function sortAscByDOB()
    {
        $result = static::sortAscDB('dob');
        return $result;
    }
    public static function sortDescByDOB()
    {
        $result = static::sortDescDB('dob');
        return $result;
    }
    public static function sortAscByS()
    {
        $result = static::sortAscDB('salary');
        return $result;
    }
    public static function sortDescByS()
    {
        $result = static::sortDescDB('salary');
        return $result;
    }

    public static function setAll($firstName, $lastName, $dob, $salary)
    {
        static::insertDB($firstName, $lastName, $dob, $salary);
    }
    public static function edit($id, $firstName, $lastName, $dob, $salary)
    {
        static::editDB($id, $firstName, $lastName, $dob, $salary);
    }
    public static function delete($id)
    {
        static::deleteDB($id);
    }
}
