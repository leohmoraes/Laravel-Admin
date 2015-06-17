<?php
/**
 * Created by PhpStorm.
 * User: leosjoberg
 * Date: 17/06/15
 * Time: 13:58
 */

namespace RLStudio\Admin\Controllers;

use Illuminate\Routing\Controller;

class AdminController extends Controller
{

    private $models;

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
//        $this->models = new ModelConfig();
    }

    public function getDashboard()
    {
        return view('admin.dashboard');
    }

}