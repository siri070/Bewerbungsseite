<?php
/**
 * Created by PhpStorm.
 * User: irisb
 * Date: 26.08.2018
 * Time: 13:58
 */

class HomeController
{
    public function index(){
        $view = new View('Home');
        $view->title = 'Startseite';
        $view->heading = 'Startseite';
        $view->display();
    }
}