<?php
$hostname="localhost";
$username="id22162351_cashbring";
$password="Cashbring@123";
$db_name="id22162351_cashbring";

try{
    $pdo=new PDO("mysql:host=$hostname;dbname=$db_name",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


}catch(PDOException $e){
    echo "coneection failed".$e->getMessage();

}

?>

