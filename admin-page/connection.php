<?php
$hostname="localhost";
$username="root";
$password="";
$db_name="project_cashback";

try{
    $pdo=new PDO("mysql:host=$hostname;dbname=$db_name",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


}catch(PDOException $e){
    echo "coneection failed".$e->getMessage();

}

?>

