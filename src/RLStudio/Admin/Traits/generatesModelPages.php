<?php
/**
 * Created by PhpStorm.
 * User: leosjoberg
 * Date: 17/06/15
 * Time: 16:44
 */

namespace RLStudio\Admin\Traits;


use RLStudio\Admin\ModelConfig;

trait GeneratesModelPages
{
    private $model;
    private $plural;
    private $class;
    private $fields;
    private $viewBase;

    /**
     * generatesModelPages constructor.
     */
    public function __construct()
    {
        $modelName = \Route::current()->parameters()['model'];
        $model = new ModelConfig();
        $this->model = $model->$modelName;
        $this->plural = str_plural($modelName);
        if (is_object($model->$modelName->class)) {
            $this->class = $model->$modelName->class;
        } else {
            $this->class = '\\' . $model->$modelName->class;
        }
        $this->fields = $model->$modelName->fields;
        $this->viewBase = 'admin.models.' . $this->plural . '.';
    }


    public function index($modelName)
    {

        $view = 'all';
        $data = {$this->class}::all($this->fields);
        return $this->showView($view, $data);
    }

    public function create($modelName)
    {
        $view = 'create';
        return $this->showView($view);
    }

    public function edit($modelName)
    {
        $view = 'edit';
        return $this->showView($view);
    }

    public function postModelCreate($modelName, Request $request)
    {

    }

    private function showView($view, $data = [])
    {
        $customView = $this->viewBase . $view;
        if (view()->exists($customView)) {
            ${$this->plural} = $data;
            return view($view, compact($this->plural));
        }

        $entries = $data;
        // If there's no model-specific view, use a generic view
        return view('admin.models.generic.' . $view, compact('entries'));
    }
}