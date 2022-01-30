<?php

require_once "bd.php";

function insereEtudiant($nom,$prenom,$ville,$email,$adresse,$fil,$tel,$id)
{
    $req = "INSERT INTO etudiant(nomEt,prenomEt,villeEt,emailEt,adresseEt,filEt,telEt,idNivF) VALUES ('$nom','$prenom','$ville','$email','$adresse','$fil','$tel',$id)";
    global $bd;
    return $bd -> exec($req); 
}

function obtenirNiveau()
{
    $requete = "SELECT * FROM niveau";
    global $bd;
    return $bd -> query($requete)-> fetchAll();
}

function obtenirEtudiant()
{
    $req = "SELECT * FROM etudiant, niveau where idNivF =  idNiv";
    global $bd;
    return $bd -> query($req) -> fetchAll();
}

function trouverEtudiant($id)
{
    $req = "SELECT * FROM etudiant where id = $id";
    global $bd;
    return $bd -> query($req) -> fetch();
}

function modiftudiant($nom,$prenom,$ville,$email,$adresse,$fil,$tel,$idNiv,$id)
{
    $req = "UPDATE etudiant SET nomEt = '$nom', prenomEt = '$prenom', villeEt = '$ville', emailEt = '$email', adresseEt = '$adresse',filEt = '$fil', telEt = '$tel',  idNivF = $idNiv where id = $id ";

    global $bd;
    return $bd -> exec($req);
}


?>