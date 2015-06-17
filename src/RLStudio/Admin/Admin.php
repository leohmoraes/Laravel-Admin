<?php
/**
 * Created by PhpStorm.
 * User: leosjoberg
 * Date: 17/06/15
 * Time: 10:20
 */

namespace RLStudio\Admin;


class Admin
{
    public $app;

    private $modelConfigRoute = 'admin.models';

    /**
     * Admin constructor.
     * @param $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }


    public function authenticate()
    {
        return config('admin.admin_access');
    }

    public function loginUri()
    {
        return config('admin.login_uri');
    }

    public function getModelConfigRoute($modelName)
    {
        $this->modelConfigRoute .= ".{$modelName}";
        return $this->modelConfigRoute;
    }

    public function modelConfig()
    {
        return new ModelConfig();
    }
}