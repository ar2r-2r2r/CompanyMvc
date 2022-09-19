<?php

namespace App\Controllers;

use App\Models\Employee;

class Delete extends \Core\Controller

{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {

        if (isset($_POST['id'])) { //если были переданы данные, то заносим их в бд
            $employee = new Employee();

            $employee->delete($_POST['id']); //отправляем данные в бд
            header('Location: ../public');
        }

    }

}
