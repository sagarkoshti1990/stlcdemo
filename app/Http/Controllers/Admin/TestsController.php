<?php

namespace App\Http\Controllers\Admin;

use Sagartakle\Laracrud\Controllers\StlcController;
use Sagartakle\Laracrud\Models\Module;
use App\Models\Test;

class TestsController extends StlcController
{
    function __construct() {
        $this->crud = Module::make('Tests');
    }
    
    // write custom function or override function.
}
