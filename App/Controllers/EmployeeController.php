<?php

namespace App\Controllers;

use App\Models\Employee;
use \Core\View;

class EmployeeController extends \Core\Controller

{

    /**
     * Show the index page
     *
     * @return void
     */
    public function addAction()
    {
        if (isset($_POST['firstName'])) { //если были переданы данные, то заносим их в бд
            $employee = new Employee();
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $dob = $_POST['dob'];
            $salary = $_POST['salary'];
            $employee->setAll($firstName, $lastName, $dob, $salary); //отправляем данные в бд
            header('Location: ../public/index.php');
        } else { //если данные ещё не были переданы, то загружаем рендер страницы
            $employee = new Employee();
            View::render('Add/Add.php');
        }
    }
    public function editAction()
    {

        if (isset($_POST['firstName'])) { //если были переданы данные, то заносим их в бд
            $employee = new Employee();
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $dob = $_POST['dob'];
            $salary = $_POST['salary'];
            $id = $_POST['id'];
            $employee->edit($id, $firstName, $lastName, $dob, $salary); //отправляем данные в бд
            header('Location: ../public/index.php');
        } else { //если данные ещё не были переданы, то загружаем рендер страницы
            $id = $_POST['id'];
            View::render('Edit/Edit.php', [
                'id' => $id,
            ]);
        }

    }
    public function deleteAction()
    {

        if (isset($_POST['id'])) { //если были переданы данные, то заносим их в бд
            $employee = new Employee();

            $employee->delete($_POST['id']); //отправляем данные в бд
            header('Location: ../public/index.php');
        }

    }
    public function homeAction()
    {
        $employee = new Employee();
        View::render('Home/index.php', [
            'result' => $employee->getAll(),
        ]);
    }

    public function sortAscByFNAction()
    {
        $employee = new Employee();
        View::render('Home/index.php', [
            'result' => $employee->sortAscByFN(),
        ]);
    }
    public function sortDescByFNAction()
    {
        $employee = new Employee();
        View::render('Home/index.php', [
            'result' => $employee->sortDescByFN(),
        ]);
    }
    public function sortAscByLNAction()
    {
        $employee = new Employee();
        View::render('Home/index.php', [
            'result' => $employee->sortAscByLN(),
        ]);
    }
    public function sortDescByLNAction()
    {
        $employee = new Employee();
        View::render('Home/index.php', [
            'result' => $employee->sortDescByLN(),
        ]);
    }
    public function sortAscByDOBAction()
    {
        $employee = new Employee();
        View::render('Home/index.php', [
            'result' => $employee->sortAscByDOB(),
        ]);
    }
    public function sortDescByDOBAction()
    {
        $employee = new Employee();
        View::render('Home/index.php', [
            'result' => $employee->sortDescByDOB(),
        ]);
    }
    public function sortAscBySAction()
    {
        $employee = new Employee();
        View::render('Home/index.php', [
            'result' => $employee->sortAscByS(),
        ]);
    }
    public function sortDescBySAction()
    {
        $employee = new Employee();
        View::render('Home/index.php', [
            'result' => $employee->sortDescByS(),
        ]);
    }
}
