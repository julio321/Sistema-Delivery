<?php


session_start();
require('delicontrole.php');
require('delimodel.php');

define('INCLUDE_PATH','http://localhost/teste/delivery/');

$delicontrole = new deliControle();

$delicontrole->index();


?>