<?php
$dns = 'mysql:host=localhost;dbname=mini_chat';
$user = 'root';
$password = '';

try{
    $db = new PDO( $dns, $user, $password);
    // echo "connexion établi" ;
}
catch (Exception $message){
    echo "ya un blem <br>" . "<pre>$message</pre>" ;
}
?>
