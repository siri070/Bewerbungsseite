<?php

/*
 * Die index.php Datei ist der Einstiegspunkt des MVC. Hier werden zuerst alle
 * vom Framework benötigten Klassen geladen und danach wird die Anfrage dem
 * Dispatcher weitergegeben.
 *
 * Wie in der .htaccess Datei beschrieben, werden alle Anfragen, welche nicht
 * auf eine bestehende Datei zeigen hierhin umgeleitet.
 */
session_start();
if(!isset($_SESSION['privat'])){
    $_SESSION['privat']=0;
}
$GLOBALS['appurl']= "/Bewerbungsseite/myWebPage/myWebPage/public";
$GLOBALS['numAppurlFragments'] = 4;
require_once '../lib/Dispatcher.php';
require_once '../lib/formbuilder/FormBuilder.php';
require_once '../lib/View.php';

$dispatcher = new Dispatcher();
$dispatcher->dispatch();
