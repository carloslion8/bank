<?php 

ini_set('display_errors', '1');
error_reporting(E_ALL); 


spl_autoload_register(function($class){

    $caminhoArqv = str_replace('Project\\Dev', 'src', $class);

    $caminhoArqv = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArqv);

    $caminhoArqv .= '.php';

    if(file_exists($caminhoArqv))
    {
        require $caminhoArqv;
    }
});

use Project\Dev\Model\Bank\Account;
use Project\Dev\Model\Bank\User;

use Project\Dev\Model\Adress;
use Project\Dev\Model\Id;
use Project\Dev\Model\Person;
use Project\Dev\Model\Employe;



$user = new User();
echo $user -> getUser();

echo '<br>';

$account = new Account();
echo $account -> getName();


