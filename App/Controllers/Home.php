<?php

namespace App\Controllers;

use App\Models\Employee;
use \Core\View;

class Home extends \Core\Controller

{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
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
