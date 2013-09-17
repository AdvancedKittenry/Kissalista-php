<?php 

namespace kissalista;

require_once 'view.php';
require_once 'session.php';

require_once 'models/user.php';

function redirect($address) {
    header("Location: $address");
    die();
}