<?php
namespace Application\Controllers;

use Edge\Controllers\BaseController;

class Home extends BaseController{

    protected static $layout = 'Layouts/ui.layout.tpl';

    /**
     * Render the layout with the contents
     * of Application/Views/ui.index.tpl
     * @return mixed|string
     */
    public function index(){
        $tpl = static::loadView('ui.index.tpl');
        $tpl->title = 'Welcome to Edge';
        return parent::render($tpl, [
            'title' => 'Edge MVC'
        ]);
    }

    public function renderList(){
        $tpl = static::loadView('ui.list.tpl');
        $tpl->title = 'Welcome to Edge';
        $tpl->list = ["one", "two", "three"];
        return parent::render($tpl, [
            'title' => 'Edge MVC'
        ]);
    }
}