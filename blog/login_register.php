<?php 
require_once 'boot.php';

if(isset($_SESSION['loggedUser'])){
    header('Location: index.php');
}
 
if(isset($_POST['registerBtn'])){
    $user->registerUser();
}

if(isset($_POST['loginBtn'])){
    $user->logUser();
}


require_once 'views/loginRegister_view.php';
?>