<?php 


define('LOCALHOST','localhost'); 
define('SGBD','mysql');
define('DB_HOST','localhost');
define('DB_NAME','promo_php');
define('DB_USER','root');
define('DB_PASS','');
$pdo= new PDO(SGBD.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);

$req = $pdo->prepare('SELECT * FROM my_message');
$req->execute(array());
$resultat=$req->FetchAll(PDO::FETCH_ASSOC); 


foreach($resultat as $value)

{
    echo $value['msg'].'<br>'; 
}



?>