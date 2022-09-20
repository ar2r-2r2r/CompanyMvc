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
        if (isset($_GET['firstName'])) { //если были переданы данные, то заносим их в бд
            $employee = new Employee();
            $firstName = htmlspecialchars($_GET['firstName']);
            $lastName = htmlspecialchars($_GET['lastName']);
            $dob = htmlspecialchars($_GET['dob']);
            $salary = htmlspecialchars($_GET['salary']);
            $employee->setAll($firstName, $lastName, $dob, $salary); //отправляем данные в бд
            header('Location: ../public/index.php');
        } else { //если данные ещё не были переданы, то загружаем рендер страницы
            $employee = new Employee();
            View::render('Add/Add.php');
        }
    }
    public function editAction()
    {

        if (isset($_GET['firstName'])) { //если были переданы данные, то заносим их в бд
            $employee = new Employee();
            $firstName = htmlspecialchars($_GET['firstName']);
            $lastName = htmlspecialchars($_GET['lastName']);
            $dob = htmlspecialchars($_GET['dob']);
            $salary = htmlspecialchars($_GET['salary']);
            $id = htmlspecialchars($_GET['id']);
            $employee->edit($id, $firstName, $lastName, $dob, $salary); //отправляем данные в бд
            header('Location: ../public/index.php');
        } else { //если данные ещё не были переданы, то загружаем рендер страницы
            $id = $_GET['id'];
            View::render('Edit/Edit.php', [
                'id' => $id,
            ]);
        }

    }
    public function deleteAction()
    {

        if (isset($_GET['id'])) { //если были переданы данные, то заносим их в бд
            $employee = new Employee();

            $employee->delete((htmlspecialchars($_GET['id']))); //отправляем данные в бд
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
