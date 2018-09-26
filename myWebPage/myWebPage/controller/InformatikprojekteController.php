<?php
/**
 * Created by PhpStorm.
 * User: irisb
 * Date: 26.08.2018
 * Time: 13:57
 */

class InformatikprojekteController
{
    public function index(){
        $view = new View('InformatikProjekte');
        $view->title = 'Projekte';
        $view->heading = 'Projekte';
        $view->display();
    }
}