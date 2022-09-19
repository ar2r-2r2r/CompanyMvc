<?php

namespace App\Controllers;

use App\Models\Employee;
use \Core\View;

class Add extends \Core\Controller

{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        if (isset($_POST['firstName'])) { //если были переданы данные, то заносим их в бд
            $employee = new Employee();
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $dob = $_POST['dob'];
            $salary = $_POST['salary'];
            $employee->setAll($firstName, $lastName, $dob, $salary); //отправляем данные в бд
            header('Location: ../public');
        } else { //если данные ещё не были переданы, то загружаем рендер страницы
            $employee = new Employee();
            View::render('Add/Add.php');
        }

    }

}
