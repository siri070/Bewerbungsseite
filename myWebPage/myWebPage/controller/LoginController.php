<?php
/**
 * Created by PhpStorm.
 * User: irisb
 * Date: 26.08.2018
 * Time: 13:57
 */

class LoginController
{
    public function index(){
        $view = new View('Login_GeschützerBereich');
        $view->title = 'Geschützer Bereich';
        $view->heading = 'Login';
        $view->display();
    }
    public function login(){
        $name = $_POST['Benutzer'];
        $passwort= $_POST['passwort'];
        $nameOk=false;
        $passwortOk = false;
        if($name = "Bewerbung"){
            $nameOk= true;
        }
        if($passwort="gibbiX12345"){
            $passwortOk=true;
        }
        if($passwortOk && $nameOk){
            $_SESSION['privat']=1;
            header("Location: ".$GLOBALS['appurl'].'/Geschuetzer');
        }
    }
    public function logout(){
        session_destroy();
        header("Location: ".$GLOBALS['appurl'].'/home');
    }
}