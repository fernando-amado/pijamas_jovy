<?php

namespace Core;

class Controller
{
    /**
     * @var default layout
     */
    public $layout = "layoutDashboard";


    public function render($view, $title='', $objects=null, $withLayout=true)
    {
        if (is_array($objects)) {
            extract($objects, EXTR_PREFIX_SAME, 'data');
        } else {
            $data=$objects;
        }

        define('content', 'vistas/'.$view.''.'.php');
        
        if ($withLayout) {
            require'view/_templates/'.$this->layout.'.php';
        } else {
            require content;
        }
    }
}