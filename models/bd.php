<?php

const server = "localhost";
const nomBD = "cerbs";
const user = "root";
const mdp = "";
$dns = "mysql:host=".server.";dbname=".nomBD.";charset=utf8";
$option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $bd = new PDO($dns,user,mdp,$option);
} catch (PDOException $th) {
    die("message d'erreur").$th->getMessage();
}



?>