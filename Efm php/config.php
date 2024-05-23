<?php
$sdn='mysql:host=localhost;dbname=gestionStagiaire_v1;charset=utf8';
$username='root';
$password='';

try{
    $pdo= new PDO($sdn,$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo 'connected';
}
catch(PDOException $e)
{
echo'erreur de connection :'.$e->getMessage();
exit();
}





?>