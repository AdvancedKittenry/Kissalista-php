<?php 
namespace kissalista;

require_once 'utils/common.php';

utils\Session::setUser(null);
utils\redirect('login.php');