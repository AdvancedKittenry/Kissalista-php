<?php
namespace kissalista;

require_once 'src/common.php';

Session::ensureLogin();

$view = new View("koe");
$view->title = "Kissalista";
$view->display();