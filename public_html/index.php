<?php  
require_once "star.php";

// require_once '../app_software/Routers/routes.php';

use Controllers\Users; 

$user = Users::create_user("Johann Sebastian Ramírez","johann.devfull@gmail.com","Johann123");


echo "Hola mundo";

print_r($user);




?>