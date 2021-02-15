
<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
    
// $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/test-project-89dc8-firebase-adminsdk-p6h0f-b671684c04.json');
// $firebase = (new Factory)
//      ->withServiceAccount($serviceAccount)
//      ->withDatabaseUri('https://test-project-89dc8-default-rtdb.firebaseio.com/')
//      ->create();
     
     $firebase = (new Factory)->withServiceAccount(__DIR__.'/test-project-89dc8-firebase-adminsdk-p6h0f-b671684c04.json')
     ->withDatabaseUri('https://test-project-89dc8-default-rtdb.firebaseio.com/');


// $database = $factory->createDatabase();
     
     // $factory = (new Factory)->withServiceAccount(__DIR__.'/test-project-89dc8-firebase-adminsdk-p6h0f-b671684c04.json');
     

$database = $firebase->createDatabase();


// $database = $firebase->getDatabase();
printf("connection done");
?>

