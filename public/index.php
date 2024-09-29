<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'function.php';

// spl_autoload_register(function ($class){
//     var_dump(base_path($class . '.php'));
// });


require base_path('Database.php') ;
require base_path( 'route.php');



?>