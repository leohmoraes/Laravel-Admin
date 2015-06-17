<?php
/**
 * Created by PhpStorm.
 * User: leosjoberg
 * Date: 17/06/15
 * Time: 10:20
 */

namespace RLStudio\Admin;


class ModelConfig
{
    private $modelConfigRoute = 'admin.models';


    public function __get($modelName)
    {
        return $this->modelConfigRoute . ".{$modelName}";
    }
}