<?php 
namespace kissalista;

require_once 'utils/common.php';

$view = new utils\View("login");
$view->title = "Kirjaudu sisään";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $user = models\user::getUser($username, $password);
    if ($user) {
        utils\Session::setUser($user);
        utils\redirect("index.php");
    } else {
        $view->setError("Virhe kirjautumisessa: tarkista tunnuksesi!");
    }
}
$view->display();