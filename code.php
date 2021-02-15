<?php
require ("dbConfig.php");

if(isset($_POST['subbut'])){
    $pass = $_POST['name'];
    $email = $_POST['email'];

    $auth = $firebase->createAuth();
    // $user = $auth->createUserWithEmailAndPassword($email,$pass);
    $user = $auth->signInWithGoogleIdToken($pass);
    header("Location:index.php");
}
else{
    $pass = $_POST['name'];
    $email = $_POST['email'];

    $auth = $firebase->createAuth();
    $user = $auth->signInWithEmailAndPassword($email,$pass);
    if($user){
        echo '<script>alert("Signin successful")</script>';
    }
    else
    {
        echo '<script>alert("Signin error")</script>';
    }


}

// $data = [
//     'name'=> $name,
//     'email' => $email
// ];

// $ref = "contact/";
// $postdata = $database->getReference($ref)->push($data);

// if($postdata){
//     echo '<script>alert("data inserted")</script>';
// }



?>