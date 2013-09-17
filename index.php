<?php
namespace kissalista;

require_once 'utils/common.php';

utils\Session::ensureLogin();

$view = new utils\View("koe");
$view->title = "Kissalista";
$view->display();