<?php
/**
 * Created by PhpStorm.
 * User: irisb
 * Date: 26.08.2018
 * Time: 13:44
 */

class PortraetController
{
    public function index(){
        $view = new View('Portraet');
        $view->title = 'Porträt';
        $view->heading = 'Porträt';
        $view->display();
    }
}