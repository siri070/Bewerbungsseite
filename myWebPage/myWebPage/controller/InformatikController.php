<?php
/**
 * Created by PhpStorm.
 * User: irisb
 * Date: 26.08.2018
 * Time: 13:56
 */

class InformatikController
{
    public function index(){
        $view = new View('StärkenInformatik');
        $view->title = 'Stärken';
        $view->heading = 'Stärken';
        $view->display();
    }
}