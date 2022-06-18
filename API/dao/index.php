<?php
require '../vendor/autoload.php';

Flight::route('GET /bloodbanks', function(){

    $servername = "localhost";
    $username = "root";
    $schema="blooddonation";
    $password="root";

    $conn= new PDO("mysql:host=$servername;dbname=$schema", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($conn) {
    echo "Connected successfully";
    }
    $stmt = $conn->prepare("SELECT * FROM bloodbanks");
   $stmt->execute();
   Flight::json( $stmt->fetchAll(PDO::FETCH_ASSOC));

});


Flight::start();

?>
