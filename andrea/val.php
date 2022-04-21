<?php 
session_start();
#afficher erreur php
ini_set('display_errors','1');

include("classe/db_connect.php");
include("classe/Adherant.php");



$myC = new Connect_pdo;

try {
    $myC->getConnectDB();

    // print_r($myC->getConnectDB());
    $db = $myC->getConnectDB();

    
    #instancier mes classes
    $ad = new Adherant();
    

} catch(Exception $e){
    echo $e->getMessage(), "\n";
}

$ad -> adhesion($_POST,$_FILES);

