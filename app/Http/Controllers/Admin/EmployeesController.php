<?php

namespace App\Http\Controllers\Admin;

use Sagartakle\Laracrud\Controllers\StlcController;
use Sagartakle\Laracrud\Models\Module;
use App\Models\Employee;

class EmployeesController extends StlcController
{
    function __construct() {
        $this->crud = Module::make('Employees');
    }
    
    // write custom function or override function.
}
