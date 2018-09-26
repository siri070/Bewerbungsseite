<?php
/**
 * Created by PhpStorm.
 * User: irisb
 * Date: 26.08.2018
 * Time: 13:51
 */

class GeschuetzerController
{
    public function index(){
        $view = new View('GeschuetzerBereich');
        $view->title = 'Schulische Leistungen';
        $view->heading = 'Schulische Leistungen';
        $view->display();
    }
}