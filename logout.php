<?php 
namespace kissalista;

require_once 'src/common.php';

Session::setUser(null);
redirect('login.php');