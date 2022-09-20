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
    abstract function getDB();

    // protected static function sortAscDB($column)
    // {
    //     $db = new Database;
    //     $result = $db->query("SELECT * FROM employer ORDER BY " . $column . " ASC ");
    //     return $result;
    // }
    // protected static function sortDescDB($column)
    // {
    //     $db = new Database;
    //     $result = $db->query("SELECT * FROM employer ORDER BY " . $column . " DESC ");
    //     return $result;
    // }
    // protected static function insertDB($fname, $lname, $dob, $salary)
    // {
    //     $db = new Database;
    //     $db->execute("INSERT INTO `employer` SET `firstName`='$fname', `lastName`='$lname',
    //     `dob`='$dob', `salary`='$salary'");
    // }
//     protected static function editDB($id, $fname, $lname, $dob, $salary)
//     {
//         $db = new Database;
//         $db->execute("UPDATE `employer` SET `firstName`='$fname', `lastName`='$lname', `dob`='$dob',
//  `salary`='$salary' WHERE `id`='$id' ");
//     }
    // protected static function deleteDB($id)
    // {
    //     $db = new Database;
    //     $db->execute("DELETE FROM `employer` WHERE `id`='$id'");
    // }

}
